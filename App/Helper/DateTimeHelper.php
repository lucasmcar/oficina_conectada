<?php 
namespace App\Helper;

use DateTime;

class DateTimeHelper
{
    /**
     * Converts a date string normal format to Database format
     * @param string $date
     * @return string | null
     */
    public static function toDatabaseFormat(string $date) : string
    {
        return \DateTime::createFromFormat('d/m/Y H:i:s', $date)->format("Y-m-d H:i:s");
    }

    /**
     * Converts a date string Database format to normal format
     * @param string $date
     * @return string | null
     */
    public static function toNormalFormat(string $date) : string 
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $date)->format("d/m/Y H:i:s");
    }
}