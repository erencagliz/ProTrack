<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class PendingSales extends Controller
{
    public function index_for_everyone ()
    {
        error_reporting(0);

        $sales = Sale::query()
            ->select('sales.*', 'products.name as product_name', 'products.title as product_title')
            ->join('products', 'products.id', '=', 'sales.product_id')
            ->join('projects', 'projects.id', '=', 'sales.project_id')
            ->where(function ($query) {
                $query->where('sales.status', 'pending');
            })
            ->orderBy('sales.created_at', 'DESC')
            ->get();

        return view('pages.sales.pending-sales-for-everyone', ['sales' => $sales]);
    }

    public function index_for_team ()
    {
        error_reporting(0);
        $sales = Sale::query()
            ->select('sales.*', 'products.name as product_name', 'products.title as product_title')
            ->join('products', 'products.id', '=', 'sales.product_id')
            ->join('projects', 'projects.id', '=', 'sales.project_id')
            ->where(function ($query) {
                $query->where('sales.status', 'pending');
                $query->where('sales.project_id', tr_user_details(null, 'project_id'));
            })
            ->orderBy('sales.created_at', 'DESC')
            ->get();
        return view('pages.sales.pending-sales-for-team', ['sales' => $sales]);
    }

    public function post (Request $request)
    {
        $id = $request->id;
        $sale = Sale::query()->where('id', $id)->first();
        $sale->status = $request->status;
        $sale->save();
        if ($sale) {
            return "true";
        } else {
            return "false";
        }
    }
}
