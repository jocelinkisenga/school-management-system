<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Course;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['option'];

    public function classes(){
        return $this->hasMany(Classe::class);
    }

    public function eleves(){
        return $this->hasMany(Eleve::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
