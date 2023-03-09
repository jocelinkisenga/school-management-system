<?php

namespace App\Http\Controllers\Eleve\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EleveLoginRequest;
use App\Models\Eleve;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginEleveController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('eleve.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $password = Hash::make($request->password);
        $user = Eleve::wherePhone($request->phone)->first();
        
        if ($password = $user->password) {
            session(['phone',$request->phone]);
            return redirect()->route('eleve.profile');
        }



    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
