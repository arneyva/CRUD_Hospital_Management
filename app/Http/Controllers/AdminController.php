<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\MyFirstNotification;
use Illuminate\Http\Request;
use Notification;

class AdminController extends Controller
{
    //
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        
        $doctor = new Doctor();
        // berhubungan dengan upload foto
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        // 
        // nama kolom di database   | name="" di form
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        // 
        $doctor->save();
        return redirect()->back()->with('pesan','Sukses Menambah Data Dokter !!!');
    }

    public function showappointment(){
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }

     public function approved($id){
        $data=appointment::find($id);
        
        $data->status='Approved';
        $data->save(); 
        return redirect()->back();
    }

    public function canceled($id){
        $data=appointment::find($id);
        
        $data->status='Rejected';
        $data->save(); 
        return redirect()->back();
    }

    public function showdoctor(){
        $data=Doctor::all();
        return view('admin.showdoctor',compact('data'));
        
    }

    public function deletedoctor($id){
        $data=Doctor::find($id);

        $data->delete();
        return redirect()->back();
        
    }

    public function updatedoctor($id){
        $data=Doctor::find($id);
        return view('admin.updatedoctor',compact('data'));
        // $data = Doctor::where('id', $id)->first();
        // return view('admin.updatedoctor')->with('data', $data);
        
    }

    public function editdoctor(Request $request, $id){
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        
        // berhubungan dengan upload foto
        // foto yang lama tidak terhapus
        $image = $request->file;

        if ($image) {
            # code...
            $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        
        }
        $doctor->save();
        
        return redirect()->back()->with('pesan','Berhasil Mengupate data Doctor');
    }

    public function emailview($id)
    {

        $data=Appointment::find($id);
        return view('admin.emailview',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data=Appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart

        ];

        Notification::send($data, new MyFirstNotification($details));

        return redirect()->back()->with('pesan','Berhasil Mengirimkan Pesan!!!');
    }

}
