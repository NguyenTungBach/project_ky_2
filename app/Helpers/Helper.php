<?php


namespace App\Helpers;


class Helper
{
    static $usdToVndRate = 24000;
    public static function convertVNDtoUSD($vnd)
    {
        return number_format((float) $vnd / Helper::$usdToVndRate,2,'.','' );
    }
}
