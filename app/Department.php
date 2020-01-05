<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'id_department';

    public function formations(){
        return $this->belongsToMany(Formation::class,'department_formation','id_department','id_formation');
    }
}
