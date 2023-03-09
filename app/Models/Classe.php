<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;
use App\Models\Eleve;
use App\Models\Course;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['class_name','option_id'];


    public function option(){
        return $this->belongsTo(Option::class);
    }

    public function eleves(){
        return $this->hasMany(Eleve::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
