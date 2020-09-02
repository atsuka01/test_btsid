<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockShopping extends Model
{
    protected $table = 'stock_shoppings';
    protected $fillable = ['stock'];
    public function shooping()
    {
        return $this->belongsTo(shopping::class,'id');
    }
}
