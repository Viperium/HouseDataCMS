<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'name'      => $request->get('name'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/successlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    public function successLogin()
    {
        $user = Auth::user();
        return redirect('/')->with('user',$user);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
