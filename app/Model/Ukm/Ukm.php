<?php

namespace App\Model\Ukm;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    //
    public function founder()
    {
        return $this->belongsTo('App\Model\User');
    }
}
