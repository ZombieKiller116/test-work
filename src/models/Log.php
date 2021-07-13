<?php


namespace src\models;


class Log implements \src\interfaces\LogInterface
{

    public static function write(string $log)
    {
        $fullFilePath = __DIR__ . '/../logs/' . time() . '.txt';

        $file = fopen($fullFilePath, 'w');
        fwrite($file, $log);
        fclose($file);
    }
}