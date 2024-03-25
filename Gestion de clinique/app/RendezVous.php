<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rendezvous';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numRDV';

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
        return $this->belongsTo(User::class);
    }
}
