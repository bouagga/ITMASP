<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $primaryKey = 'id_formation';

    public function admin(){
        return $this->belongsTo(Admin::class,'id_formation');
}
    public function category(){
        return $this->belongsTo(Category::class,'id_formation');
    }

    public function sessions(){
        return$this->hasMany(Session::class,'id_formation');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_formation');
    }

    public function client(){
        return $this->belongsTo(Client::class,'id_formation');
    }

    public function preinscription(){
        return $this->hasOne(Preinscription::class,'id_formation');
    }

}
