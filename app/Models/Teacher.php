<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [   
              'user_id',
                "name",
                "gender", 
              "date_birth",
              "phone",
              "date_joined",
              "qualification",
              "experience",
              "username" ,
              "adresse",
              "commune" ,
              "town" ];



    public function user(){
      return $this->belongsTo(User::class);
    }

    public function courses(){
      return $this->hasManyThrough(Course::class,Affectation::class,'course_id');
    }
    public function affectations(){
      return $this->hasMany(Affectation::class);
    }
}
