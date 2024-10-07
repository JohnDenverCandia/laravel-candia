<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\FAcades\DB; 



class Updaterecord extends Controller 

{
    public static function update(Request $request){
         
    $updated = DB ::table("users")
        ->where("id", $request['id'])
        ->update([
            "fname" => $request['fname'],
            "Iname" => $request['Iname'],
            "email" => $request['email'],
        ]);

        if($updated){
            return [
                "success" => true,
                "message" => "Successfully updated"
            ];
        }
        else {
            return [
                "success" => true,
                "message" => "Fail to update"
            ];
        }
    }

}
