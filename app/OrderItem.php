<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    //
    protected $fillable = [
        'quantity',
        'productPrice',
        'productTitle',
        'sum',
        'order_id',
        'product_id',
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
