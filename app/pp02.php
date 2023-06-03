<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pp02 extends Model
{
    protected $fillable = [
        'idPP02', 
        'TypePolycopies', 
        'dateDiffusion', 
        'AnneeElaboration', 
        'NiveauEtude', 
        'typeTravail', 
        'NomberCollectif', 
        'NCour', 
        'NTD', 
        'NExam', 
        'NTP', 
        'NAuter', 
        'NTotal', 
        'idProuduction'
    ];
}
