<?php

/**
 * Returns website's default favicon.
 * @returns string
 */

if (! function_exists('tr_favicon')) {
    function tr_favicon () {
        return asset('trapp/uploads/triooz_favicon.png');
    }
}

/**
 * Returns website's default light logo.
 * @returns string
 */

if (! function_exists('tr_light_logo')) {
    function tr_light_logo () {
        return asset('trapp/uploads/triooz_light.png');
    }
}

/**
 * Returns website's default dark logo.
 * @returns string
 */

if (! function_exists('tr_dark_logo')) {
    function tr_dark_logo () {
        return asset('trapp/uploads/triooz_dark.png');
    }
}

/**
 * Returns status as Turkish.
 * @returns string
 */

if (! function_exists('tr_status_beautify')) {
    function tr_status_beautify ($status) {
        if ($status == "active") {
            return "Aktif";
        } else if ($status == "passive") {
            return "Pasif";
        } else if ($status == "pending") {
            return "Beklemede";
        }
    }
}

/**
 * Returns status class (as success, danger and warning.).
 * @returns string
 */

if (! function_exists('tr_status_class')) {
    function tr_status_class ($status) {
        if ($status == "active") {
            return "success";
        } else if ($status == "passive") {
            return "danger";
        } else if ($status == "pending") {
            return "warning";
        }
    }
}

/**
 * Returns calendar type.
 * @returns string
 */

if (! function_exists('tr_calendar_type_beautifier')) {
    function tr_calendar_type_beautifier ($type) {
        if ($type == "event") {
            return "Etkinlik";
        } else if ($type == "interview") {
            return "Mülakat";
        } else if ($type == "meeting") {
            return "Toplantı";
        } else if ($type == "working_day") {
            return "Çalışma Günü";
        }
    }
}

/**
 * Returns beautifies offday date_type.
 * @returns string
 */

if (! function_exists('tr_offday_date_type')) {
    function tr_offday_date_type ($type) {
        if ($type == "yearly") {
            return "Yıllık İzin";
        } else if ($type == "marriage") {
            return "Evlilik İzni";
        } else if ($type == "death") {
            return "Ölüm İzni";
        } else if ($type == "free") {
            return "Ücretsiz İzin";
        } else if ($type == "birth") {
            return "Doğum İzni";
        }
    }
}


