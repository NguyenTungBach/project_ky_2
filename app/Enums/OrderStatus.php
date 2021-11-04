<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    const Waiting =   2;
    const Processing =   3;
    const Done = 1;
    const Cancel = 0;
    const Deleted = -1;
    const None = -999;
}
