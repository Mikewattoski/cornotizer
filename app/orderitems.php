<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
	protected $guarded = [];
    public function order() {
        return $this->belongsTo(order::class);
    }}
