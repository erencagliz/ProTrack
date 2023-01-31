<?php

namespace App\Http\Controllers\HumanResources;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Edit extends Controller
{
    public function index ($id)
    {
        $human_resource = HumanResource::query()->find($id);
        $human_resource_users = User::query()->select('users.name', 'users.surname', 'users.id as user_id')->join('user_details', 'users.id', '=', 'user_details.user_id')->where(['users.status' => 'active', 'user_details.group_id' => '4'])->get();
        return view('pages.human-resources.edit', ['human_resource' => $human_resource, 'human_resource_users' => $human_resource_users]);
    }
    public function edit (Request $request)
    {
        $request->validate([
            'source' => 'required',
            'date' => 'required',
            'language_level' => 'required',
            'position' => 'required',
        ]);
        $human_resources = HumanResource::query()->find($request->id);
        $human_resources->phone = $request->phone;
        $human_resources->name = $request->name;
        $human_resources->surname = $request->surname;
        $human_resources->source = $request->source;
        $human_resources->source_date = $request->date;
        $human_resources->language_level = $request->language_level;
        $human_resources->position = $request->position;
        if ($request->position == "positive") {
            $human_resources->position_condition = null;
        } else {
            $human_resources->position_condition = $request->position_condition;
        }
        $human_resources->owner_id = $request->owner_id;
        $human_resources->save();
        if ($human_resources) {
            return redirect()->back()->withErrors(['success,Veri başarıyla düzenlendi.']);
        }
    }
    public function note_add ($id, Request $request)
    {
        $notes = json_encode($request->kt_docs_repeater_basic);
        $human_resource = HumanResource::query()->find($id);
        $human_resource->notes = $notes;
        $human_resource->save();
        if ($human_resource) {
            return redirect()->back()->withErrors(['success,Not başarıyla eklendi.']);
        }
    }
}
