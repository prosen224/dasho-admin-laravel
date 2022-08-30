<?php
namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\PointOverview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckCornJobController extends Controller
{
    public function findAndGiveReward($sponsorName, $points,$rate,$child)
    {
        $sponsor = Member::where('user_name', $sponsorName)->first();
        $point = new PointOverview();
        $point->user_id = $sponsor->id;
        $point->point = $points * $rate/100;
        $point->remarks = "Daily Reward from ".$child;
        $point->save();
        if($sponsor){
            $rate = $rate - 1;
            if($rate > 0 ){
                $this->findAndGiveReward($sponsor->sponsor_user_name, $points, $rate, $child);
            }else{
                return;
            }
        }else{
            return;
        }
    }
    
    public function index()
    {
        $getTodaysData = PointOverview::whereDate('created_at', date('Y-m-d'))->get();
        // point by user
        $pointByUser = $getTodaysData->groupBy('user_id')->map(function ($item) {
            return $item->sum('point');
        });
        foreach ($pointByUser as $key => $value) {
            if($key):
                $data = Member::find($key);
                $this->findAndGiveReward($data->sponsor_user_name,$value, 10, $data->user_name);
            endif;
        }
    }
}
