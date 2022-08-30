<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
//use App\Product;
use Validator;
use DB;


class PointsController extends Controller
{
    // REST APIs code place here


    public function individualPoints($email)
    {

            try
            {
                $products = DB::select("SELECT total_points,last_ques_stage,last_ques_stage_sp,last_ques_stage_gk FROM points where user_id='".$email."'");

                return Response::json(['status'=>1,'msg'=>'Success','data' => $products],200);
            }
            catch(Exception $e)
            {
                return Response::json(['status' => '0','msg' => 'Failed'], 400);
            }
    }


    public function individualPointsUpdate($email,$points,$type)
    {
        try
            {
                $products = DB::select("SELECT total_points,last_ques_stage,last_ques_stage_gk,
                last_ques_stage_sp,(SELECT points FROM sponsors WHERE child_id=$email)sponsors_points FROM points WHERE user_id=$email LIMIT 1");

                $previousTotalPoint= $products[0]->total_points;
                $previouslast_ques_stage= $products[0]->last_ques_stage;
                $previouslast_ques_stage_gk= $products[0]->last_ques_stage_gk;
                $previouslast_ques_stage_sp= $products[0]->last_ques_stage_sp;
                $previoussponsors_points= $products[0]->sponsors_points;

                if($points>=-20)
                {
                    $insert=DB::insert("INSERT INTO points_overview (user_id,point,remarks) values ($email,$points,'Quiz Points')");

                    if($insert)
                    {
                        if($type=='Relegious')
                        {

                            $updatePoints=DB::update("UPDATE points SET
                                total_points=$points+$previousTotalPoint,
                                last_ques_stage=$points/10+$previouslast_ques_stage
                        WHERE user_id=$email");


                            $updatePoints=DB::update("
                        UPDATE sponsors SET
                                points=$points+$previoussponsors_points
                        WHERE child_id=$email");


                        }
                        else if ($type=='Sports')
                        {
                            $updatePoints=DB::update("UPDATE points SET
                                total_points=$points+$previousTotalPoint,
                                last_ques_stage_sp=$points/10+$previouslast_ques_stage_sp
                        WHERE user_id=$email");


                            $updatePoints=DB::update("
                        UPDATE sponsors SET
                                points=$points+$previoussponsors_points
                        WHERE child_id=$email");
                        }
                        else if ($type=='GK')
                        {
                            $updatePoints=DB::update("UPDATE points SET
                                total_points=$points+$previousTotalPoint,
                                last_ques_stage_gk=$points/10+$previouslast_ques_stage_gk
                        WHERE user_id=$email");


                            $updatePoints=DB::update("
                        UPDATE sponsors SET
                                points=$points+$previoussponsors_points
                        WHERE child_id=$email");
                        }


                    }

                }
                else
                {

                }
                //exit();
                $products2 = DB::select("SELECT total_points,last_ques_stage,last_ques_stage_gk,last_ques_stage_sp FROM points where user_id=$email LIMIT 1");
                if($points>0)
                {
                    $this->individualpointsUpdateSponsors($email,$points);
                }

                return Response::json(['status'=>1,'msg'=>'Success','data' => $products2],200);
            }
            catch(Exception $e)
            {
                return Response::json(['status' => '0','msg' => 'Failed'], 400);
            }

    }


    public function individualpointsUpdateSponsors($email,$points)
    {
        try
        {

                $var1=$email;
                $totaldata = 0;
                $names = array();
                $names1 = array();
                for($z=10; $z>$totaldata; $z--) {
                    $arr=DB::select("SELECT DISTINCT n.child_id, n.sponsor_id sponsor_id,ifnull((select total_points from points where user_id=n.sponsor_id),0)points FROM sponsors n where n.child_id=$var1;");
                    $var1=$arr[0]->sponsor_id;
                    $names[] = [$arr[0]->sponsor_id,$arr[0]->points];
                }
               $names = array_map("unserialize", array_unique(array_map("serialize", $names)));
               $i=10;
               foreach($names as $p)
               {
                   $comm=$points*($i/100);
                   $total=ceil(($p[1]+$comm));
                   $query= DB::update("UPDATE points SET total_points=$total where user_id='".$p[0]."'");
                   $queryInsert =DB::insert("INSERT INTO points_overview (user_id,point,remarks) VALUES($p[0],$comm,'Generation Points')");
                   $querySponsors =DB::update("UPDATE sponsors SET points=$total where child_id=$p[0]");
                   $i--;
               }


        }
        catch(Exception $e)
            {
                return Response::json(['status' => '0','msg' => 'Failed'], 400);
            }
    }

}
