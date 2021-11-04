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
    const Waiting = 2; //chờ
    const Processing = 3; //đang xử lí
    const Done = 1; // đã xong
    const Cancel = 0; //huỷ đơn
    const Deleted = -1; //xoá
    const None = -999; //null
}
