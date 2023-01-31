<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class Reporting extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $users = User::query()->select('users.name', 'users.surname', 'users.id')->join('user_details', 'users.id', '=', 'user_details.user_id')->join('projects', 'user_details.project_id', '=', 'projects.id')->where(['users.status' => 'active', 'projects.status' => 'active'])->get();
        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        return view('pages.reporting', ['users' => $users, 'projects' => $projects]);
    }
}
