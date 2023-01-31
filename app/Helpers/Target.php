<?php

use App\Models\Sale;

if (! function_exists('tr_check_target_target_status')) {
    function tr_check_target_target_status ()
    {
        $targets = \App\Models\Target::all();
        foreach ($targets as $target) {
            if (date('Y-m-d H:i:s') < date('Y-m-d 00:00:00', strtotime($target->start_date))) {
                $target->target_status = 'not_started';
            } else {
                if (date('Y-m-d H:i:s') > date('Y-m-d 23:59:59', strtotime($target->end_date))) {
                    if ($target->type == "team" || $target->type == "user" || $target->type == "project") {
                        $target_sales = Sale::query()
                            ->where(function ($query) use ($target) {
                                if ($target->type == "team") {
                                    $query->where('office_id', $target->office_id);
                                    $query->where('project_id', $target->project_id);
                                } else if ($target->type == "user") {
                                    $query->where('user_id', $target->user_id);
                                } else if ($target->type == "project") {
                                    $query->where('project_id', $target->project_id);
                                }
                            })
                            ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($target->start_date)),date('Y-m-d 23:59:59', strtotime($target->end_date))])
                            ->sum($target->target_type);
                        if ($target_sales >= $target->target) {
                            if ($target->target_status != 'completed') {
                                $target->target_status = 'completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            }
                        } else {
                            if ($target->target_status != 'not_completed') {
                                $target->target_status = 'not_completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            }
                        }
                    }
                } else {
                    $target_sales = Sale::query()
                        ->where(function ($query) use ($target) {
                            if ($target->type == "team") {
                                $query->where('office_id', $target->office_id);
                                $query->where('project_id', $target->project_id);
                            } else if ($target->type == "user") {
                                $query->where('user_id', $target->user_id);
                            } else if ($target->type == "project") {
                                $query->where('project_id', $target->project_id);
                            }
                        })
                        ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($target->start_date)),date('Y-m-d 23:59:59', strtotime($target->end_date))])
                        ->sum($target->target_type);
                    if ($target_sales >= $target->target) {
                        if ($target->target_status != 'completed') {
                            $target->target_status = 'completed';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        }
                    } else {
                        if ($target->target_status != 'continues') {
                            $target->target_status = 'continues';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        }
                    }
                }
            }
            $target->save();
        }
    }
}

if (! function_exists('tr_target_status_beautifier')) {
    function tr_target_status_beautifier ($target_status)
    {
        if ($target_status == "completed") {
            return "Tamamlandı";
        } else if ($target_status == "not_completed") {
            return "Tamamlanamadı";
        } else if ($target_status == "continues") {
            return "Devam Ediyor";
        } else if ($target_status == "not_started") {
            return "Henüz Başlamadı";
        }
    }
}

if (! function_exists('tr_target_status_class')) {
    function tr_target_status_class ($target_status)
    {
        if ($target_status == "completed") {
            return "success";
        } else if ($target_status == "not_completed") {
            return "danger";
        } else if ($target_status == "continues") {
            return "primary";
        } else if ($target_status == "not_started") {
            return "warning";
        }
    }
}
