<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prescription';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idPres';

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

    public function consultation()
    {
        return $this->belongsTo('App\Consultation','consul_id');
    }

    public function traitement()
    {
        return $this->hasMany('App\ModelDossier\Traitement','pres_id');
    }
    public function analyse()
    {
        return $this->hasMany('App\ModelDossier\Analyse','pres_id');
    }
    public function radio()
    {
        return $this->hasMany('App\ModelDossier\Radio','pres_id');
    }
    public function vaccin()
    {
        return $this->hasMany('App\ModelDossier\Vaccin','pres_id');
    }
    
}
