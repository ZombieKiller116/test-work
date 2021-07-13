<?php

require_once __DIR__ . '/../vendor/autoload.php';

use src\models\RequestHandler;

(new \src\console\commands\RunWorkerCommand())->run($argv);

exit();