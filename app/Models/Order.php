<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Enums\Sort;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Ramsey\Uuid\Type\Integer;

class Order extends Model
{
    public $timestamps = false;
    use HasFactory;

    // 1 Order có nhiều OrderDetail (1 - n)
    public function orderDetails() : HasMany
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    // 1 order thuộc về nhiều product, (n - 1)
    public function products() : BelongsToMany
    {
        // sử dụng bảng OrderDetail làm trung gian để tìm kiếm product
        return $this->belongsToMany(Product::class,'order_details');
//            ->using(OrderDetail::class);
    }



    function getFormatPriceAttribute(): string //dữ liệu trả về là string
    {
        return number_format($this->total_price);
    }

    public function scopeFindByName($query)
    {
        if (request()->filled('name')) {
            $query->where('ship_name', 'LIKE', '%' . request()->get('name') . '%');
        }

        return $query;
    }

    public function scopeFindByNameProduct($query)
    {
        if (request()->filled('nameProduct')) {
            $name =request()->get('nameProduct');
            // tìm đến bảng product gọi đến name bên ngoài bảng order
            $query->whereHas('products', function($q) use ($name) {
                $q->where('name', 'like' , '%'."$name". '%');
            });
        }

        return $query;
    }

    public function scopeFindById($query)
    {
        if (request()->filled('id')) {
            $query->where('id', request()->get('id'));
        }

        return $query;
    }

    public function scopeFindByProductName($query)
    {
        if (request()->filled('productName')) {

            $query->where('id', request()->get('id'));
        }

        return $query;
    }

    public function scopeFindByPhone($query)
    {
        if (request()->filled('phone')) {
            $query->where('ship_phone', 'LIKE', '%' . request()->get('phone') . '%');
        }

        return $query;
    }

    public function scopeFindByEmail($query)
    {
        if (request()->filled('email')) {
            $query->where('ship_email', 'LIKE', '%' . request()->get('email') . '%');
        }

        return $query;
    }

    public function scopeFindByStatus($query)
    {
        if (request()->filled('status')) {
            $status = request()->get('status');
            $query->where('ship_status', $status);
        }
        return $query;
    }

    public function scopeFindByPayment($query)
    {
        if (request()->filled('payment')) {
            $payment = request()->get('payment');
            if ($payment == 1) {
                $query->where('check_out', 1);
            } else if ($payment == 0) {
                $query->where('check_out', 0);
            }
        }
        return $query;
    }

    public function scopeSortByName($query)
    {
        if (request()->filled('sortName')) {
            $sort = request()->get('sortName');
            if ($sort == Sort::Asc) {
                $query->orderBy('ship_name', 'asc');
            }
            if ($sort == Sort::Desc) {
                $query->orderBy('ship_name', 'desc');
            }
        }
        return $query;
    }

    public function scopeSortByPrice($query)
    {
        if (request()->filled('sortPrice')) {
            $sort = request()->get('sortPrice');
            if ($sort == Sort::Asc) {
                $query->orderBy('total_price', 'asc');
            }
            if ($sort == Sort::Desc) {
                $query->orderBy('total_price', 'desc');
            }
        }
        return $query;
    }


    public function scopeSortByCreatedAt($query)
    {
        if (request()->filled('created_at')) {
            $sort = request()->get('created_at');
            if ($sort == Sort::Asc) {
                $query->orderBy('created_at', 'asc');
            }
            if ($sort == Sort::Desc) {
                $query->orderBy('created_at', 'desc');
            }
        }
        return $query;
    }


    public function scopeFilterPrice($query)
    {
        if (request()->filled('totalPrice')) {

            switch (request()->totalPrice) {
                case '1':
                    $query->whereBetween('total_price', [0, 100000]);
                    break;
                case '2':
                    $query->whereBetween('total_price', [100000, 200000]);
                    break;
                case '3':
                    $query->whereBetween('total_price', [200000, 300000]);
                    break;
                case '4':
                    $query->whereBetween('total_price', [300000, 400000]);
                    break;
                case '5':
                    $query->whereBetween('total_price', [400000, 500000]);
                    break;
                case '6':
                    $query->whereBetween('total_price', [500000, 5000000]);
                    break;

            }
        }
        return $query;
    }

    public function scopeFilterDateCreated($query)
    {
        if (request()->filled('startDate') && request()->filled('endDate')){
            $start = Carbon::parse(request()->get('startDate'));
            $end = Carbon::parse(request()->get('endDate'));
            if (strtotime($start) == strtotime($end)) {
                $query->whereDate('created_at', "=", $start);
            } else {
                $query->whereBetween('created_at', [$start->format('Y-m-d') . " 00:00:00", $end->format('Y-m-d') . " 23:59:59"]);
            }
        }

        return $query;
    }


    public function getHandlerStatusAttribute()
    {
        $str = '';
        switch ($this->ship_status) {
            case OrderStatus::Cancel:
                $str = 'Huỷ đơn';
                break;
            case OrderStatus::Done:
                $str = 'Đã giao hàng';
                break;
            case OrderStatus::Waiting:
                $str = 'Chờ xác nhận';
                break;
            case OrderStatus::Processing:
                $str = 'Đang xử lý';
                break;
            case OrderStatus::Deleted:
                $str = 'Đã xoá';
                break;
        }
        return $str;
    }

    public function getHandlerPaymentAttribute()
    {
        if ($this->check_out == 1) {
            $payment = 'Đã thanh toán';
        } else if($this->check_out == 0){
            $payment = 'Chưa thanh toán';
        }
        return $payment;
    }
}
