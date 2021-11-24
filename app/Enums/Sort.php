<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Sort extends Enum
{
    const Asc =   1; //
    const Desc =   -1; //
    const None = 0; // không sắp xếp
}
