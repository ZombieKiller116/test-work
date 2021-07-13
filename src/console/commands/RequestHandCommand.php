<?php

namespace src\console\commands;

use src\models\RequestHandler;

class RequestHandCommand
{
    public function run()
    {
        $handler = new RequestHandler();

        $handler->processing(10000);
    }
}