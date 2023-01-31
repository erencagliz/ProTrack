<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sale;
use Illuminate\Http\Request;

class MySales extends Controller
{
    public function index ()
    {
        error_reporting(0);

        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $status = request()->status;
        $office_id = request()->office_id;
        $project_id = request()->project_id;
        $product_id = request()->product_id;

        $sales = Sale::query()
            ->select('sales.*', 'products.name as product_name', 'products.title as product_title')
            ->join('products', 'products.id', '=', 'sales.product_id')
            ->join('projects', 'projects.id', '=', 'sales.project_id')
            ->where(['sales.user_id' => \Auth::user()->id])
            ->where(function ($query) use ($start_date, $end_date, $status, $office_id, $product_id, $project_id) {
                if ($start_date) {
                    $query->where('sales.created_at', '>=', $start_date.' 00:00:00');
                }
                if ($end_date) {
                    $query->where('sales.created_at', '<=', $end_date.' 23:59:59');
                }
                if ($status) {
                    $query->where('sales.status', $status);
                }
                if ($office_id) {
                    $query->where('sales.office_id', $office_id);
                }
                if ($product_id) {
                    $query->where('sales.product_id', $product_id);
                }
                if ($project_id) {
                    $query->where('sales.project_id', $project_id);
                }
            })
            ->orderBy('sales.created_at', 'DESC')
            ->get();

        $projects = Project::query()->where(['type' => 'sale', 'status' => 'active'])->get();
        $offices = Office::query()->where('status', 'active')->get();
        $products = Product::query()->where('status', 'active')->get();
        return view('pages.sales.my-sales', ['sales' => $sales, 'projects' => $projects, 'offices' => $offices, 'products' => $products]);
    }
}
