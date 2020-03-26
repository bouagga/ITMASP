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
    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }

    public function preinscriptios(){
        return $this->hasMany(Preinscription::class,'id_client');
    }

    public function applesortan(){
        return $this->hasMany(AppelSortant::class,'id_client');
    }

    public function contrats(){
        return $this->hasMany(Contrat::class,'id_client');
    }

}
