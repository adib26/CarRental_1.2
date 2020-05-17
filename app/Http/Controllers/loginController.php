<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Admin;
use DB;
class loginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        /*
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);*/
        Auth::guard();



        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );



        if($request->get('email') == "admin@gmail.com" && $request->get('password') == "1234"){
            
            $request->session()->regenerate(); 
                   
            return redirect('AdminHome');
        }

        else if(Auth::attempt($user_data))
        {
            if(Auth::user()->state  == 0){

                $request->session()->regenerate();
                return redirect('successlogin');

            }else{ return back()->with('error', 'you are blocked'); }
        }
        else
        {
            return back()->with('error', 'Email or Password are Wrong');
        }

    }

    function successlogin()
    {
        return view('user/userhome');
    }
    function username(){
        return 'username';
    }

}
