<?php

namespace App\Http\Controllers\Classe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Classe;

class HomeController extends Controller
{
    public function create(){
        $options = Option::all();
        return view('classes.create',compact('options'));
    }
    public function store (Request $request){
        Classe::create(['class_name'=>$request->class_name,'option_id'=>$request->option_id]);
        return redirect('admin/home');
    }

  
        
    
}
