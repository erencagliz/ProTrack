<?php

/**
 * Beautifies todo's status.
 * @returns string
 */

if (! function_exists('tr_todo_status_beautify')) {
    function tr_todo_status_beautify ($todo_status) {
        if ($todo_status == "completed") {
            return "Tamamlandı";
        } else if ($todo_status == "in_progress") {
            return "Devam Ediyor";
        } else if ($todo_status == "not_completed") {
            return "Tamamlanamadı";
        }
    }
}

/**
 * Returns todo's status class.
 * @returns string
 */

if (! function_exists('tr_todo_status_class')) {
    function tr_todo_status_class ($todo_status) {
        if ($todo_status == "completed") {
            return "success";
        } else if ($todo_status == "in_progress") {
            return "primary";
        } else if ($todo_status == "not_completed") {
            return "danger";
        }
    }
}
