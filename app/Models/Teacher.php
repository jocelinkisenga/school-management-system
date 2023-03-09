<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [   
                "name",
                "gender", 
              "date_birth",
              "phone",
              "date_joined",
              "qualification",
              "experience",
              "username" ,
              "password",
              "adresse",
              "commune" ,
              "town" ];
}
