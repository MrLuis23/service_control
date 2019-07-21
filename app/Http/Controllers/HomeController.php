<?php

namespace service_control\Http\Controllers;

use Illuminate\Http\Request;
use service_control\Service;

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
        $services = Service::get();        
        return view('home')->with('services',$services);
    }
}
