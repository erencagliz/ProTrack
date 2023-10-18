<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class TeamSales extends Controller
{
    public function index ()
    {
        error_reporting(0);

        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $status = request()->status;
        $user_id = request()->user_id;
        $product_id = request()->product_id;

        $sales = Sale::query()
            ->select('sales.*', 'products.name as product_name', 'products.title as product_title')
            ->join('products', 'products.id', '=', 'sales.product_id')
            ->join('projects', 'projects.id', '=', 'sales.project_id')
            ->where(function ($query) use ($start_date, $end_date, $status, $product_id, $user_id) {
                if ($start_date) {
                    $query->where('sales.created_at', '>=', $start_date.' 00:00:00');
                }
                if ($end_date) {
                    $query->where('sales.created_at', '<=', $end_date.' 23:59:59');
                }
                if ($status) {
                    $query->where('sales.status', $status);
                }
                if ($product_id) {
                    $query->where('sales.product_id', $product_id);
                }
                if ($user_id) {
                    $query->where('sales.user_id', $user_id);
                }

                $query->where('sales.office_id', tr_user_details(null, 'office_id'));
                $query->where('sales.project_id', tr_user_details(null, 'project_id'));


            })
            ->orderBy('sales.created_at', 'DESC')
            ->get();

        $products = Product::query()->where(['status' => 'active', 'project_id' => tr_user_details(null, 'project_id')])->get();
        $users = User::query()
            ->select('users.*')
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            ->join('projects', 'projects.id', '=', 'user_details.project_id')
            ->where(['projects.type' => 'sale', 'user_details.office_id' => tr_user_details(null, 'office_id'), 'user_details.project_id' => tr_user_details(null, 'project_id')])
            ->get();

        return view('pages.sales.team-sales', ['sales' => $sales, 'users' => $users, 'products' => $products]);
    }

    public function delete ($sale_id)
    {
        $sale = Sale::query()->where('id', $sale_id)->update(['status' => 'passive']);
        if ($sale) {
            return redirect()->back()->withErrors(['success, Satış başarıyla silindi.']);
        } else {
            return redirect()->back()->withErrors(['error, Satış silinemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function active ($sale_id)
    {
        $sale = Sale::query()->where('id', $sale_id)->update(['status' => 'active']);
        if ($sale) {
            return redirect()->back()->withErrors(['success, Satış başarıyla eklendi.']);
        } else {
            return redirect()->back()->withErrors(['error, Satış eklenemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function pending ($sale_id)
    {
        $sale = Sale::query()->where('id', $sale_id)->update(['status' => 'pending']);
        if ($sale) {
            return redirect()->back()->withErrors(['success, Satış başarıyla beklemedeye alındı.']);
        } else {
            return redirect()->back()->withErrors(['error, Satış beklemedeye alınamadı. Lütfen geliştiricinize başvurunuz.']);
        }
    }
}
