<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    protected $fillable = [
        'identifiant', 'password',
    ];
}
