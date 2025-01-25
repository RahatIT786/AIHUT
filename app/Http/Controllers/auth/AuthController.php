<?php
namespace App\Http\Controllers\auth;

use App\Models\SuperAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function adminLoginForm(){
        return view("admin.auth.admin-login");
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

        $password = trim($request->password);
        $user=SuperAdmin::where('email',$request->email)->first();
        $remember=$request->has('remember');

        if(Auth::guard('admins')->attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email'=> 'The provided credentials do not match',
        ]);
    }
    public function logout(Request $request){
        Auth::guard('admins')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function clearCache(){
        Artisan::call('optimize');
        return "DEAR ADMIN YOUR APPLICATION CACHES ARE CLEARED !";
    }
}