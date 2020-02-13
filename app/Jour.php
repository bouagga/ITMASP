<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    protected $primaryKey = 'id_jour';


    public function inscription(){
        return $this->belongsTo(Preinscription::class,'id_preinscription','id_jour');
    }
}
