<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $primaryKey='id_entrperise';
    public function clients(){
            return $this->morphToMany(Entreprise::class ,'clienttable');
    }
}
