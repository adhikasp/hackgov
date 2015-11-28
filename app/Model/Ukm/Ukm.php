<?php

namespace App\Model\Ukm;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $guarded = [];

    public function scopeName($query, $name)
    {
        return $query
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('long_description', 'like', '%' . $name . '%');
    }

    public function founder()
    {
        return $this->belongsTo('App\Model\User');
    }
}
