<?php

namespace src\interfaces;

interface RequestHandlerInterface
{
    public function processing(int $applicationCounts);

    public static function handleSimpleApplication($leadId);
}