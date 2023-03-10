<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $user = User::wherePhone($request->phone)->first();

        $request->authenticate();

        $request->session()->regenerate();

    

                if (Auth::user()->role == 1) {
                   
                    return redirect(route('admin.index'));
                    
                } else if (Auth::user()->role == 2) {
                    return redirect()->route('profile-teacher');
                } else {
                    return redirect()->route('eleve.profile');
                }


        // if ($user != null) {

        //     $password = Hash::check($request->password, $user->password);

        //     if ($password == true) {

                


        //         $request->session()->regenerate();
        //     }


        // } else {
        //     return redirect()->back();
        // }
        



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