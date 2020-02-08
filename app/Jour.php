<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    protected $primaryKey = 'id_jour';


    public function creneau(){
        return $this->belongsTo(Creneau::class);
    }
}
