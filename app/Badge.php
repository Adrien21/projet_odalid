<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\BadgeRequest;

class Badge extends Model
{
    public $timestamps = false;

    protected $table = 'od_identite';

    protected $fillable = [
        'dateDeNaissance', 'dateDeValidite', 'email', 'prenom', 'groupe', 'nom', 'numeroIdentite', 'numerID', 'sexe', 'type'
    ];
    protected $hidden = [
        'id'
    ];

    public function verifGroupe(BadgeRequest $req){
       /* if($req->type != "") {
            $groupe = $req->id;
        }
        else{
            $groupe = $req->groupe;
        }
        return $groupe;*/
    }

}
