<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orders_products');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
