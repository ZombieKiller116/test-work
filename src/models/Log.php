<?php

namespace src\models;

use src\interfaces\LogInterface;

class Log implements LogInterface
{

    public static $fullFilePath = __DIR__ . '/../logs/log.txt';

    public static function write(string $log)
    {
        $file = fopen(self::$fullFilePath, 'a');
        fwrite($file, $log);
        fclose($file);
    }
}