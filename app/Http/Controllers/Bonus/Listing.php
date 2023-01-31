<?php

namespace App\Http\Controllers\Bonus;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;

class Listing extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $projects = Project::query()->where(['type' => 'sale', 'status' => 'active'])->get();
        $offices = Office::query()->where('status', 'active')->get();
        $products = Product::query()->where('status', 'active')->get();
        $start_date = request()->start_date ? request()->start_date : date('Y-m-01 00:00:00');
        $end_date = request()->end_date ? request()->end_date : date('Y-m-t 23:59:59');
        $office_id = request()->office_id;
        $project_id = request()->project_id;
        $user_id = request()->user_id;
        $users = User::query()
            ->select('users.*', 'user_details.project_id', 'user_details.office_id')
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            ->join('projects', 'projects.id', '=', 'user_details.project_id')
            ->where(['projects.type' => 'sale', 'users.status' => 'active'])
            ->where(function ($query) use ($office_id, $project_id, $user_id) {
                if ($office_id) {
                    $query->where('user_details.office_id', $office_id);
                }
                if ($project_id) {
                    $query->where('user_details.project_id', $project_id);
                }
                if ($user_id) {
                    $query->where('users.id', $user_id);
                }
            })
            ->orderBy('user_details.project_id', 'ASC')
            ->orderBy('user_details.office_id', 'ASC')
            ->orderBy('users.name', 'ASC')
            ->get();
        $users_filter = User::query()
            ->select('users.*')
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            ->join('projects', 'projects.id', '=', 'user_details.project_id')
            ->where(['projects.type' => 'sale'])
            ->get();
        return view('pages.bonus.listing', ['projects' => $projects, 'offices' => $offices, 'products' => $products, 'users' => $users, 'start_date' => $start_date, 'end_date' => $end_date, 'office_id' => $office_id, 'project_id' => $project_id, 'user_id' => $user_id, 'users_filter' => $users_filter]);
    }
}
