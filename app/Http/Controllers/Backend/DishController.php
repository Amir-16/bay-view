<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dish;
use Auth;

class DishController extends Controller
{
  public function index(){
      //  dd('ok');
        $data['allData']=Dish::orderBy('id','desc')->get();
        return view('backend.dish.view-dish',$data);

  }

  public function add(){
        return view('backend.dish.add-dish');
  }

  public function store(Request $request){

          $data =new Dish();
          $data->title =$request->title;
          $data->content= $request->content;
          $data->date =$request->date;
          $data->price =$request->price;
          if($request->file('image')){
              $file= $request->file('image');
              $fileName=date('YmdHi').$file->getClientOriginalName();
              $file->move(public_path('upload/dish_images'),$fileName);
              $data['image']=$fileName;
            }
          $data->user_id=Auth::user()->id;
          $data->save();
          $notification=array(
                            'message'=>'Dish Added Successfully',
                              'alert-type'=>'success'
                            );
                          return redirect()->route('dishes.view')->with($notification);
  }


    public function edit($id){
      $data['editData'] =Dish::find($id);
      return view('backend.dish.add-dish' ,$data);
    }

    public function update(Request $request,$id){
            //dd('ok');
            $data =Dish::find($id);
            $data->title =$request->title;
            $data->content= $request->content;
            $data->date =$request->date;
            $data->price=$request->price;
            if($request->file('image')){
                $file= $request->file('image');
                @unlink(public_path('upload/dish_images/'.$date->image));
                $fileName=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/dish_images'),$fileName);
                $data['image']=$fileName;
              }
            $data->user_id=Auth::user()->id;
            $data->save();
            $notification=array(
                              'message'=>'Dishes Updated Successfully',
                                'alert-type'=>'success'
                              );
                            return redirect()->route('dishes.view')->with($notification);

    }

    public function delete($id){
          $dish= Dish::find($id);
          $dish->delete();
          $notification=array(
                            'message'=>'Dish deleted Successfully',
                              'alert-type'=>'error'
                            );
                          return redirect()->route('dishes.view')->with($notification);
    }
}
