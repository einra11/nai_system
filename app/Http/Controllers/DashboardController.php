<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->user());
        if($request->user()->hasRole('Admin')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Maintenance Department')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Irrigation Association')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Construction Structures')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Billings')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Permits')){
            return view('dashboard');
        }
        else if($request->user()->hasRole('Client')){
            return redirect('/contact');
        }
    }
}
