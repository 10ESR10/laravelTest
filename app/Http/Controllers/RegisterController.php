<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $deletedUser = DB::table('users')
            ->where('user_Id', $request->user_Id)
            ->whereNotNull('deleted_at')
            ->first();
    
        if ($deletedUser && Carbon::parse($deletedUser->deleted_at)->addMonth()->isFuture()) {
            return redirect()->back()->withErrors(['user_Id' => '해당 아이디로 탈퇴한지 1달이 지나지 않았습니다.']);
        } elseif ($deletedUser) {
            User::where('user_Id', $request->user_Id)->forceDelete();
        }
    
        $validation = $request->validate([
            'name' => 'required|string',
            'user_Id' => 'required|regex:/^[a-zA-Z]*$/|string|unique:users',
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*+=-])[A-Za-z\d!@#$%^&*+=-]{8,15}$/|confirmed',
            'email_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/',
            'email_domain' => 'required|string|in:gmail.com,naver.com,yahoo.com,kakao.com,test.com',
            'email' => '|email|unique:users',
            'birth_date' => 'required|date|'
        ]);
    
        $email = $validation['email_name'] . '@' . $validation['email_domain'];
    
        User::create([
            'name' => $validation['name'],
            'user_Id' => $validation['user_Id'],
            'password' => Hash::make($validation['password']),
            'email' => $email,
            'birth_date' => $validation['birth_date']
        ]);
    
        return redirect('/');
    }
    


}