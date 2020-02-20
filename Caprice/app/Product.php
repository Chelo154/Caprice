<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    
    use SoftDeletes;
    protected $table ='product';

    public function orderDetails(){
        return $this->hasMany('App\OrderDetail');
    }
}
