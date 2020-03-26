<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $primaryKey='id_paiement';

    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }

    public function contrat(){
        return $this->belongsTo(Contrat::class,'id_contrat');
    }
}
