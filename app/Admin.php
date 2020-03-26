<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $primaryKey ='id_admin';
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function formations(){
        return $this->hasMany(Formation::class,'id_admin');
    }

    public function sessions(){
        return$this->hasMany(Session::class,'id_admin');
    }
    public function preinscriptios(){
        return $this->hasMany(Preinscription::class,'id_admin');
    }
    public function appelsortants(){
        return $this->hasMany(AppelSortant::class,'id_admin');
    }

    public function client(){
        return $this->hasMany(Client::class,'id_admin');
    }

    public function contrats(){
        return $this->hasMany(Contrat::class,'id_admin');
    }
    public function paiemnets(){
        return $this->hasMany(Paiement::class,'id_admin');
    }
}
