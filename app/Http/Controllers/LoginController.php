<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validation = $request -> validate([
            'user_Id' => 'required',
            'password' => 'required',
        ]);

        

        if(Auth::attempt($validation)){
            $user = Auth::user();
            Session::put('user_id', $user->user_id);         // 아이디
            Session::put('birth_date', $user->birth_date);       // 생년월일
            Session::put('created_at', $user->created_at);  // 가입일시
            return redirect()->route('dashboard');

        } else{
            return redirect()->back();
        }
        
    }
 
    
    public function logout(){
        Auth::logout();

        return redirect()->route('main');
    }
}