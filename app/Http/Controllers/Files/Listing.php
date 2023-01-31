<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Office;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $users = User::query()->orderBy('users.name', 'ASC')->get();
        if (\request()->user_id) {
            $user_id = request()->user_id;
            $files = File::query()->where('user_id', $user_id)->where('status', 'active')->get();
            return view('pages.files.listing', ['users' => $users, 'user_id' => $user_id, 'files' => $files]);
        } else {
            return view('pages.files.listing', ['users' => $users]);
        }
    }

    public function post (Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'required',
            'file' => 'required',
        ]);
        if ($validate) {
            $file = $request->file('file');
            $file_name = uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(base_path(env('UPLOADS_DIRECTION_FILES').'/'), $file_name);
            $insert = File::query()->insert([
                'user_id' => $request->user_id,
                'file' => $file_name,
                'title' => $request->title ? $request->title : null,
                'status' => 'active'
            ]);
            if ($insert) {
                return redirect()->back()->withErrors(['success, Dosya başarıyla yüklendi.']);
            }
        }
    }

    public function delete ()
    {
        $id = request()->id;
        if ($id) {
            $file = File::query()->where('id', $id)->first();
            if ($file) {
                $file->status = 'passive';
                $file->save();
                if ($file) {
                    return redirect()->back()->withErrors(['success, Dosya başarıyla silindi.']);
                }
            }
        }
    }
}
