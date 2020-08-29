<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
        protected $guarded=[];

         public function products() {
        return $this->hasMany(product::class);
    }
    public function shopitems() {
        return $this->hasMany(shopitems::class);
    }

}
