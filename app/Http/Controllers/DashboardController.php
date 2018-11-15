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
        if($request->user()->hasRole([
                'Admin',
                'Maintenance Department', 
                'Irrigation Association',
                'Construction Structures',
                'Billings',
                'Permits',])){
                    return view('dashboard');
                }
        else{
            return redirect('/contact');
        }
    }
}
