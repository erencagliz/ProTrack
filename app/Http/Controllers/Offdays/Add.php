<?php

namespace App\Http\Controllers\Offdays;

use App\Http\Controllers\Controller;
use App\Models\Offday;
use App\Models\Project;
use Illuminate\Http\Request;

class Add extends Controller
{
    public function index ()
    {
        $projects = Project::query()->where(['status' => 'active'])->get();
        return view('pages.offdays.add', ['projects' => $projects]);
    }

    public function post (Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'type' => 'required',
        ]);
        if ($validate) {
            if ($request->type == "date") {

                $request->validate([
                    'date_type' => 'required',
                ]);

                $query = Offday::query()->where(['user_id' => $request->user_id, 'date' => $request->date])->first();
                if ($query) {
                    return redirect()->back()->withErrors(['error,Aynı tarihte zaten eklenmiş bir izin var.']);
                }

                $offday = Offday::query()->insert([
                    'user_id' => $request->user_id,
                    'type' => $request->type,
                    'date_type' => $request->date_type,
                    'date' => $request->date,
                    'movements' => null,
                    'day' => 1,
                    'time' => null,
                    'status' => 'active',
                ]);

                if ($offday) {
                    return redirect()->back()->withErrors(['success,İzin başarıyla eklendi.']);
                }

            } else if ($request->type == "datetime") {
                $request->validate([
                    'kt_docs_repeater_basic' => 'required',
                    'total_time' => 'required',
                ]);

                $query = Offday::query()->where(['user_id' => $request->user_id, 'date' => $request->date])->first();
                if ($query) {
                    return redirect()->back()->withErrors(['error,Aynı tarihte zaten eklenmiş bir izin var.']);
                }

                $offday = Offday::query()->insert([
                    'user_id' => $request->user_id,
                    'type' => $request->type,
                    'date_type' => null,
                    'date' => $request->date,
                    'movements' => json_encode($request->kt_docs_repeater_basic),
                    'day' => null,
                    'time' => $request->total_time,
                    'status' => 'active',
                ]);

                if ($offday) {
                    return redirect()->back()->withErrors(['success,İzin başarıyla eklendi.']);
                }
            }
        }
    }
}
