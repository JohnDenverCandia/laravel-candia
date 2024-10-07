<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\FAcades\DB;

class DeleteRecord extends Controller
{
    public static function delete($id) {
     $deleted = DB::table("users")
     ->where("id", $id)->delete();
     
     $deleted = DB::table("users")
     ->insert([
         "fname" => $fname,
         "Iname" => $Iname,
         "email" => $email
     ]);
     
     if($deleted) {
         return [
             "success"  => true,
             "message"  => "Successfully deleted"
         ];
     }
     else {
         return [
             "success" => false,
             "message" => "Fail to deleted user"
         ];
     
     }
    }
}
