<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public $timestamps = false;

    protected $table = 'od_identite';

    protected $fillable = [
        'dateDeNaissance', 'dateDeValidite', 'email', 'prenom', 'groupe', 'nom', 'numeroIdentite', 'numerID', 'sexe', 'type'
    ];

}
