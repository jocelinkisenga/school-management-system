<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {


        $courses = Course::leftJoin('affectations','course_id','courses.id')->get(['courses.*','affectations.course_id']);
    
       return view('course.courses',compact('courses'));
    }
    public function create(){

        $options = Option::all();
        $classes = Classe::all();
        return view('course.create', compact('options','classes'));
    }

    public function store(Request $request){
           
       Course::create([
            "name"=>$request->name,
            "option_id"=>$request->option_id,
             "class_id"=>$request->class_id
        ]);
        return redirect('admin/home');
    }

    public function edit(int $id){
        $teachers = Teacher::all();
        $course = Course::find($id);
        return view('course.edit-subject', compact('teachers','course'));
    }
}
