<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;
    protected $table ='order';

    public function orderDetails(){
        return $this->hasMany('App\OrderDetail');
    }
    public function employee(){
        return $this->belongsTo('App\Employee');
    }
    public function bar(){
        return $this->belongsTo('App\Bar');
    }
    public function calcularTotal(){
        
        $totalAPagar = 0.0;
        foreach($this->orderDetails as $orderDetail){
            $totalAPagar += $total + $orderDetail->calcularSubTotal();
        }
        $this->total = $totalAPagar;
    
    }
}
