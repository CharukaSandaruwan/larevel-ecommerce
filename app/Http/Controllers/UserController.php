<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //login controller
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
       
            // return $user->password;
            //check password and username match
        if(!$user || !Hash::check($req->password, $user->password)){
            return "usertname or password doesnot match";
        }
        else{
            //username and password put into session for not logout after first login
            $req->session()->put('user',$user);
            return redirect('/');
        }

    } 
    function register(Request $req){
        //return $req->input();
        $user= new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }

}
