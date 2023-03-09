<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;

class HomeController extends Controller
{
    public function index()
    {
        $options = Option::all();
       
        return view('section.departments',compact('options'));
    }
    public function create(){
        return view('section.create');
    }

    public function store(Request $request){
        Option::create(['option'=>$request->option]);
         return redirect('admin/home');
    }
}
