<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;


class Course extends Model
{
    use HasFactory;
    protected $fillable = ["name","option_id", "class_id"];

    public function option() {
            return $this->belongsTo(Option::class);
    }
    public function classe() {
        return $this->belongsTo(Classe::class,'class_id');
}



public function affectations (){
        return $this->hasMany(Affectation::class,'course_id');
}

}
