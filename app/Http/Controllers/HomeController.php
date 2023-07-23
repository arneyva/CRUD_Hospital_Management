<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function redirect(){
    if(Auth::id()){
        // userype=0 =>user biasa
        if(Auth::user()->usertype=='0'){
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
        }else{
        // usertype=1 => admin
            return view('admin.home');
        }
    }

    else{
        return redirect()->back();
    }    
        
    }

    // 
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
        }
        
    }

    public function appointment(Request $request){

        $data = new Appointment();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In Progres';
        if (Auth::id()) {
            # code...
            $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('pesan','Sukses Melakukan Appointment !!!');
    }

    public function myappointment(){
        if (Auth::id()) {
            # code...
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }else{
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    
}

