<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ep01 extends Model
{
    protected $fillable = [
       'type','NomberEncadrants','DateRealisation','pageRapport','NoteLicenceB','NoteMaster','idP','TotalEP01'
    ];
}
