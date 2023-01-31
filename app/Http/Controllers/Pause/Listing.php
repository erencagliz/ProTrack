<?php

namespace App\Http\Controllers\Pause;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Pause;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function delete ($id)
    {
        $pause = Pause::query()->where(['id' => $id])->delete();
        if ($pause) {
            return redirect()->back()->withErrors(['success, Başarıyla silindi.']);
        }
    }

    public function index ()
    {

        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $status = request()->status;
        $user_id = request()->user_id;

        $offices_active = Office::query()->where('status', 'active')->get();
        $projects_active = Project::query()->where('status', 'active')->get();
        $filter_users = User::query()->where('status', 'active')->get();
        $pauses = Pause::query()->where(function ($query) use ($start_date, $end_date, $status, $user_id) {
            if ($start_date) {
                $query->where('created_at', '>=', $start_date.' 00:00:00');
            }
            if ($end_date) {
                $query->where('created_at', '<=', $end_date.' 23:59:59');
            }
            if ($status) {
                $query->where('status', $status);
            }
            if ($user_id) {
                $query->where('user_id', $user_id);
            }
        })->orderBy('created_at', 'desc')->get();
        error_reporting(0);
        return view('pages.pauses', ['pauses' => $pauses, 'projects_active' => $projects_active, 'offices_active' => $offices_active, 'filter_users' => $filter_users]);
    }
}

