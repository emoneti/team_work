<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  function student()
  
  {
    $data= student::all();
    return view('student',compact('data'));
  }

  function form()
  {

    return view('form');
  }

  function store( request $request)
  {
      // dd($request->all());
        
      student::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'address'=>$request->address,


      ]);

        return redirect(url('/home'));
  }

  function edit($id)
  {
    // dd($id);
    $info=student::find($id);
    
     return view('edit',compact('info'));
  }
  function update(Request $request,$id)
  {
     $data= student::find($id);
      // dd($request);
      $data->name=$request->name;
      $data->email=$request->email;
      $data->address=$request->address;
      $data->save();
      // dd($request);
      return redirect('home');
      
    

  }
  function delete($id)
  {
    // dd($id);
     $del=student::find($id);
     $del->delete();
     return redirect('home');

  }
}
