<?php

namespace src\models;

use LeadGenerator\Generator;
use LeadGenerator\Lead;
use src\helpers\LeadHelper;
use src\helpers\LogHelper;
use src\interfaces\RequestHandlerInterface;

class RequestHandler implements RequestHandlerInterface
{
    public $leads;

    public function __destruct() {
        $leadCount = count($this->leads);
        echo "Было обработано $leadCount заявок \r\n";
    }

    public function processing(int $applicationCounts)
    {
        $generator = new Generator();

        $generator->generateLeads($applicationCounts, function (Lead $lead) {
            $lead->currentDatetime = date('d-m-Y H:i:s');
            $this->leads[] = $lead;
        });

        try {
            $this->logLeads();
        } catch (\Exception $e) {
            exit('При логировании заявок произошла ошибка!');
        }
    }

    public function logLeads()
    {
        $leadsForLogging = LeadHelper::convertLeadsToOutputArray($this->leads);
        $logText = LogHelper::generateLeadsString($leadsForLogging);
        Log::write($logText);
    }
}