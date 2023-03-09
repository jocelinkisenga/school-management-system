<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id','course_id'];

    public function courses(){
        return $this->hasMany(Course::class,'course_id');
    }

    public function teachers(){
        return $this->hasMany(Affectation::class,'teacher_id');
    }
}
