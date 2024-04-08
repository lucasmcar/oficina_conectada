<?php

namespace App\Helper;

class JsonHelper
{

    public static function toJson(array $data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public static function toArray($data)
    {
        return json_decode($data, true);
    }

}