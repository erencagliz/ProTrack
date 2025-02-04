<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Offday;
use App\Models\Office;
use App\Models\Pause;
use App\Models\Project;
use App\Models\Target;
use App\Models\Todo;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Edit extends Controller
{
    public function index ($user_id)
    {
        error_reporting(0);
        $local_permissions = include base_path('config/perms.php');
        $user = User::query()->where(['id' => $user_id])->first();
        $detail = UserDetail::query()->where(['user_id' => $user_id])->first();
        $todo = Todo::query()->where(['user_id' => $user_id, 'status' => 'active'])->orderBy('created_at', 'desc')->get();
        $projects = Project::query()->where(['status' => 'active'])->get();
        $offices = Office::query()->where(['status' => 'active'])->get();
        $groups = UserGroup::query()->where(['status' => 'active'])->get();
        $targets = Target::query()->where(['user_id' => $user_id])->orderBy('created_at', 'desc')->get();
        $offdays = Offday::query()->where(['user_id' => $user_id, 'status' => 'active'])->orderBy('created_at', 'desc')->get();
        $files = File::query()->where(['user_id' => $user_id, 'status' => 'active'])->orderBy('created_at', 'desc')->get();
        $pauses = Pause::query()->where(['user_id' => $user_id, 'status' => 'active'])->orderBy('created_at', 'desc')->get();
        return view('pages.users.edit', ['pauses' => $pauses, 'files' => $files, 'offdays' => $offdays,'targets' => $targets, 'local_permissions' => $local_permissions,'user' => $user, 'detail' => $detail, 'todo' => $todo, 'projects_active' => $projects, 'groups_active' => $groups, 'offices_active' => $offices]);
    }

    public function todo_update (Request $request)
    {
        $todo = $request->validate([
            'todo_status' => 'required'
        ]);
        if ($todo) {
            $todo = Todo::query()->where('id', $request->id)->update([
                'todo_status' => $request->todo_status
            ]);
            if ($todo) {
                return redirect()->back()->withErrors(['success, Başarıyla güncellendi.']);
            }
        }
    }

    public function add_todo (Request $request)
    {
        $todo = $request->validate([
            'title' => 'required',
            'expire_date' => 'required'
        ]);
        if ($todo) {
            $todo = Todo::query()->insert([
                'title' => $request->title,
                'description' => $request->description,
                'expire_date' => $request->expire_date,
                'user_id' => $request->user_id,
                'todo_status' => 'in_progress',
                'status' => 'active',
                'added_by' => \Auth::user()->id
            ]);
            if ($todo) {
                return redirect()->back()->withErrors(['success, Başarıyla eklendi.']);
            } else {
                return redirect()->back()->withErrors(['success, Eklenemedi. Lütfen geliştiricinize başvurunuz.']);

            }
        }
    }

    public function delete_todo ($id)
    {
        $todo = Todo::query()->where(['id' => $id])->update(['status' => 'passive']);
        if ($todo) {
            return redirect()->back()->withErrors(['success, Başarıyla silindi.']);
        } else {
            return redirect()->back()->withErrors(['error, Silinemedi. Lütfen geliştiricinize başvurunuz.']);
        }
    }

    public function post (Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'required',
            'username' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'group_id' => 'required',
            'office_id' => 'required',
            'project_id' => 'required',
            'status' => 'in:active,passive,pending'
        ]);
        if ($validate) {
            $add = User::query()->where(['id' => $request->user_id])->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
                'status' => $request->status
            ]);

            if ($add) {
                $add_details = UserDetail::query()->where(['user_id' => $request->user_id])->update([
                    'user_id' => $request->user_id,
                    'password' => $request->password,
                    'project_id' => $request->project_id,
                    'office_id' => $request->office_id,
                    'group_id' => $request->group_id,
                    'status' => $request->status,
                    'birthdate' => $request->birthdate,
                    'identity' => $request->identity,
                    'work_start_date' => $request->work_start_date,
                    'work_end_date' => $request->work_end_date,
                    'address' => $request->address
                ]);
                if ($add_details) {
                    $file = $request->file('image');
                    if ($file) {
                        $directory = base_path().'/'.env('UPLOADS_DIRECTION').'/users';
                        $file_name = uniqid('cagli_');
                        $file->move($directory,$file_name.'.'.$file->getClientOriginalExtension());
                        if ($file) {
                            $update = UserDetail::query()->where('user_id', $request->user_id)->update(['image' => $file_name.'.'.$file->getClientOriginalExtension()]);
                            return redirect()->back()->withErrors(['success, Kullanıcı başarıyla düzenlendi.']);
                        } else {
                            return redirect()->back()->withErrors(['warning, Kullanıcı başarıyla düzenlendi fakat resmi eklenemedi.']);
                        }
                    } else {
                        return redirect()->back()->withErrors(['success, Kullanıcı başarıyla düzenlendi.']);
                    }
                } else {
                    return redirect()->back()->withErrors(['warning, Kullanıcı başarıyla düzenlendi fakat detayları eklenemedi.']);
                }
            } else {
                return redirect()->back()->withErrors(['error, Kullanıcı düzenlenemedi. Lütfen tekrar deneyiniz.']);
            }
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı düzenlenemedi. Lütfen tekrar deneyiniz.']);
        }
    }

    public function perm_post (Request $request)
    {
        $user_id = $request->user_id;
        $json = [];
        foreach ($request->perm as $key => $value) {
            if ($value == "true") {
                $value = true;
                $json['permissions'][$key] = $value;
            }
        }
        $json = json_encode($json);
        $insert = UserDetail::query()->where(['user_id' => $user_id])->update(['custom' => $json]);
        if ($insert) {
            return redirect()->back()->withErrors(['success, Kullanıcı yetkileri başarıyla düzenlendi.']);
        } else {
            return redirect()->back()->withErrors(['error, Kullanıcı yetkileri düzenlenemedi.']);
        }
    }
}
