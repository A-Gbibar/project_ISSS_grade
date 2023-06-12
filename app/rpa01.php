<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rpa01 extends Model
{
    protected $fillable  = [
        'NatureResponsabilite', 'NomberMandat', 'anneeResponsabilite', 'NDirecteur', 'NChef', 'NCoordonnateur', 'idP', 'TotalRPA01'
    ];
}
