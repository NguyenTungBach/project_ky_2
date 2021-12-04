<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "order/create-payment", "order/execute-payment","/cart/add","/cart/update","/cart/remove",
        "/admin/product/update-multi/status", "/admin/contact/update-multi/status",
        'admin/order/update/status', "/admin/order/remove-multi/status", "/admin/order/update-multi/status",

        "/contact",
    ];
}
