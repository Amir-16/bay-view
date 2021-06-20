<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reservation;

class ReservationController extends Controller
{
    public function reserve(Request $request){
    	//dd('ok');

    	$this->validate($request,[
    		'name' =>'required',
    		'email' =>'required',
    		'date_and_time' => 'required',
    		'phone' =>'required'
    	]);


    	$reserve = new Reservation();
    	$reserve ->name = $request->name;
    	$reserve ->email = $request->email;
    	$reserve ->phone = $request ->phone;
    	$reserve ->date_and_time =$request->date_and_time;
    	$reserve ->person = $request ->person;
        $reserve->status = false;
    	$reserve ->save();
    	$notification=array(
                            'message'=>'Reservation Successfully sent ! Please Cooperate for verification',
                            'alert-type'=>'success'
                             );
                             return redirect()->route('index')->with($notification);
    }
}
