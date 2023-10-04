<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Project;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Listing extends Controller
{
    public function index ()
    {
        error_reporting(0);

        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $work_start_date = request()->start_date;
        $work_end_date = request()->end_date;
        $status = request()->status;
        $office_id = request()->office_id;
        $project_id = request()->project_id;
        $user_id = request()->user_id;
        $group_id = request()->group_id;

        $projects_active = Project::query()->where(['status' => 'active'])->get();
        $groups_active = UserGroup::query()->where(['status' => 'active'])->get();
        $offices_active = Office::query()->where(['status' => 'active'])->get();

        $projects = Project::query()->get();
        $offices = Office::query()->get();
        $users_for_filter = User::query()->get();
        $user_groups = UserGroup::query()->get();
        $users = User::query()
            ->select([
                'users.name', 'users.surname', 'users.email', 'users.status', 'users.created_at', 'users.id', 'users.last_seen', 'users.username', 'users.phone',
                'user_details.work_start_date', 'user_details.password as password_unhashed',
                'offices.title as office_title',
                'projects.title as project_title',
                'user_groups.title as group_title'
            ])
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('user_groups', 'user_details.group_id', '=', 'user_groups.id')
            ->leftJoin('projects', 'user_details.project_id', '=', 'projects.id')
            ->leftJoin('offices', 'user_details.office_id', '=', 'offices.id')
            ->where(function ($query) use ($start_date, $end_date, $status, $office_id, $project_id, $user_id, $group_id, $work_start_date, $work_end_date) {
                if ($start_date) {
                    $query->where('users.created_at', '>=', $start_date.' 00:00:00');
                }
                if ($end_date) {
                    $query->where('users.created_at', '<=', $end_date.' 23:59:59');
                }
                if ($status) {
                    $query->where('users.status', $status);
                }
                if ($office_id) {
                    $query->where('user_details.office_id', $office_id);
                }
                if ($project_id) {
                    $query->where('user_details.project_id', $project_id);
                }
                if ($user_id) {
                    $query->where('users.id', $user_id);
                }
                if ($group_id) {
                    $query->where('user_details.group_id', $group_id);
                }
                if ($work_start_date) {
                    $query->where('user_details.work_start_date', '>=', $work_start_date.' 00:00:00');
                }
                if ($work_end_date) {
                    $query->where('user_details.work_end_date', '<=', $work_end_date.' 23:59:59');
                }
            })
            ->orderBy('users.created_at', 'DESC')
            ->get();
        return view('pages.users.listing', ['users' => $users, 'projects' => $projects, 'offices' => $offices, 'filter_users' => $users_for_filter, 'user_groups' => $user_groups, 'projects_active' => $projects_active, 'offices_active' => $offices_active, 'groups_active' => $groups_active]);
    }

    public function delete ($id)
    {
        $user = User::query()->where('id', $id)->update(['status' => 'passive']);
        if ($user) {
            return redirect()->back()->withErrors(['success', 'Kullanıcı başarıyla silindi.']);
        } else {
            return redirect()->back()->withErrors(['error', 'Kullanıcı silinemedi.']);
        }
    }

    public function active ($id)
    {
        $user = User::query()->where('id', $id)->update(['status' => 'active']);
        if ($user) {
            return redirect()->back()->withErrors(['success', 'Kullanıcı başarıyla aktifleştirildi.']);
        } else {
            return redirect()->back()->withErrors(['error', 'Kullanıcı aktifleştirilemedi.']);
        }
    }

    public function pending ($id)
    {
        $user = User::query()->where('id', $id)->update(['status' => 'pending']);
        if ($user) {
            return redirect()->back()->withErrors(['success', 'Kullanıcı başarıyla beklemeye alındı.']);
        } else {
            return redirect()->back()->withErrors(['error', 'Kullanıcı beklemeye alınamadı.']);
        }
    }

    public function add (Request $request)
    {
        $validate = $request->validate([
            'username' => 'unique:users|required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'group_id' => 'required',
            'office_id' => 'required',
            'project_id' => 'required',
            'work_start_date' => 'required'
        ]);
        if ($validate) {
            $add = User::insertGetId([
                'name' => $request->name,
                'surname' => $request->surname,
                'username' => $request->username,
                'email' => Str::slug($request->name.$request->surname.rand(0, 1000)).'@triooz.com',
                'phone' => $request->phone,
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
                'status' => 'active',
            ]);
            if ($add) {
                $add_details = UserDetail::query()->insert([
                    'user_id' => $add,
                    'password' => $request->password,
                    'project_id' => $request->project_id,
                    'office_id' => $request->office_id,
                    'group_id' => $request->group_id,
                    'work_start_date' => $request->work_start_date,
                    'status' => 'active'
                ]);
                if ($add_details) {
                    $file = $request->file('image');
                    $directory = base_path().'/'.env('UPLOADS_DIRECTION').'/users';
                    $file_name = uniqid('triooz_');
                    $file->move($directory,$file_name.'.'.$file->getClientOriginalExtension());
                    if ($file) {
                        $update = UserDetail::query()->where('user_id', $add)->update(['image' => $file_name.'.'.$file->getClientOriginalExtension()]);
                        return redirect()->route('users.listing')->withErrors(['success, Kullanıcı başarıyla eklendi.']);
                    } else {
                        return redirect()->route('users.listing')->withErrors(['warning, Kullanıcı başarıyla eklendi fakat resmi eklenemedi.']);
                    }
                } else {
                    return redirect()->route('users.listing')->withErrors(['warning, Kullanıcı başarıyla eklendi fakat detayları eklenemedi.']);
                }
            } else {
                return redirect()->route('users.listing')->withErrors(['error, Kullanıcı eklenemedi. Lütfen tekrar deneyiniz.']);
            }
        } else {
            return redirect()->route('users.listing')->withErrors(['error, Kullanıcı eklenemedi. Lütfen tekrar deneyiniz.']);
        }
    }
}
