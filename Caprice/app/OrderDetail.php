<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    //
    use SoftDeletes;
    protected $table='orderDetail';
    
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function calcularSubTotal(){
        if($this->subtotal == 0){
            $this->subtotal = $this->product()->precio * $this->cantidad;            
        }
        return $this->subtotal;
    }    
    
}
