<?php

/**
 * Beautifies the given human resource position condition.
 * @param $text string
 * @returns string
 */

if (! function_exists('tr_beautify_position_condition')) {
    function tr_beautify_position_condition ($text)
    {
        if ($text == "work_hours") {
            return "Çalışma Saatleri";
        } else if ($text == "sgk") {
            return "SGK";
        } else if ($text == "salary") {
            return "Maaş";
        } else if ($text == "home_office") {
            return "Home Office";
        } else if ($text == "distance_and_service") {
            return "Uzaklık & Servis";
        } else if ($text == "out_of_city") {
            return "Şehir Dışı";
        } else if ($text == "language_insufficient") {
            return "Yetersiz Dil";
        } else if ($text == "doesent_speak_german") {
            return "Almanca Bilmiyor";
        } else if ($text == "black_list") {
            return "Kara Liste";
        } else if ($text == "didnt_attend") {
            return "Görüşmeye Gelmedi";
        } else if ($text == "just_recieved_information") {
            return "Sadece Bilgi Aldı";
        } else if ($text == "not_thinking_of_sales") {
            return "Satış Düşünmüyor";
        }
    }
}
