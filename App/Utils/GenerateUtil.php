<?php 

namespace App\Utils;

abstract class GenerateUtil
{

    public static function generateRandomOs() : int
    {
        return rand(000000, 999999);
    }

} 