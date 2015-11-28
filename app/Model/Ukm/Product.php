<?php

namespace App\Model\Ukm;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function ukm()
    {
        return $this->belongsTo('App\Model\Ukm\Ukm');
    }
}
