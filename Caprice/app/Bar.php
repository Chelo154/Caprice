<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bar extends Model
{
    use SoftDeletes;
    protected $table ='bar';
    

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
