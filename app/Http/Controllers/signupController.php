<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB\Statement;

class signupController extends Controller
{
    function login(Request $req)
    {
       $user=User::where(['email'=>$req->username])->first();
       if($user && Hash::check($req->passkey,$user->password))
       {
          $req->session()->put('userSession',$user);
          return redirect('/blog');
       }
       else{
        return redirect('/login')->with('warning', 'username or pasword does not match');
       }
    }

    function registration(Request $req)
    {
        if(strcmp($req->pass,$req->cnfrm_pass)==0)
        {
            $user = new User;
            $user->name=$req->fname;
            $user->email=$req->gmail;
            $user->contact=$req->contact;
            $user->password=Hash::make($req->pass);
            $user->save();
            return redirect('/login');
        }
        else{
            return "Password and Confirm Password does not match";
        }
    }

    function logout()
    {
        Session::forget('userSession');
        return redirect('/login');
    }
}
