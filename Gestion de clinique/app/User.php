<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/** */
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

/* Ajout */
//use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom','nom', 'role', 'email', 'password',
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

    /** */

    public function age(){
        return Carbon::parse($this->attributes['dateNais'])->age;
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = \Hash::make($password);
    }

    /**
     * Get the rdv for the user patient.
     */
    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class);
    }

    /**
     * Get the consulte for the user patient.
     */
    public function consultation()
    {
        return $this->hasMany('App\Consultation','patient_id');
    }
    
    public function antecedent()
    {
        return $this->hasMany('App\ModelDossier\Antecedent','pat_id');
    }
    
}
