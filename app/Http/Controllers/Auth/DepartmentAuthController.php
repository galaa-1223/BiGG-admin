<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequestDepartment;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Department;

use Auth;

class DepartmentAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/department/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function departmentGet()
    {
        return redirect(url('department/login'));
    }

    public function departmentGetLogin()
    {
        return view('department.login.main', [
            'layout' => 'login'
        ]);
    }

    public function DepartmentLogin(LoginRequestDepartment $request)
    {
        
        if (Auth::guard('department')->attempt([
                'email' => $request->email, 
                'password' => $request->password
            ]))
        {
            $user = Auth::guard('department')->user();
            
        } else {
            throw new \Exception('Wrong email or password.');
        }
    }

    public function departmentLogout()
    {
        Auth::guard('department')->logout();   
        return redirect(url('department/login'));
    }
}