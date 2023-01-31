<?php

namespace App\Http\Controllers\Offices;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        $offices = Office::query()->get();
        return view('pages.offices.listing', ['offices' => $offices]);
    }

    public function delete ()
    {
        $office = Office::query()->find(request()->id);
        $office->status = 'passive';
        $office->save();
        return redirect()->back()->withErrors(['success, Ofis başarıyla silindi.']);
    }

    public function active ()
    {
        $office = Office::query()->find(request()->id);
        $office->status = 'active';
        $office->save();
        return redirect()->back()->withErrors(['success, Ofis başarıyla aktifleştirildi.']);
    }

    public function pending ()
    {
        $office = Office::query()->find(request()->id);
        $office->status = 'pending';
        $office->save();
        return redirect()->back()->withErrors(['success, Ofis başarıyla beklemeye alındı.']);
    }

    public function add_post (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
        ]);
        $office = new Office();
        $office->title = $request->title;
        $office->address = $request->address;
        $office->status = 'active';
        $office->save();
        return redirect()->back()->withErrors(['success, Ofis başarıyla eklendi.']);
    }

    public function edit_post (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
        ]);
        $office = Office::query()->find($request->id);
        $office->title = $request->title;
        $office->address = $request->address;
        $office->status = 'active';
        $office->save();
        return redirect()->back()->withErrors(['success, Ofis başarıyla düzenlendi.']);
    }
}
