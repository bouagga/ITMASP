<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey ='id_category';

    public function formations(){
        return $this->hasMany(Formation::class,'id_category');
    }
}
