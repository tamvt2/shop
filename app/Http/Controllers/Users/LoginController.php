<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt([
                'name' => $request->input('name'),
                'password' => $request->input('password')
            ])) {
            return redirect()->route('register');
        }
        Session::flash('error', 'Name hoặc Password không chính xác');
        return redirect()->back();
    }
}
