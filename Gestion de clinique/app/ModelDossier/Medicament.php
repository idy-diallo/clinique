<?php

namespace App\ModelDossier;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicament';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idMed';

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

    public function traitement()
    {
        return $this->belongsTo('App\ModelDossier\Traitement','trait_id');
    }
}
