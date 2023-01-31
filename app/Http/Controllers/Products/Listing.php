<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $products = Product::query()->get();
        $project = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        return view('pages.products.listing', ['products' => $products, 'projects' => $project]);
    }
    public function delete ()
    {
        $product = Product::query()->find(request()->id);
        $product->status = 'passive';
        $product->save();
        return redirect()->back()->withErrors(['success, Ürün başarıyla silindi.']);
    }

    public function active ()
    {
        $product = Product::query()->find(request()->id);
        $product->status = 'active';
        $product->save();
        return redirect()->back()->withErrors(['success, Ürün başarıyla aktifleştirildi.']);
    }

    public function pending ()
    {
        $product = Product::query()->find(request()->id);
        $product->status = 'pending';
        $product->save();
        return redirect()->back()->withErrors(['success, Ürün başarıyla beklemeye alındı.']);
    }

    public function add_post (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'project_id' => 'required',
            'title' => 'required',
            'point' => 'required',
        ]);
        $product = new Product();
        $product->title = $request->title;
        $product->name = $request->name;
        $product->point = $request->point;
        $product->project_id = $request->project_id;
        $product->status = 'active';
        $product->save();
        return redirect()->back()->withErrors(['success, Ürün başarıyla eklendi.']);
    }

    public function edit_post (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'project_id' => 'required',
            'title' => 'required',
            'point' => 'required',
            'id' => 'required'
        ]);
        $product = Product::query()->find($request->id);
        $product->title = $request->title;
        $product->name = $request->name;
        $product->point = $request->point;
        $product->project_id = $request->project_id;
        $product->save();
        return redirect()->back()->withErrors(['success, Ürün başarıyla düzenlendi.']);
    }
}
