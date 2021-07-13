<?php

namespace src\helpers;

class LeadHelper
{
    public static function convertLeadsToOutputArray(array $leads): array
    {
        $convertedArray = [];

        foreach ($leads as $k => $lead) {
            $convertedArray[$k]['lead_id'] = $lead->id;
            $convertedArray[$k]['lead_category'] = $lead->categoryName;
            $convertedArray[$k]['current_datetime'] = $lead->currentDatetime;
        }

        return $convertedArray;
    }
}