<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterTeacherController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->username,
            'phone' => $request->phone,
            "password"=>Hash::make($request->password),
            'role' => 2 
        ]);
     
     Teacher::create([   
                'user_id' => $user->id,
                "name"=>$request->name,
                "gender"=>$request->gender, 
              "date_birth"=>$request->date_birth,
              "phone"=>$request->phone,
              "date_joined"=>$request->date_joined,
              "qualification"=>$request->qualification,
              "experience"=>$request->experience,
              "username"=>$request->username,
              "adresse"=>$request->adresse,
              "commune"=>$request->commune,
              "town"=>$request->town
               ]);

        return redirect()->route('all.teachers');
    }


    
}
