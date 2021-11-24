<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Delete()
 * @method static static Active()
 * @method static static Waiting()
 */
final class Status extends Enum
{
    const Delete =   0;
    const Active =   1;
    const Waiting = 2;


}
