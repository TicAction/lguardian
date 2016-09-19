<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormHomework extends Model
{
    protected $fillable = [
        'lecture','grammaire','vocabulaire','mathematique_concept','mathematique_resolution',
        'univers_social','arts','science','ecr','devoir_mathematique','devoir_francais','devoir_autres',
        'anglais','musique','edu','signature','remettre','start','end','conjugaison'
    ];
    protected $dates =['created_at','updated_at','end','start'];
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
