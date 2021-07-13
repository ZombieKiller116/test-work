<?php


namespace src\helpers;


class LogHelper
{
    public static function generateLeadsString(array $array): string
    {
        $string = "";

        foreach ($array as $item) {
            $string .= $item['lead_id'] . '|';
            $string .= $item['lead_category'] . '|';
            $string .= $item['current_datetime'];
            $string .= "\r\n";
        }

        return $string;
    }
}