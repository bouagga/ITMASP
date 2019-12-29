<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particulier extends Model
{
    protected $primaryKey='id_particulier';

    public function clients(){
        return $this->morphToMany(Entreprise::class ,'clienttable');
    }
}
