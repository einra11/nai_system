<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use App\Http\Resources\Message as MessageResource;

class ApiMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message = Message::orderBy('created_at','desc')->get();
        return MessageResource::collection($message);
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

        $messageSMS = $request->newreply;
        $isthisSMS = $request->isthisSMS;
        
        if($isthisSMS == 'Y'){
            $result = $this->itexmo("09396249746",$messageSMS,"TR-NIAGE249746_WR6F6");
            if ($result == ""){
            echo "iTexMo: No response from server!!!
            Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
            Please CONTACT US for help. ";	
            }else if ($result == 0){
            echo "Message Sent!";
            }
            else{	
            echo "Error Num ". $result . " was encountered!";
            //
            // dd($request->newitem);
            $message = $request->isMethod('put') ? Message::findOrFail($request->newitem["id"]) : new Message;
            // dd($message);
            $message->id = $request->newitem["id"];
            $message->read_tf = $request->newitem["read_tf"];
            
            if($message->save()){
                return new MessageResource($message);
            }
        }
    }
    else{
        $message = $request->isMethod('put') ? Message::findOrFail($request->newitem["id"]) : new Message;
        // dd($message);
        $message->id = $request->newitem["id"];
        $message->to_department = $request->newitem["to_department"][0];
        $message->read_tf = $request->newitem["read_tf"];
        if($message->save()){
            return new MessageResource($message);
        }
    }
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
         //Get single announcement
         $message = Message::findOrFail($id);
         //Return single announcement as resource
         return new MessageResource($message);
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
        //Get single announcement
        $request = Message::findOrFail($id);
        //Return single announcement as resource
        if($request -> delete()){
           return new MessageResource($request);
        }
    }
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
   public function itexmo($number,$message,$apicode){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);}
    //##########################################################################
                                                
}
