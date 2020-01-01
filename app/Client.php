<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey='id_client';
    public function clienttable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class,'id_client');
    }

    public function formation(){
        return $this->hasOne(Formation::class,'id_client');
    }

    public function preinscription(){
        return $this->hasOne(Preinscription::class,'id_client');
    }





}
