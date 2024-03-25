<?php

namespace App\ModelDossier;

use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'antecedent';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numAnt';

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

    public function user()
    {
        return $this->belongsTo('App\User','pat_id');
    }
}
