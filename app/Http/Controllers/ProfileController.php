<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {
    public function profile() {
        return view('profile');
    }



    public function update(Request $request) {
        $user = Auth::user();
    
        if (!$user) {
            return redirect('/login')->with('error', '로그인이 필요합니다.');
        }
    
        $validation = $request->validate([
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*+=-])[A-Za-z\d!@#$%^&*+=-]{8,15}$/|confirmed',
        ]);
    
        if (Hash::check($validation['password'], $user->password)) {
            return back()->with('message', '이전 비밀번호는 사용할 수 없습니다.');
        }
    
        $user->password = Hash::make($validation['password']);
        $user->save();
    
        
        return back()->with('success', '비밀번호가 성공적으로 변경되었습니다.'); 
    }
    
    public function birthDate(Request $request) {
        $user = Auth::user();
    
        if (!$user) {
            return redirect('/login')->with('error', '로그인이 필요합니다.');
        }
        
        $validation = $request->validate([
            'birth_date' => 'required|date|',
        ]);
    
      
        $user->birth_date = $validation['birth_date'];
        $user->save();
    
        
        return back()->with('success', '생년월일이 성공적으로 변경되었습니다.'); 
    }

    public function email(Request $request) {
        $user = Auth::user();
    
        if (!$user) {
            return redirect('/login')->with('error', '로그인이 필요합니다.');
        }
        
        $validation = $request->validate([
            'email_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/',
            'email_domain' => 'required|string|in:gmail.com,naver.com,yahoo.com,kakao.com,test.com',
            'email' => 'email|unique:users',
        ]);
    
        $email = $validation['email_name'] . '@' . $validation['email_domain'];
        $user-> email = $email;
        $user->save();
    
        
        return back()->with('success','이메일이 성공적으로 변경되었습니다.'); 
    }
    public function delete() {
        $user = Auth::user();
    
        // 로그인 여부 확인
        if (!$user) {
            return redirect('/login')->with('error', '로그인이 필요합니다.');
        }
        $user->update([
            'status' => 'deleted',  // 여기서 탈퇴 상태를 설정
            
        ]);
        $user->delete();  // 사용자 삭제
        Auth::logout();  // 로그아웃
    
        return redirect('/')->with('success', '회원 탈퇴가 완료되었습니다.');
    }
    
}