<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Classe;
use App\Models\Fee;

class HomeController extends Controller
{
    public function create(){
        $options = Option::all();
        $classes = Classe::all();
        return view('account.create',compact('options','classes'));
    }

    public function store(Request $request){
        
        Fee::create([
            "name"=>$request->name,
            "option_id"=>$request->option_id,
            "class_id"=>$request->class_id,
            "amount"=>$request->amount,
            "start"=>$request->start,
            "end"=>$request->end
            ]);
    }
}
