<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppelSortant extends Model
{
    protected $primaryKey ='id_appelsortant';

    public function inscription(){
        return $this->belongsTo(Preinscription::class,'id_preinscription');
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }
    public function client(){
        return $this->belongsTo(Client::class,'id_client');
    }





}
