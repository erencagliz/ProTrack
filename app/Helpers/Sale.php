<?php

/**
 * parameters = type, user_id, office_id, project_id, returns, start_date and end_date.
 * type must be user, project or office.
 * returns must be quantity or point.
 * start_date and end_date is optional but at least one of them is required.
 * if type == user, user_id also required.
 * if type == project, project_id also required.
 * if type == office, office_id required and project_id is optional.
 * Returns sale's between 2 dates.
 * @returns integer
 */

if (! function_exists('tr_sales_between_dates')) {
    function tr_sales_between_dates (array $args) {
        if ($args['type'] == "user") {
            if ($args['returns'] == "point") {
                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['user_id']) {
                        $query->where('user_id', $args['user_id']);
                    }
                })->sum('point');
                return $sale;
            } elseif ($args['returns'] == "quantity") {
                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['user_id']) {
                        $query->where('user_id', $args['user_id']);
                    }
                })->sum('quantity');
                return $sale;
            }
        } elseif ($args['type'] == "project") {
            if ($args['returns'] == "point") {
                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['project_id']) {
                        $query->where('project_id', $args['project_id']);
                    }
                })->sum('point');
                return $sale;
            } elseif ($args['returns'] == "quantity") {

                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['project_id']) {
                        $query->where('project_id', $args['project_id']);
                    }
                })->sum('quantity');
                return $sale;
            }
        } elseif ($args['type'] == "office") {
            if ($args['returns'] == "point") {
                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['office_id']) {
                        $query->where('office_id', $args['office_id']);
                    }
                    if ($args['project_id']) {
                        $query->where('project_id', $args['project_id']);
                    }
                })->sum('point');
                return $sale;
            } elseif ($args['returns'] == "quantity") {
                $sale = \App\Models\Sale::query()->where(function ($query) use ($args) {
                    $query->whereBetween('created_at', [$args['start_date'], $args['end_date']]);
                    $query->where('status', 'active');
                    if ($args['office_id']) {
                        $query->where('office_id', $args['office_id']);
                    }
                    if ($args['project_id']) {
                        $query->where('project_id', $args['project_id']);
                    }
                })->sum('quantity');
                return $sale;
            }
        }
    }
}
