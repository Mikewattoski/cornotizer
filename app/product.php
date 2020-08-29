<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded=[];
     public function shop() {
        return $this->belongsTo(shop::class);
    }
}
