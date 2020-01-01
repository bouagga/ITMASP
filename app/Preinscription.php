<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
protected $primaryKey='id_preinscription';

    public function user(){
        return $this->belongsTo(User::class,'id_preinscription');
    }

    public function formation(){
        return $this->belongsTo(Formation::class,'id_preinscription');
    }

    public function client(){
        return $this->belongsTo(Client::class,'id_preinscription');
    }
}
