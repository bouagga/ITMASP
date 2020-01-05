<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $primaryKey = 'id_session';

    public function admin(){
        return $this->belongsTo(Session::class,'id_admin','id_session');
    }
    public function formation(){
        return $this->belongsTo(Formation::class,'id_formation','id_session');
    }
}
