<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(){
        return view("register");
    }
    public function signup(Request $request){
        $request->validate([
            "username"=>"required",
            "email"=>"required",
            "contact"=>"required",
            "image"=>"required",
        ]);
       $imagename=time().".".$request->image->extension();
        //  dd($imagename);
       $request->image->move(public_path("/uploads"),$imagename);

       $data=new student();
       $data->username=$request->username;
       $data->email=$request->email;
       $data->contact=$request->contact;
       $data->image=$imagename;

       $data->save();
       return back();
     
        return view("register");
    }

public function getstudents(){
    return view("student",["student"=>student::get()]);
}
public function deletestudent($id){
    student::destroy($id);
    return back()->withsuccess("Delete");
}
public function editStudent($id){
return view("editstudent",["student"=>student::find($id)]);
    return back()->withsuccess("Delete");
}

public function update(Request $request,$id){
    $request->validate([
        "username"=>"required",
        "email"=>"required",
        "contact"=>"required",
        "image"=>"required",
    ]);
   $imagename=time().".".$request->image->extension();
    //  dd($imagename);
   $request->image->move(public_path("/uploads"),$imagename);

   $data=student::find($id);
   $data->username=$request->username;
   $data->email=$request->email;
   $data->contact=$request->contact;
   $data->image=$imagename;

   $data->save();
   return back()->withsuccess("UDATED!.....");
 
    return view("student");
}


}
