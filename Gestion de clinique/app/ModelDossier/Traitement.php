<?php

namespace App\ModelDossier;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'traitements';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numOrd';

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
    public function medicament()
    {
        return $this->hasMany('App\ModelDossier\Medicament','trait_id');
    }
}
