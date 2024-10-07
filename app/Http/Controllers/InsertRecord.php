<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\FAcades\DB;
class InsertRecord extends Controller
{
    public static function insert(Request $request) {

        $fname = $request['fname'];
        $Iname = $request['Iname'];
        $email = $request['email'];

       $inserted = DB::table("users")
        ->insert([
            "fname" => $fname,
            "Iname" => $Iname,
            "email" => $email
        ]);
        
        if($inserted) {
            return [
                "success"  => true,
                "message"  => "Successfully registered"
            ];
        }
        else {
            return [
                "success" => false,
                "message" => "Fail to register user"
            ];
        
        }
            
    }
}
