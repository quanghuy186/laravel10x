<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'dang nhap he thong'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            // 'email' => 'email:rfc,dns',
            'password' => 'required',
            'level' => '1'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            return redirect()->route('admin');
        } else {
            return redirect()->back();
        }
        session()->flash('error', 'Email hoặc mật khẩu không đúng');
        session()->flash('success', 'Thanh cong');

        return redirect()->back();
    }
}
