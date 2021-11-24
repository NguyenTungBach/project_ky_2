<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Asc()
 * @method static static Desc()
 * @method static static None()
 */
final class Sort extends Enum
{
    const Asc =   1; //
    const Desc =   -1; //
    const None = 0; // không sắp xếp
}
