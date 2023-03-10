<?php

namespace App\Http\Controllers\Eleve\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Classe;
use App\Models\Option;

class RegisterEleveController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $classes = Classe::all();
        $options = Option::all();
        return view('eleve.auth.register',compact('classes','options'));
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
        $fileName= time().'.'.$request->file('photo')->getClientOriginalName();
        
        $path=$request->file('photo')->storeAs('uploads', $fileName, 'public');

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            "password"=>Hash::make($request->password),
            'role' => 3 
        ]);
     
        
        Eleve::create([
                'user_id' => $user->id,
                "name" =>$request->name,
                "suname"=>$request->suname,
                 "gender" =>$request->gender,
                 "date_birth" =>$request->date_birth,
                 "classe_id" =>$request->classe_id,
                 "date_joined"=>$request->date_joined,
                 "phone"=>$request->phone,
                 "option_id" =>$request->option_id,
                 "ecole_provenance"=>$request->ecole_provenance,
                 "classe_provenance"=>$request->classe_provenance,
                 "pourcentage" =>$request->pourcentage,
                 "nom_tuteur"=>$request->nom_tuteur,
                 "profession" =>$request->profession, 
                 "tuteur_phone" =>$request->tuteur_phone,
                 "addresse_tuteur"=>$request->addresse_tuteur,
                 "image"=>$fileName
            ]);

            return redirect('admin/home');

        /*

                  
     "name" 
      "suname"
      "gender" 
      "date_birth" 
      "classe_id" 
      "date_joined"
      "phone"
      "password" 
      "option_id" 
      "ecole_provenance"
      "classe_provenance"
      "pourcentage" 
      "nom_tuteur"
      "profession"     
      "tuteur_phone"
      "addresse_tuteu,
        */
    }
}

