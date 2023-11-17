<?php

/**
 * Returns office's title.
 * @returns string
 */

if (! function_exists('tr_office_title')) {
    function tr_office_title ($office_id) {
        if (cache()->has('tr_office_title_'.$office_id)) {
            return cache()->get('tr_office_title_'.$office_id);
        } else {
            $office = \App\Models\Office::query()->select(['title'])->where(['id' => $office_id])->first();
            if ($office) {
                cache()->put('tr_office_title_'.$office_id, $office->title, 60*24);
                return $office->title;
            }
        }
    }
}

/**
 * Returns office's daily sales.
 * @returns integer
 */

if (! function_exists('tr_office_daily_sales')) {
    function tr_office_daily_sales ($office_id, $project_id = null, $returns) {
        if ($project_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('point');
                return $sale;
            }
        }
    }
}

/**
 * Returns office's weekly sales.
 * @returns integer
 */

if (! function_exists('tr_office_weekly_sales')) {
    function tr_office_weekly_sales ($office_id, $project_id = null, $returns) {
        if ($project_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('point');
                return $sale;
            }
        }
    }
}

/**
 * Returns office's monthly sales.
 * @returns integer
 */

if (! function_exists('tr_office_monthly_sales')) {
    function tr_office_monthly_sales ($office_id, $project_id = null, $returns) {
        if ($project_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id, 'project_id' => $project_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['office_id' => $office_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('point');
                return $sale;
            }
        }
    }
}
