<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $dates= ['behave_date','created_at','updated_at'];

    public function kid()
    {
        return $this->belongsTo('App\Kid');
    }
}
