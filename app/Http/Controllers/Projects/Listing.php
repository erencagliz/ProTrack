<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        $projects = Project::query()->get();
        return view('pages.projects.listing', ['projects' => $projects]);
    }

    public function delete ()
    {
        $project = Project::query()->find(request()->id);
        $project->status = 'passive';
        $project->save();
        return redirect()->back()->withErrors(['success, Proje başarıyla silindi.']);
    }

    public function active ()
    {
        $project = Project::query()->find(request()->id);
        $project->status = 'active';
        $project->save();
        return redirect()->back()->withErrors(['success, Proje başarıyla aktifleştirildi.']);
    }

    public function pending ()
    {
        $project = Project::query()->find(request()->id);
        $project->status = 'pending';
        $project->save();
        return redirect()->back()->withErrors(['success, Proje başarıyla beklemeye alındı.']);
    }

    public function add_post (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required'
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->preffered_counter = $request->preffered_counter;
        $project->status = 'active';
        $project->save();
        return redirect()->back()->withErrors(['success, Proje başarıyla eklendi.']);
    }

    public function edit_post (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required'
        ]);
        $project = Project::query()->find($request->id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->preffered_counter = $request->preffered_counter;
        $project->status = $request->status;
        $project->save();
        return redirect()->back()->withErrors(['success, Proje başarıyla düzenlendi.']);
    }
}
