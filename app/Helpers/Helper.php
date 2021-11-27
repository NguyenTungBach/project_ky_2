<?php


namespace App\Helpers;


final class Helper
{
    static $usdToVndRate = 24000;
    public static function convertVNDtoUSD($vnd)
    {
        return number_format((float) $vnd / Helper::$usdToVndRate,2,'.','' );
    }

    public static function formatVND($price): string
    {
        return number_format($price);
    }
}
