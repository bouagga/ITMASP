<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey='id_client';
    public function clienttable(){
        return $this->morphTo();
    }
}
