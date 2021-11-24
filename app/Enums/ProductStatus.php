<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SoldOut()
 * @method static static Stocking()
 */
final class ProductStatus extends Enum
{
    const SoldOut =   0;
    const Stocking =   1;
}
