<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function getFullnameAttribute()
    {
        return $this->firstname ." " .$this->lastname;
    }
}
