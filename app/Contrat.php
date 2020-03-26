<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $primaryKey='id_contrat';


    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }

    public function session(){
        return $this->belongsTo(Session::class,'id_session');
    }

    public function client(){
        return $this->belongsTo(Client::class,'id_client');
    }
    public function paiemnets(){
        return $this->hasMany(Paiement::class,'id_contrat');
    }
}
