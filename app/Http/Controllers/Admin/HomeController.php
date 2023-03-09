<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Option;
use App\Models\Classe;
use App\Models\Teacher;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){

        $classe = Classe::count();
        $eleve = Eleve::count();
        $teacher = Teacher::count();
        $option = Option::count();
        

        return view('main.index',compact('classe','eleve','teacher','option'));
    }
}
