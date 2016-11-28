<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courriel extends Model
{
    public $fillable =['title','subject','send_date','content','user_id'];
    public $dates = ['send_date','created_at','updated_at'];

    public function users()
    {
       return $this->belongsTo('App\User');
    }
    public function setSendMailAttribute($value)
    {
        if ($value)
        {

            $this->attributes['send_date'] = Carbon::createFromFormat('d/m/Y',$value);
        }
    }
}
