<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    //
    protected $fillable = [
        'totalAmount',
        'date',
    ];

    protected $attributes = [
        'user_id' => 1,
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'date'
    ];

    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }


}
