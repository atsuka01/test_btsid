<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $table = 'shoppings';
    protected $fillable = [
        'name',
    ];
    public function stock()
    {
        return $this->hasMany(StockShopping::class,'id_shopping');
    }
}
