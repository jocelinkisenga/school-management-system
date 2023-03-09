<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;
use App\Models\Classe;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [ 
      "name", 
      "suname",
      "gender", 
      "date_birth", 
      "classe_id", 
      "date_joined",
      "phone",
      "password", 
      "option_id", 
      "ecole_provenance",
      "classe_provenance",
      "pourcentage", 
      "nom_tuteur",
      "profession",     
      "tuteur_phone",
      "addresse_tuteur",
      "image"
      ];

    public  function option(){
      return $this->belongsTo(Option::class);
    }

     public  function classe (){
      return $this->belongsTo(Classe::class);
    }
}
