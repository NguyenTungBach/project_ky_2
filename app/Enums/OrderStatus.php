<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Waiting()
 * @method static static Processing()
 * @method static static Done()
 * @method static static Cancel()
 * @method static static Deleted()
 * @method static static None()
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
