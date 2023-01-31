<?php

/**
 * Returns project's type.
 * @returns string
 */

if (! function_exists('tr_project_type')) {
    function tr_project_type ($project_id) {
        $project = \App\Models\Project::query()->select(['type'])->where(['id' => $project_id])->first();
        if ($project) {
            return $project->type;
        }
    }
}

/**
 * Returns project's title.
 * @returns string
 */

if (! function_exists('tr_project_title')) {
    function tr_project_title ($project_id) {
        $project = \App\Models\Project::query()->select(['title'])->where(['id' => $project_id])->first();
        if ($project) {
            return $project->title;
        }
    }
}



/**
 * Returns project's daily sales.
 * @returns integer
 */

if (! function_exists('tr_project_daily_sales')) {
    function tr_project_daily_sales ($project_id, $returns) {
        if ($returns == "quantity") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('quantity');
            return $sale;
        } elseif ($returns == "point") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('point');
            return $sale;
        }
    }
}

/**
 * Returns project's weekly sales.
 * @returns integer
 */

if (! function_exists('tr_project_weekly_sales')) {
    function tr_project_weekly_sales ($project_id, $returns) {
        if ($returns == "quantity") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('quantity');
            return $sale;
        } elseif ($returns == "point") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('point');
            return $sale;
        }
    }
}

/**
 * Returns project's monthly sales.
 * @returns integer
 */

if (! function_exists('tr_project_monthly_sales')) {
    function tr_project_monthly_sales ($project_id, $returns) {
        if ($returns == "quantity") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('quantity');
            return $sale;
        } elseif ($returns == "point") {
            $sale = \App\Models\Sale::query()->where(['project_id' => $project_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('point');
            return $sale;
        }
    }
}

/**
 * Returns project's bonus counter.
 * @returns integer
 */

if (! function_exists('tr_project_bonus_counter')) {
    function tr_project_bonus_counter ($project_id) {
        $project = \App\Models\Project::query()->where(['id' => $project_id])->first();
        $json = json_decode($project->custom);
        if ($json) {
            return $json['bonus_counter'];
        }
    }
}
