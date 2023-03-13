<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Homework;
use App\Models\Lesson;
use App\Models\Teacher;
use Auth;
use DB;
use Illuminate\Http\Request;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
 
    public int $teacherId;
    
    public function index(){
        $teachers = Teacher::all();
        
        return view("teacher.teachers",compact('teachers'));
    }

    public function profile(){
        return view('teacher.teacher-dashboard');
    }

    public function mycourses(){
        $this->teacherId = Auth::user()->teacher->id;
        
         $courses = DB::select("SELECT courses.*,classes.class_name, options.option
                                 FROM courses,classes, affectations, options  
                                 WHERE affectations.course_id = courses.id 
                                 AND affectations.teacher_id = 2 
                                 AND options.id = courses.option_id 
                                 AND classes.id = courses.class_id");



        return view('teacher.mycourses.courses',compact('courses'));
    }

    public function myclasses(){
        return view('teacher.mycourses.classes');
    }

    public function courseDetail(int $courseId){
        $course = Course::findOrFail($courseId);
        $lessons = Lesson::latest()->whereCourseId($courseId)->get();
        $homeworks = Homework::latest()->whereCourseId($courseId)->get();
        return view('course.TeacherCourseDetail',compact('course','lessons','homeworks'));
    }

}
