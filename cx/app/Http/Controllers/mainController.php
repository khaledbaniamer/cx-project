<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{
    public function login()
    {
        return view('login');
    }



    public function register()
    {
        return view('register');
    }


    public function logincheckuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:200|min:5',
            'password' => 'required'
        ]);

        $checkuser = User::where('email', '=', $request->input('email'))->first();

        if (!$checkuser) {
            return back()->with('fail', 'email is not regester yet');
        } else {
            if (Hash::check($request->password, $checkuser->password)) {
                $request->session()->put('userid', $checkuser->id);
                $request->session()->put('usermail', $checkuser->email);
                $request->session()->put('username', $checkuser->name);
                return redirect('/dashboard');
            } else {
                return back()->with('fail', 'email or password are wrong!');
            }
        }
    }






    public function checkregister(Request $request)
    {
        $request->validate([
            'name' => 'required |max:100|min:3',
            'email' => 'required|unique:users,email|email|max:200|min:5',
            'password' => 'required |min:3|max:200',
            'confirm_password' => 'required|same:password|min:3|max:200'
        ]);

        $add = User::insert([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))

        ]);

        if ($add) {
            $checkuser = User::where('email', '=', $request->input('email'))->first();
            $request->session()->put('userid', $checkuser->id);
            $request->session()->put('usermail', $request->input('email'));
            $request->session()->put('username', $request->input('name'));
            return  redirect('/dashboard');
        } else {
            return back()->with('fail', 'something wrong! please try later');
        }
    }




    public function logout()
    {
        if (session()->has('username')) {
            session()->pull('userid');
            session()->pull('username');
            session()->pull('usermail');
            return redirect('/');
        }
    }
}
