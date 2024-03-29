<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated()
    {
        /* dd(auth()->user()); */
        if (Auth::check() && \Auth::user()->hasRole('superadmin')) {
            return redirect()->route('backend.dashboard');
        } elseif(Auth::check() && \Auth::user()->hasRole('sme-1')) {
            /* dd(session('url.intended')); */
            return redirect()->route('backend.dashboard');
        } elseif(Auth::check() && auth()->user()->hasRole('sme-2')) {
            /* return redirect()->route('account.talent.profile'); */
            return redirect()->route('backend.dashboard');
        } elseif(Auth::check() && auth()->user()->hasRole('endUser')) {
            /* return redirect()->route('account.talent.profile'); */
            return redirect()->route('home');
        }
        
    }

    public function logout(Request $request) 
    {
        if(Auth::check() && auth()->user()->hasRole('endUser'))
        {
            session()->forget('url.intended');
        }
        Auth::logout();
        return redirect('/login');
    }
}
