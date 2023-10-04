<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Target;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index ()
    {
        $project_id = \request()->project_id ? \request()->project_id : 2;
        $project = Project::query()->where(['id' => $project_id, 'status' => 'active'])->first();
        $project_users = User::query()->select(['users.name', 'users.surname', 'users.id', 'user_details.image'])->join('user_details', 'user_details.user_id', '=', 'users.id')->where(['users.status' => 'active', 'user_details.project_id' => $project_id])->get();
        $targets = Target::query()->where(['status' => 'active', 'target_status' => 'continues'])->get();
        return view('pages.dashboard', [
            'project' => $project,
            'project_users' => $project_users,
            'targets' => $targets
        ]);
    }
}
