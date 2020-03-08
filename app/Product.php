<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';
    //
    protected $fillable = [
        'title',
        'imageUrl',
        'description',
        'price',
    ];
    protected $attributes = [
        'user_id' => 1,
    ];
}
