<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Project;
use Illuminate\Http\Request;

class Teams extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $offices = Office::query()->where(['status' => 'active'])->get();
        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        $start_date = request()->start_date ? request()->start_date.' 00:00:00' : date('Y-m-d 00:00:00');
        $end_date = request()->end_date ? request()->end_date.' 23:59:59' : date('Y-m-d 23:59:59');
        if ($end_date < $start_date) {
            return redirect()->route('teams')->withErrors(['error, Bitiş tarihi başlangıç tarihinden küçük olamaz.']);
        }
        return view('pages.teams', ['offices' => $offices, 'projects' => $projects, 'start_date' => $start_date, 'end_date' => $end_date]);
    }
}
