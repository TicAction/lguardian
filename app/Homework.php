<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{

    protected $dates = ['start', 'end', 'created_at', 'updated_at'];

    protected $fillable = ['start', 'end', 'content'];

    public function setStartAttribute($value)
    {
        if ($value)
        {
            $this->attributes['start'] = Carbon::createFromFormat('d/m/Y',$value);
        }

    }
    public function setEndAttribute($value)
    {
        if($value)
        {
            $this->attributes['end'] = Carbon::createFromFormat('d/m/Y' ,$value);
        }

    }
}
