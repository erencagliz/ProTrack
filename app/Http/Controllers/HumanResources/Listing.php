<?php

namespace App\Http\Controllers\HumanResources;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use App\Models\User;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        error_reporting(0);

        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $position = request()->position;
        $position_condition = request()->position_condition;
        $owner_id = request()->owner_id;
        $source  = request()->source;

        $human_resource_users = User::query()->select('users.name', 'users.surname', 'users.id as user_id')->join('user_details', 'users.id', '=', 'user_details.user_id')->where(['users.status' => 'active', 'user_details.group_id' => '4'])->get();
        $human_resources = HumanResource::query()->where('status', 'active')->where(function ($query) use ($start_date, $end_date, $position, $position_condition, $owner_id, $source) {
            if ($start_date) {
                $query->where('created_at', '>=', $start_date.' 00:00:00');
            }
            if ($end_date) {
                $query->where('created_at', '<=', $end_date.' 23:59:59');
            }
            if ($position) {
                $query->where('position', $position);
            }
            if ($position_condition) {
                $query->where('position_condition', $position_condition);
            }
            if ($owner_id) {
                if ($owner_id == "no_owner") {
                    $query->where('owner_id', null);
                } else {
                    $query->where('owner_id', $owner_id);
                }
            }
            if ($source) {
                $query->where('source', $source);
            }
        })->orderBy('source_date', 'desc')->get();
        return view('pages.human-resources.listing', [
            'human_resource_users' => $human_resource_users,
            'human_resources' => $human_resources
        ]);
    }
    public function add (Request $request)
    {
        $human_resources = new HumanResource();
        $human_resources->phone = $request->phone;
        $human_resources->name = $request->name;
        $human_resources->surname = $request->surname;
        $human_resources->source = $request->source;
        $human_resources->source_date = $request->date;
        $human_resources->language_level = $request->language_level;
        $human_resources->position = $request->position;
        $human_resources->position_condition = $request->position_condition;
        $human_resources->added_by = \Auth::user()->id;
        $human_resources->owner_id = $request->owner_id;
        $human_resources->status = 'active';
        $human_resources->save();
        if ($human_resources) {
            return redirect()->back()->withErrors(['success,Veri başarıyla eklendi.']);
        }
    }
    public function choose_owner (Request $request)
    {
        $human_resource = HumanResource::query()->find($request->hm_id);
        $human_resource->owner_id = $request->owner_idd;
        $human_resource->save();
        if ($human_resource) {
            return redirect()->back()->withErrors(['success,Veri başarıyla düzenlendi.']);
        }
    }

    public function delete ($id)
    {
        $human_resource = HumanResource::query()->find($id);
        $human_resource->status = 'passive';
        $human_resource->save();
        if ($human_resource) {
            return redirect()->back()->withErrors(['success,Veri başarıyla silindi.']);
        }
    }

    public function active ($id)
    {
        $human_resource = HumanResource::query()->find($id);
        $human_resource->status = 'active';
        $human_resource->save();
        if ($human_resource) {
            return redirect()->back()->withErrors(['success,Veri başarıyla aktifleştirildi.']);
        }
    }

    public function pending ($id)
    {
        $human_resource = HumanResource::query()->find($id);
        $human_resource->status = 'pending';
        $human_resource->save();
        if ($human_resource) {
            return redirect()->back()->withErrors(['success,Veri başarıyla beklemeye alındı.']);
        }
    }
}
