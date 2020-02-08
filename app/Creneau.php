<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creneau extends Model
{
    protected $primaryKey = 'id_creneaus';

    public function session(){
    return $this->belongsTo(Session::class,'id_session');
    }
}
