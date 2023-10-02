<?php

namespace App\Http\Controllers;

use App\Models\Offday;
use App\Models\User;
use Illuminate\Http\Request;

class Calendar extends Controller
{
    public function index ()
    {
        $all_events = \App\Models\Calendar::query()->where(['status' => 'active'])->where('type', 'event')->orWhere('type', 'interview')->orWhere('type', 'meeting')->get();
        $offday = Offday::query()->select('users.*', 'offdays.*')->join('users', 'users.id', '=', 'offdays.user_id')->get();
        $events = \App\Models\Calendar::query()->where(['status' => 'active', 'type' => 'event'])->get();
        $interviews = \App\Models\Calendar::query()->where(['status' => 'active', 'type' => 'interview'])->get();
        $meetings = \App\Models\Calendar::query()->where(['status' => 'active', 'type' => 'meeting'])->get();
        $appointment = \App\Models\Calendar::query()->where(['status' => 'active', 'type' => 'appointment'])->get();
        $working_days = \App\Models\Calendar::query()->where(['status' => 'active', 'type' => 'working_day'])->whereBetween('start_date', [date('Y-m-01'), date('Y-m-t')])->orderBy('id', 'DESC')->get();
        $birthdays = \App\Models\User::query()->select('users.*', 'user_details.birthdate')->join('user_details', 'user_details.user_id', '=', 'users.id')->where(['users.status' => 'active'])->get();
        $users = User::query()->where(['status' => 'active'])->get();
        return view('pages.calendar', [
            'events' => $events,
            'interviews' => $interviews,
            'meetings' => $meetings,
            'working_days' => $working_days,
            'birthdays' => $birthdays,
            'users' => $users,
            'offday' => $offday,
            'all_events' => $all_events,
            'appointment'  => $appointment
        ]);
    }

    public function drag_post (Request $request)
    {
        $id = $request->id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        $calendar = \App\Models\Calendar::query()->find($id);
        $calendar->start_date = $start_date;
        $calendar->end_date = $end_date;
        $calendar->start_time = $start_time;
        $calendar->end_time = $end_time;
        $calendar->save();

        if ($calendar) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'failed'];
        }
    }

    public function resize_post (Request $request)
    {
        $id = $request->id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        $calendar = \App\Models\Calendar::query()->find($id);
        $calendar->start_date = $start_date;
        $calendar->end_date = $end_date;
        $calendar->start_time = $start_time;
        $calendar->end_time = $end_time;
        $calendar->save();

        if ($calendar) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'failed'];
        }
    }

    public function remove_post (Request $request)
    {
        $id = $request->id;

        $calendar = \App\Models\Calendar::query()->find($id);
        $calendar->status = 'passive';
        $calendar->save();

        if ($calendar) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'failed'];
        }
    }

    public function add_post (Request $request)
    {
        if ($request->calendar_type == "working_day") {
            $query = \App\Models\Calendar::query()->where(['type' => 'working_day', 'start_date' => $request->calendar_event_start_date])->delete();
            $insert = \App\Models\Calendar::query()->insert([
                'type' => $request->calendar_type,
                'color' => $request->working_day_status,
                'start_date' => $request->calendar_event_start_date,
                'status' => 'active',
            ]);
            if ($insert) {
                return redirect()->back()->withErrors(['success,Takvim başarıyla eklendi.']);
            }
        } else if ($request->calendar_type == "appointment") {

            $old = \App\Models\Calendar::query()->where([
                'start_date' => $request->calendar_event_start_date,
                'start_time' => $request->calendar_event_start_time
            ])->first();

            if ($old) {
                return redirect()->back()->withErrors(['error,Aynı saate başka bir randevu var.']);
            }

            $request->validate([
                'title' => 'required',
                'calendar_event_start_date' => 'required',
            ]);

            $insert = \App\Models\Calendar::query()->insert([
                'type' => $request->calendar_type,
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'start_date' => $request->calendar_event_start_date,
                'end_date' => $request->calendar_event_end_date,
                'start_time' => $request->calendar_event_start_time,
                'end_time' => $request->calendar_event_end_time,
                'status' => 'active',
                'users' => json_encode($request->users),
            ]);

            if ($insert) {
                return redirect()->back()->withErrors(['success,Takvim başarıyla eklendi.']);
            }

        } else {
            $request->validate([
                'title' => 'required',
                'calendar_event_start_date' => 'required',
            ]);
            $insert = \App\Models\Calendar::query()->insert([
                'type' => $request->calendar_type,
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'start_date' => $request->calendar_event_start_date,
                'end_date' => $request->calendar_event_end_date,
                'start_time' => $request->calendar_event_start_time,
                'end_time' => $request->calendar_event_end_time,
                'status' => 'active',
                'users' => json_encode($request->users),
            ]);
            if ($insert) {
                return redirect()->back()->withErrors(['success,Takvim başarıyla eklendi.']);
            }
        }
    }

    public function edit_post (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'id' => 'required',
        ]);
        $insert = \App\Models\Calendar::query()->where('id', $request->id)->update([
            'type' => $request->calendar_type,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'status' => 'active',
            'users' => json_encode($request->users),
        ]);
        if ($insert) {
            return redirect()->back()->withErrors(['success,Takvim başarıyla düzenlendi.']);
        }
    }
}
