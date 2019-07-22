<?php

namespace service_control\Http\Controllers;

use Illuminate\Http\Request;
use service_control\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function index()
    {
        $services = Service::get();
        return view('home')->with('services',$services);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'name' => ['required', 'string', 'max:50'],            
            'status' => ['required', 'in:0,1'],
        ]);

        $service = new Service;
        $service->user_id = Auth::id();
        $service->name = $request->input('name');            
        $service->status = (Boolean) $request->input('status');
        $service->save();

        return redirect()->route('home');
    }

    public function edit(Request $request, $id){
        $request->user()->authorizeRoles('user');

        $service = Service::find($id);

        return view('services.edit')->with('service', $service);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->user_id = Auth::user()->id;
        $service->name = $request->input('name');
        $service->status = $request->input('status');
        $service->save();

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return redirect()->route('home');
    }
}
