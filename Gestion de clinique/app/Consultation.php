<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'consultation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numConsult';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the user that owns the redez-vous.
     */
    public function user()
    {
        return $this->belongsTo('App\User','patient_id');
    }

    public function prescription()
    {
        return $this->hasMany('App\Prescription','consul_id');
    }
}
