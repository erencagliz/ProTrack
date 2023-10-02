<?php

/**
 * Returns user's image url.
 * @returns string
 */

if (! function_exists('tr_user_details')) {
    function tr_user_details ($user_id = null, $field) {
        if ($user_id == null) {
            if (cache()->has('auth_user_'.$field)) {
                return cache()->get('auth_user_'.$field);
            } else {
                $user_detail = \App\Models\UserDetail::query()->select([$field])->where(['user_id' => Auth::user()->id])->first();
                cache()->put('auth_user_'.$field, $user_detail->$field, now()->addHours(24));
                return $user_detail->$field;
            }
        } else {
            if (cache()->has('user_'.$user_id.'_'.$field)) {
                return cache()->get('user_'.$user_id.'_'.$field);
            } else {
                $user_detail = \App\Models\UserDetail::query()->select([$field])->where(['user_id' => $user_id])->first();
                cache()->put('user_'.$user_id.'_'.$field, $user_detail->$field, now()->addHours(24));
                return $user_detail->$field;
            }
        }
    }
}

/**
 * Returns user's image url.
 * @returns string
 */

if (! function_exists('tr_user_image')) {
    function tr_user_image ($user_id = null) {
        if ($user_id == null) {
            $image = tr_user_details(null, 'image');
            if ($image !== null) {
                return asset('trapp/uploads/users/'.$image);
            } else {
                return asset('trapp/uploads/users/null.png');
            }
        } else {
            $image = tr_user_details($user_id, 'image');
            if ($image !== null) {
                return asset('trapp/uploads/users/'.$image);
            } else {
                return asset('trapp/uploads/users/null.png');
            }
        }
    }
}

/**
 * Returns user's fullname.
 * @returns string
 */

if (! function_exists('tr_user_fullname')) {
    function tr_user_fullname ($user_id = null) {
        if ($user_id == null) {
            return Auth::user()->name.' '.Auth::user()->surname;
        } else {
            $user = \App\Models\User::query()->where(['id' => $user_id])->first();
            return $user->name.' '.$user->surname;
        }
    }
}


/**
 * Returns user's group title.
 * @returns string
 */

if (! function_exists('tr_user_group_title')) {
    function tr_user_group_title ($user_id = null) {
        if ($user_id == null) {
            return tr_group_title(tr_user_details(Auth::user()->id, 'group_id'));
        } else {
            return tr_group_title(tr_user_details($user_id, 'group_id'));
        }
    }
}


/**
 * Returns user's office title.
 * @returns string
 */

if (! function_exists('tr_user_office_title')) {
    function tr_user_office_title ($user_id = null) {
        if ($user_id == null) {
            return tr_office_title(tr_user_details(Auth::user()->id, 'office_id'));
        } else {
            return tr_office_title(tr_user_details($user_id, 'office_id'));
        }
    }
}



/**
 * Returns user's project title.
 * @returns string
 */

if (! function_exists('tr_user_project_title')) {
    function tr_user_project_title ($user_id = null) {
        if ($user_id == null) {
            return tr_project_title(tr_user_details(Auth::user()->id, 'project_id'));
        } else {
            return tr_project_title(tr_user_details($user_id, 'project_id'));
        }
    }
}

/**
 * Checks user's permission.
 * @returns bool
 */

if (! function_exists('tr_user_permission_check')) {
    function tr_user_permission_check ($user_id = null, $permission_key) {
        if ($user_id == null) {

            $json = json_decode(tr_user_details(null, 'custom'), true);
            if ($json) {
                $json = $json['permissions'];
                foreach ($json as $key => $value) {
                    if ($key == $permission_key) {
                        if ($value == true) {
                            return true;
                        }
                    }
                }
            }

        } else {

            $json = json_decode(tr_user_details($user_id, 'custom'), true);
            if ($json) {
                $json = $json['permissions'];
                foreach ($json as $key => $value) {
                    if ($key == $permission_key) {
                        if ($value == true) {
                            return true;
                        }
                    }
                }
            }

        }
    }
}

/**
 * Returns user's daily sales.
 * @returns integer
 */

if (! function_exists('tr_user_daily_sales')) {
    function tr_user_daily_sales ($user_id, $returns) {
        if ($user_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->sum('point');
                return $sale;
            }
        }
    }
}

/**
 * Returns user's weekly sales.
 * @returns integer
 */

if (! function_exists('tr_user_weekly_sales')) {
    function tr_user_weekly_sales ($user_id, $returns) {
        if ($user_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime('monday this week')), date('Y-m-d 23:59:59', strtotime('sunday this week'))])->sum('point');
                return $sale;
            }
        }
    }
}

/**
 * Returns user's monthly sales.
 * @returns integer
 */

if (! function_exists('tr_user_monthly_sales')) {
    function tr_user_monthly_sales ($user_id, $returns) {
        if ($user_id) {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => $user_id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('point');
                return $sale;
            }
        } else {
            if ($returns == "quantity") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('quantity');
                return $sale;
            } elseif ($returns == "point") {
                $sale = \App\Models\Sale::query()->where(['user_id' => Auth::user()->id])->whereBetween('created_at', [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')])->sum('point');
                return $sale;
            }
        }
    }
}

/**
 * Returns user's username.
 * @returns integer
 */

if (! function_exists('tr_user_username')) {
    function tr_user_username ($user_id = null) {
        if ($user_id) {
            $user = \App\Models\User::query()->select('username')->where(['id' => $user_id])->first();
            if ($user) {
                return $user->username;
            }
        } else {
            return Auth::user()->username;
        }
    }
}

/**
 * Returns user's username.
 * @returns integer
 */

if (! function_exists('tr_user_phone')) {
    function tr_user_phone ($user_id = null) {
        if ($user_id) {
            $user = \App\Models\User::query()->select('phone')->where(['id' => $user_id])->first();
            if ($user) {
                return $user->phone;
            }
        } else {
            return Auth::user()->phone;
        }
    }
}
