<?php

namespace src\console\commands;

use Exception;
use src\models\RequestHandler;

class RunWorkerCommand
{
    public function run($args)
    {
        $applicationCount = $args[1];
        $workerNumber = $args[3];

        for ($i = 1; $i <= $applicationCount; $i++) {
            try {
                RequestHandler::handleSimpleApplication(($workerNumber - 1) * $applicationCount + $i);
            } catch (Exception $e) {
                continue;
            }
        }
    }
}