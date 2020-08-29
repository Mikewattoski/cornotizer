<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

protected $guarded = []; 
  
     public function user() {
        return $this->belongsTo(User::class);
    }
     public function OrderItems() {
        return $this->hasMany(orderitems::class);
    }

    public function products() {
        return $this->belongsToMany(product::class,'orderitems');
    }

}

