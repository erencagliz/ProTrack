<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class AddSale extends Controller
{
    public function index_for_everyone ()
    {
        error_reporting(0);
        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        return view('pages.sales.add-sale-for-everyone', ['projects' => $projects]);
    }
    public function index_for_team ()
    {
        error_reporting(0);
        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale', 'id' => tr_user_details(null, 'project_id')])->get();
        return view('pages.sales.add-sale-for-team', ['projects' => $projects]);
    }

    public function post (Request $request)
    {
        $validation = $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'office_id' => 'required|exists:offices,id',
            'product_id' => 'required|exists:products,id',
            'point' => 'required',
            'quantity' => 'required',
            'created_at' => 'required',
        ]);
        if ($validation) {
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
            $sale->user_id = $request->user_id;
            $sale->project_id = $request->project_id;
            $sale->office_id = $request->office_id;
            $sale->product_id = $request->product_id;
            $sale->point = $request->point;
            $sale->quantity = $request->quantity;
            $sale->created_at = $request->created_at ? $request->created_at.' '.date('H:i:s') : date('Y-m-d H:i:s');
            $sale->status = 'active';
            $sale->custom = $custom;
            $sale->save();
            if ($sale) {
                return redirect()->back()->withErrors(['success, Satış başarıyla eklendi.']);
            }
        }
    }
}
