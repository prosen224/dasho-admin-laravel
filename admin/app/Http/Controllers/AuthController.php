<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
//use App\Product;
use Validator;
use DB;

class AuthController extends Controller
{
    // REST APIs code place here
    public function login($email,$password){
        try{
            $products = DB::select("SELECT * FROM members WHERE user_name  = '".$email."' AND  password= md5('".$password."')");
            if(count($products)==1)
            {
               return Response::json(['status'=>1,'msg'=>'Success','data' => $products],200);
            }
            else
            {
                return Response::json(['status'=>0,'msg'=>'Failed'], 400);
            }

        }catch(Exception $e){
            return Response::json(['errors' => 'Bad Request'], 400);
        }
    }

}
