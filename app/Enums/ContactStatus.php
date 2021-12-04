<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Unread()
 * @method static static Read()
 * @method static static Delete()
 */
final class ContactStatus extends Enum
{
    const Unread =   1;
    const Read =   2;
    const Delete =   0;
}
