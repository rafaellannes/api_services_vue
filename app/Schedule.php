<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
