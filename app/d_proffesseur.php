<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_proffesseur extends Model
{
    //

    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'departATT',
        'dateRecrut',
        'PPR',
        'grad',
        'dateEffet',
        'TypeAvancement',
    ] ;
}
