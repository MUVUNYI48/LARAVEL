<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
    return view('login');
    }
    public function register(Request $request)
    {
      $formData=$request->validate([
         'email' => 'required|unique:users',
         'password' => 'required',
    ]);

    $formData['password'] = bcrypt($formData['password']);

    $res=User::create($formData);
    if($res){
      return back()->with('success','registration is successfully');
      // return redirect('/dashboard')->with('success','user created');
    }else{
      return back()->with('fail','registration not done successfully');
    }
}
public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login')->with('success','logout successful');  
}

public function loginUser(Request $request){
  $request->validate([
    'email' => 'required|email',
    'password' => 'required']);  
    
    $user =User::where('email', '=', $request->email)->first();
    if($user){
      if(Hash::check($request->password,$user->password)){
        $request->session()->put('loginId',$user->id);
        return redirect('/popular');
      }else{
        return back()->with('fail','password is not match');
      }
    }else{
      return back()->with('fail','this email is not registered');
    }
}
}