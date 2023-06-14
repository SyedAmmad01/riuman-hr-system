<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function authenticate(Request $request){
        $this->validate($request,[
            'email' => 'Required|email',
            'password' => 'Required'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password],$request->get('remember')))
        {
            return redirect()->route('admin.dashboard');
        }
        else{
            session()->flash('error' ,'Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }
    }

     public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
