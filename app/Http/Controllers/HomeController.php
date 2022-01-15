<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0' || Auth::user()->usertype==null)
            {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    public function appointment(Request $request){
        $data = new Appointment;
        $data-> name=$request->name;
        $data-> email=$request->email;
        $data-> date=$request->date;
        $data-> phone=$request->phone;
        $data-> message=$request->message;
        $data-> doctor=$request->doctor;
        $data-> status='W trakcie';
        if(Auth::id()){
            $data-> user_id=Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message','Wizyta została umówiona, skontaktujemy się w możliwie najkrótszym czasie');
    }

    public function myappointment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
