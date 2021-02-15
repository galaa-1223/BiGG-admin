<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequestAdmin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;

use Auth;

class AdminAuthController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/admin/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminGet()
    {
        return redirect(url('admin/login'));
    }

    public function adminGetLogin()
    {
        return view('admin.login.main', [
            'layout' => 'login'
        ]);
    }

    public function AdminLogin(LoginRequestAdmin $request)
    {
        
        if (Auth::guard('admin')->attempt([
                'email' => $request->email, 
                'password' => $request->password
            ]))
        {
            $user = Auth::guard('admin')->user();
            
        } else {
            throw new \Exception('Wrong email or password.');
        }
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();   
        return redirect(url('admin/login'));
    }
}