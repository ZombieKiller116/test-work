<?php

require_once __DIR__ . '/../vendor/autoload.php';

use src\console\commands\RequestHandCommand;

(new RequestHandCommand())->handle();