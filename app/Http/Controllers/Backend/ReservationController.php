<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Reservation;

class ReservationController extends Controller
{

	public function index(){
        //dd('ok');

		$data['allreservation'] =Reservation::orderBy('id','desc')->get();
		return view('backend.reservation.reservation',$data);
	}
    


    public function editstatus($id){
        $reserve =Reservation::find($id);
        $reserve->status =true;
        $reserve->save();
        $notification=array(
                            'message'=>'Reservation Successfully confirmded & verified',
                            'alert-type'=>'success'
                             );
                             return redirect()->route('reservation.show')->with($notification);
    }
    public function delete($id){

        $reserve =Reservation::find($id);
        $reserve->delete();
        $notification=array(
                            'message'=>'Reservation deleted',
                            'alert-type'=>'error'
                             );
                             return redirect()->route('reservation.show')->with($notification);

    }
}
