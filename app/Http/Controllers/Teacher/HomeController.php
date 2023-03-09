<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        
        return view("teacher.teachers",compact('teachers'));
    }

    public function profile(){
        return view('teacher.teacher-dashboard');
    }


}
