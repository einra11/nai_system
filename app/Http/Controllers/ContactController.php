<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Barangay;
use App\Role;

class ContactController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->user()->hasRole('Client')){
            $data = array(
                'roles' => Role::all(),
                'barangays' => Barangay::all()
            );
            return view('contact.index')->with($data);
        }
        else{
            return redirect('/dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'cntName' => 'required',
            'cntEmail' => 'required|email',
            'cntPhoneNumber' => 'required|digits:11',
            'cntDepartment' => 'required',
            'cntBarangay' => 'required',
            'cntMessage' => 'required',
        ]);
        

        
        $mesg = new Message;
        $mesg ->name = $request->input('cntName');
        $mesg ->email = $request->input('cntEmail');
        $mesg ->phone_number = $request->input('cntPhoneNumber');
        $mesg ->to_department = $request->input('cntDepartment');
        $mesg ->address = $request->input('cntBarangay');
        $mesg ->read_tf = "N";
        $mesg ->message = $request->input('cntMessage');

        $mesg->save();

        return redirect('/contact')->with('success', 'Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
