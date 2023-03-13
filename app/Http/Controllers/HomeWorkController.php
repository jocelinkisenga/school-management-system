<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function create(int  $id){
        $course = Course::findOrFail($id);
        return view('homework.addHomework',compact('course'));
    }

    public function store(Request $request){
        $fileName= time().'.'.$request->file('fichier')->getClientOriginalName();
        
        $path=$request->file('fichier')->storeAs('uploads/fichiers', $fileName, 'public');

     Homework::create([
        'course_id' => $request->course_id,
        'title' => $request->title,
        'description' => $request->description,
        'fichier' => $fileName,
     ]);

     return redirect()->route('teacher.course.detail',['id'=>$request->course_id]);
    }
}
