<?php

namespace App\Http\Controllers;

use App\Models\Userdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuppeteerController extends Controller
{
    //
    function Login(Request $request ){
        $username = $request->input("username");
        $password = $request->password;
        $output = shell_exec("node " . base_path('puppeteer.js') . " $username $password");
        if($output == "Login Success\n"){
            $user = Userdb::where("username",$username)->first();
            if($user){
                redirect()->back()->with(["message" => "Login failed. Please try again"]);
            }else{
                $newUser = new Userdb;
                $newUser->username = $username;
                $newUser->password = $password;
                $newUser->save();
            }           
        }
        
        return redirect()->back()->with(["message"=>"Login failed. Please try again"]);
    }

    function Register(Request $request){
        $username = $request->username;
        $password = $request->password;
        $fname = $request->fname;
        $lname = $request->lname;
        $birthday = $request->birthday;
        $birthmonth = $request->birthmonth;
        $birthyear = $request->birthyear;
        $sex  =$request->sex;

        $output = shell_exec("node " . base_path('puppeteer_register.js') . " $username $password $fname $lname $birthday $birthmonth $birthyear $sex");
        if($output == "Registration Success\n" || "Checkpoint page detected.\n"){
            $user = Userdb::where("username",$username)->first();
            if($user){
                return redirect()->back()->with(["message" => "Email or phone is already taken."]);
            }

            $newUser = new Userdb;
            $newUser->username  = $username;
            $newUser->password = $password;
            $newUser->fname = $fname;
            $newUser->lname = $lname;
            $newUser->birthday = $birthday;
            $newUser->birthmonth = $birthmonth;
            $newUser->birthyear = $birthyear;
            $newUser->sex = $sex;
            $newUser->save();
        }

        return redirect()->route("login");
    }
}
