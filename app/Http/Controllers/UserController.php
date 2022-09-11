<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
 public function view () {
    return view('pages.Registration');
 }

public function create (Request $request ){
    $user= new User();
    $request -> validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        

    ]);
    
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $result=$user->save();

        if($result) {
          
            return view('pages.dashboard');
        }else {
            return view('pages.registration');
        }
    
}




}
