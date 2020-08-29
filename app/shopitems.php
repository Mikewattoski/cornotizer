<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopitems extends Model
{protected $guarded = [];
     public function shop() {
        return $this->belongsTo(shop::class);
    }}
