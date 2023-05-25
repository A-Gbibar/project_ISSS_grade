<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pp01 extends Model
{
    protected $fillable = [
        'type',
        'isbn',
        'maisonEdition',
        'avoir',
        'titre',
        'auteur',
        'niveu',
        'dateEdition',
        'NDepot',
        'note',
        'idProuduction',
    ];
}
