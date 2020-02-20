<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    //
    use SoftDeletes;
    protected $table='employees';

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
