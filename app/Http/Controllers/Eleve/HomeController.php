<?php

namespace App\Http\Controllers\Eleve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eleve;

class HomeController extends Controller
{
    public function index() {
        $eleves = Eleve::all();
      
        return view('eleve.eleves',compact('eleves'));
    }

    public function show(int $id){
        $eleve = Eleve::findOrFail($id);

        return view('eleve.eleve-detail',compact('eleve'));
    }
    public function profile()
    {
        return view('eleve.profile');
    }
}
