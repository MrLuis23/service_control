<?php

namespace service_control\Http\Controllers;

use Illuminate\Http\Request;
use service_control\Service;
use service_control\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->id_rol == 1){
            $services = Service::get();        
            return view('home')->with('services',$services);
        }elseif(Auth::user()->id_rol == 2){
            $users = User::get();        
            return view('home')->with('users',$users);
        }
    }
}
