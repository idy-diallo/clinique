<?php

namespace App\ModelDossier;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'radio';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numRadio';

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

    public function prescription()
    {
        return $this->belongsTo('App\Prescription','pres_id');
    }
}
