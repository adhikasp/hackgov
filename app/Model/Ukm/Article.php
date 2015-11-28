<?php

namespace App\Model\Ukm;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo('App\Model\User');
    }
}
