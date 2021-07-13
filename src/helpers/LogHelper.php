<?php

namespace src\helpers;

use LeadGenerator\Lead;
use src\models\Log;

class LogHelper
{
    public static function writeLog(int $leadId, Lead $lead)
    {
        Log::write($leadId . '|' . $lead->categoryName . '|' . $lead->currentDatetime . "\r\n");
    }
}