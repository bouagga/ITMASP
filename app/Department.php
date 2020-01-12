<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'id_department';

    public function formations(){
        return $this->hasMany(Formation::class,'id_department');
    }
}
