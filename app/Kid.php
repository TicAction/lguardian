<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{

    protected $fillable = ['firstname','lastname','birthday','code','role','admin_id'];
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('kid_id','user_id');
    }

    public function getFullnameAttribute()
    {
        return $this->firstname ." " .$this->lastname;
    }
}
