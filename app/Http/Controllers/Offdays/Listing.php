<?php

namespace App\Http\Controllers\Offdays;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        $users = User::query()
            ->select('users.*', \Illuminate\Support\Facades\DB::raw('SUM(case when offdays.date_type = "YEARLY" then day else 0 end) as yillik_izin_toplami, SUM(case when offdays.date_type != "YEARLY" then day else 0 end) as ucretsiz_izin_toplami'))
            ->leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            ->leftJoin('offdays', 'users.id', '=', 'offdays.user_id')
            ->where(['users.status' => 'active'])
            ->groupBy('users.id')
            ->orderBy('users.name', 'ASC')
            ->get();
        return view('pages.offdays.listing', ['users' => $users]);
    }
}
