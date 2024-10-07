<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Userdb extends Model
{
    use HasFactory;

    public function register(Request $request)
    {
        // Validate ฟอร์ม
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'day' => 'required|integer',
            'month' => 'required|string',
            'year' => 'required|integer',
            'sex' => 'required',
            'username' => 'required|email_or_phone',
            'password' => 'required|min:6',
        ]);
    
        // เก็บข้อมูลลงในฐานข้อมูล
        DB::table('userdbs')->insert([
            'username' => $request->username,
            'password' => $request->password,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'sex' => $request->sex,
            'contact' => $request->contact,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('home')->with('success', 'Registration complete!');
    }
    

    
}
