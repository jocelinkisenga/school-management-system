<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create(int $courseId){
       $course = Course::findOrFail($courseId);
        return view('course.addLesson',compact('course'));
    }

    public function store(Request $request){

        $fileName= time().'.'.$request->file('fichier')->getClientOriginalName();
        
        $path=$request->file('fichier')->storeAs('uploads/fichiers', $fileName, 'public');

     Lesson::create([
        'course_id' => $request->course_id,
        'title' => $request->title,
        'description' => $request->description,
        'fichier' => $fileName,
        'heure_debut' => $request->heure_debut,
        'heure_fin' => $request->heure_fin,
        'jour_j' => $request->jour_j
     ]);

     return redirect()->route('teacher.course.detail',['id'=>$request->course_id]);
    }
}
