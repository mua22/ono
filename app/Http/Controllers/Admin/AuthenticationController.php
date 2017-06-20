<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Users\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthenticationController extends Controller
{

    public function login(Request $request)
    {

        if (session()->has('type')) {
            session()->flush('type');
        }
        if ($request->isMethod('POST')) {
            $email = $request->input('email');
            $password = $request->input('password');

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            if ($validator->passes()) {
                if (Auth::attempt(['email' => $email, 'password' => $password])) {
                    /*if (!Auth::user()->user_verified) {
                        Auth::logout();
                        session()->flash('status', 'You are not verified. First verify your email!');
                        return redirect('/login');
                    }*/
                    return redirect('/admin');
                } else {
                    session()->flash('status', 'Incorrect Credentials!');
                    return redirect('/admin/login');
                }
            } else {
                session(['type' => 'login']);
                return redirect('/admin/login')
                    ->withErrors($validator->errors())->with('type', 'login');
            }
        }
    }

    public function register(Request $req)
    {

        if (session()->has('type')) {
            session()->flush('type');
        }
        $email = $req->input('email');
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $password = bcrypt($req->input('password'));
        if ($validator->passes()) {
            $user = User::create([
                'email' => $email,
                'password' => $password,
                'name' => $req->name,
            ]);
            Auth::login($user);
            return redirect('/admin');
        } else {

            session(['type' => 'reg']);
            return redirect('/admin/login')->withErrors($validator->errors());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
