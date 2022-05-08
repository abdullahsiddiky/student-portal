<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
class AdminController extends Controller
{
    //
    public function show(){
      return view('admin.AdminHome');
    }
    public function register_admin(){
      return view('admin.AdminRegistration');
    }
    public function store_admin(Request $request){
      //dd($request->name,$request->email,$request->password);
        /*$this->validate(request(),[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required'
        ]);
        */
         $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required'
        ]);
        //dd($validated->name,$validated->email,$validated->password);
        dd($request);
    }
}
