<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\emp_details;

class HomeController extends Controller
{
   
  
    //show all data 
    public function home(){
        $data=emp_details::all();
        return view('home',compact('data'));
    }
 
    //post request 
    public function upload(Request $request){  
        $emp_details = new emp_details;
        $emp_details->name = $request->name;
        $emp_details->email = $request->email;
        $emp_details->position = $request->position;
        $emp_details->number = $request->number;
        $emp_details->save(); 
        return redirect('/home')->with('success', 'Employee details uploaded successfully!');

    }
    
    //delete
    public function delete($id){
        $data=emp_details::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function update_view($id){
        $emp_details=emp_details::find($id);
        return view('update',compact('emp_details'));
    }

    //update data function
    public function update(Request $request,$id){
        $emp_details=emp_details::find($id);
        $emp_details->name=$request->name;
        $emp_details->email=$request->email;
        $emp_details->position=$request->position;
        $emp_details->number=$request->number;        
        $emp_details->save();
        return redirect('/home')->with('success', 'Employee details uploaded successfully!');
        
    }  
   
   
    

}
