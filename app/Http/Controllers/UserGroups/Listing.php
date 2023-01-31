<?php

namespace App\Http\Controllers\UserGroups;

use App\Http\Controllers\Controller;
use App\Models\UserGroup;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        $user_groups = UserGroup::query()->orderBy('created_at', 'desc')->get();
        return view('pages.user-groups.listing', ['user_groups' => $user_groups]);
    }

    public function delete ($group_id)
    {
        $user_groups = UserGroup::query()->where('id', $group_id)->update(['status' => 'passive']);
        if ($user_groups) {
            return redirect()->back()->withErrors(['success, Kullanıcı grubu başarıyla silindi.']);
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı grubu silinemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function active ($group_id)
    {
        $user_groups = UserGroup::query()->where('id', $group_id)->update(['status' => 'active']);
        if ($user_groups) {
            return redirect()->back()->withErrors(['success, Kullanıcı grubu başarıyla aktifleştirildi.']);
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı grubu aktifleştirilemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function edit (Request $request) {
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $perms = $request->perm;
        $new_perms = [];
        foreach ($perms as $key => $value) {
            $value = $value == "true" ? true : false;
            $new_perms[$key] = $value;
        }
        $new_perms = json_encode($new_perms);
        $update = UserGroup::query()->where(['id' => $id])->update(['title' => $title, 'description' => $description,'permissions' => $new_perms]);
        if ($update) {
            return redirect()->back()->withErrors(['success, Kullanıcı grubu başarıyla düzenlendi.']);
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı düzenlenemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function add (Request $request) {
        $title = $request->title;
        $description = $request->description;
        $perms = $request->perm;
        $new_perms = [];
        foreach ($perms as $key => $value) {
            $value = $value == "true" ? true : false;
            $new_perms[$key] = $value;
        }
        $new_perms = json_encode($new_perms);
        $insert = UserGroup::query()->insert(['title' => $title, 'description' => $description, 'permissions' => $new_perms, 'status' => 'active']);
        if ($insert) {
            return redirect()->back()->withErrors(['success, Kullanıcı grubu başarıyla eklendi.']);
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı eklenemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }
}
