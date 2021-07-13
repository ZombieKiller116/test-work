<?php

namespace src\models;

use LeadGenerator\Generator;
use LeadGenerator\Lead;
use src\helpers\LogHelper;
use src\interfaces\RequestHandlerInterface;

class RequestHandler implements RequestHandlerInterface
{
    public function processing(int $applicationCounts)
    {
        $workersCount = 500;
        for ($i = 1; $i <= $workersCount; $i++) {
            echo shell_exec("php " . __DIR__ . "/../run-worker.php " . $applicationCounts / $workersCount . ' ' . $workersCount . ' ' . $i . " >>" . __DIR__ . "/../logs/errors.log 2>&1 &");
        }
    }

    public static function handleSimpleApplication($leadId)
    {
        sleep(2);

        $generator = new Generator();

        $generator->generateLeads(1, function (Lead $lead) use ($leadId) {
            $lead->currentDatetime = date('d-m-Y H:i:s');

            LogHelper::writeLog($leadId, $lead);
        });
    }
}