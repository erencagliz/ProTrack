<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Pause;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ajax extends Controller
{
    public function return_products_with_option ($project_id = null)
    {
        if ($project_id) {
            if ($project_id == 8) {
                $products = Product::query()->where(['status' => 'active'])->get();
            } else {
                $products = Product::query()->where(['project_id' => $project_id, 'status' => 'active'])->get();
            }
        } else {
            $products = Product::query()->where(['status' => 'active'])->get();
        }
        return view('ajax.return_products_with_option', ['products' => $products]);
    }

    public function return_popover_users (Request $request)
    {
        error_reporting(0);
        $json = str_replace('&quot;', '"', $request->json);
        $json = json_decode($json, true);
        if ($json) {
            return view('ajax.return_popover_users', ['users' => $json]);
        }
    }

    public function return_target_inputs ()
    {
        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        $offices = Office::query()->where(['status' => 'active'])->get();
        $users = User::query()->select('users.id', 'users.name', 'users.surname')->join('user_details', 'user_details.user_id', '=', 'users.id')->join('projects', 'user_details.project_id', '=', 'projects.id')->where(['users.status' => 'active', 'projects.type' => 'sale'])->get();

        return view('ajax.return_target_inputs', [
            'projects' => $projects,
            'offices' => $offices,
            'users' => $users,
        ]);
    }

    public function add_sale (Request $request)
    {
        $validation = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
        ]);
        if ($validation) {
            $product = Product::query()->find($request->product_id);
            $iban_verify = $request->custom['iban_verify'];
            $sms_verify = $request->custom['sms_verify'];
            $customer_phone = $request->custom['customer_phone'];
            $custom = [
                'iban_verify' => $iban_verify == "true" ? true : false,
                'sms_verify' => $sms_verify == "true" ? true : false,
                'customer_phone' => $customer_phone,
            ];
            $custom = json_encode($custom);
            $sale = new Sale();
            $sale->user_id = Auth::user()->id;
            $sale->project_id = tr_user_details(Auth::user()->id, 'project_id');
            $sale->office_id = tr_user_details(Auth::user()->id, 'office_id');
            $sale->product_id = $request->product_id;
            $sale->point = $product->point * $request->quantity;
            $sale->quantity = $request->quantity;
            $sale->created_at = $request->created_at ? $request->created_at : date('Y-m-d H:i:s');
            $sale->status = 'pending';
            $sale->custom = $custom;
            $sale->save();
            if ($sale) {
                return [
                    'status' => 'success',
                    'message' => 'Satış başarıyla eklendi.',
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Satış eklenemedi.',
                ];
            }
        }
    }

    public function start_pause (Request $request)
    {
        $pause = new Pause();
        $pause->user_id = Auth::user()->id;
        $pause->start_date = date('Y-m-d H:i:s');
        $pause->status = 'active';
        $pause->save();
        if ($pause) {
            return [
                'status' => 'success',
                'message' => 'Mola başarıyla başlatıldı.',
            ];
        }

    }
    public function end_pause (Request $request)
    {
        $pause = Pause::query()->where(['user_id' => Auth::user()->id, 'status' => 'active', 'end_date' => null])->first();
        $pause->end_date = date('Y-m-d H:i:s');
        $pause->save();
        if ($pause) {
            return [
                'status' => 'success',
                'message' => 'Mola başarıyla durduruldu.',
            ];
        }
    }
}
