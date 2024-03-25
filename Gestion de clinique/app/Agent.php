<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Hash;

class Agent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    public function setPasswordAttribute($password){
        $this->attributes['password'] = \Hash::make($password);
    }

}
