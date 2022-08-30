<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
//use App\Product;
use Validator;
use DB;


class QuestionsController extends Controller
{
    // REST APIs code place here


    public function list($type,$lastQuestionStage){

        try{
            $products = DB::select("SELECT * FROM question WHERE type_quiz = '".$type."' AND difficultylevel=1 AND is_deleted = 0 ORDER BY id asc LIMIT 10 offset ".$lastQuestionStage."");

            return Response::json(['status'=>1,'msg'=>'Success','data' => $products],200);
        }catch(Exception $e){
            return Response::json(['errors' => 'Bad Request'], 400);
        }

    }

    public function listLan($type,$lastQuestionStage,$language){

        try{
            $products = DB::select("SELECT * FROM question WHERE type_quiz = '".$type."' AND language='".$language."' and difficultylevel=1 AND is_deleted = 0 ORDER BY id asc LIMIT 15 offset ".$lastQuestionStage."");

            return Response::json(['status'=>1,'msg'=>'Success','data' => $products],200);
        }catch(Exception $e){
            return Response::json(['errors' => 'Bad Request'], 400);
        }

    }

}
