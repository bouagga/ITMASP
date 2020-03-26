<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
protected $primaryKey='id_preinscription';

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function session(){
        return $this->belongsTo(Session::class,'id_session');
    }

    public function client(){
        return $this->belongsTo(Client::class,'id_client');
    }
    public function jours(){
        return $this->hasMany(Jour::class,'id_preinscription');
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }

    public function appelsortants(){
        return $this->hasMany(AppelSortant::class,'id_preinscription');
    }

}
