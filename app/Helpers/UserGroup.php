<?php

/**
 * Returns group title.
 * @returns string
 */

if (! function_exists('tr_group_title')) {
    function tr_group_title ($group_id) {
        if (cache()->has('group_title_' . $group_id)) {
            return cache()->get('group_title_' . $group_id);
        } else {
            $group = \App\Models\UserGroup::query()->select(['title'])->where(['id' => $group_id])->first();
            if ($group) {
                cache()->put('group_title_' . $group_id, $group->title);
                return $group->title;
            }
        }
    }
}

/**
 * Checks group's permission.
 * @returns bool
 */

if (! function_exists('tr_group_permission_check')) {
    function tr_group_permission_check ($group_id, $permission_key) {
        if (cache()->has('group_'.$group_id.'_permissions')) {
            foreach (json_decode(cache()->get('group_'.$group_id.'_permissions'), true) as $key => $value) {
                if ($key == $permission_key) {
                    if ($value == true) {
                        return true;
                    }
                }
            }
        } else {
            $group = \App\Models\UserGroup::query()->select(['permissions'])->where(['id' => $group_id, 'status' => 'active'])->first();
            if ($group) {
                cache()->put('group_'.$group_id.'_permissions', $group->permission);
                foreach (json_decode($group->permissions, true) as $key => $value) {
                    if ($key == $permission_key) {
                        if ($value == true) {
                            return true;
                        }
                    }
                }
            } else {
                return false;
            }
        }
    }
}

/**
 * Gets groups permissions.
 * @returns bool
 */

if (! function_exists('tr_group_permission')) {
    function tr_group_permission ($group_id) {
        if (cache()->has('group_'.$group_id.'_permissions')) {
            return cache()->get('group_'.$group_id.'_permissions');
        } else {
            $group = \App\Models\UserGroup::query()->select(['permissions'])->where(['id' => $group_id, 'status' => 'active'])->first();
            cache()->put('group_'.$group_id.'_permissions', $group->permission);
            return $group->permissions;
        }
    }
}
