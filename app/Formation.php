<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $primaryKey = 'id_formation';

    public function admin(){
        return $this->belongsTo(Admin::class,'id_formation','id_admin');
    }

    public function departments(){
        return $this->belongsToMany(Department::class,'department_formation','id_formation','id_department');
    }
    public function category(){
        return $this->belongsTo(Category::class,'id_formation','id_category');
    }

    public function sessions(){
        return$this->hasMany(Session::class,'id_session','id_formation');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_formation');
    }

    public function client(){
        return $this->belongsTo(Client::class,'id_formation');
    }

    public function preinscriptions(){
        return $this->hasMany(Preinscription::class,'id_preinscription','id_formation');
    }

}
