<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('welcome',compact('students'));
    }

    public function create(){
         return view('layouts.add_new');
     }

     public function stor(request $request){
        $this->validate($request,[
            
            'first_Name'=> 'required',
            'last_Name' => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
            'phone'     => 'required',

        ]);
         
        $Data=[
            'first_Name'           => $request->input('first_Name'),
            'last_Name'            => $request->input('last_Name'),
            'email'                => $request->input('email'),
            'password'             => $request->input('password'),
            'phone'                =>  $request->input('phone'),
            ];
            $request->session()->flash('status', 'Student Successfully added!');

         student::create($Data);   
         return redirect()->route('home');

     }

     public function edit($id){
         $student = student::find($id);
         return view('layouts.edit',compact('student'));
     }

     public function update(request $request,$id){
        $this->validate($request,[
            
            'first_Name'=> 'required',
            'last_Name' => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
            'phone'     => 'required',

        ]);

        // $Data=[
        //     'first_Name'           => $request->input('first_Name'),
        //     'last_Name'            => $request->input('last_Name'),
        //     'email'                => $request->input('email'),
        //     'password'             => $request->input('password'),
        //     'phone'                =>  $request->input('phone'),
        //     ];

         $students= student::find($id);      
         $students->update([
            'first_Name'           => $request->input('first_Name'),
            'last_Name'            => $request->input('last_Name'),
            'email'                => $request->input('email'),
            'password'             => $request->input('password'),
            'phone'                => $request->input('phone'),
         ]);      
         return redirect()->route('home');
         $request->session()->flash('status', 'Student Successfully updated!');

        
     }

     public function delete($id){
       student::find($id)->delete();
       return redirect(route('home'));

    }
}
