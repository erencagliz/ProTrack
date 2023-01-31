<?php

namespace App\Http\Controllers\Offdays;

use App\Http\Controllers\Controller;
use App\Models\Offday;
use Illuminate\Http\Request;

class Details extends Controller
{
    public function index ()
    {
        error_reporting(0);
        $start_date = \request()->start_date ? \request()->start_date.' 00:00:00' : date('Y-m-01 00:00:00');
        $end_date = \request()->end_date ? \request()->start_date.' 23:59:59' : date('Y-m-t 23:59:59');
        $offdays = Offday::query()->where(['user_id' => \request()->id])->whereBetween('created_at', [$start_date, $end_date])->get();
        return view('pages.offdays.details', ['offdays' => $offdays]);
    }

    public function delete ($id)
    {
        if ($id) {
            $offday = Offday::query()->where(['id' => $id])->delete();
            if ($offday) {
                return redirect()->back()->withErrors(['success,İzin başarıyla silindi.']);
            } else {
                return redirect()->back()->withErrors(['error,İzin silinirken bir hata oluştu.']);
            }
        }
    }
}
