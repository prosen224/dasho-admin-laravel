<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Member;
use App\Models\PointOverview;

class DestributeDailyPoint extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:dailyReward';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function findAndGiveReward($sponsorName, $points,$rate,$child)
    {
        $sponsor = Member::where('user_name', $sponsorName)->first();
        $point = new PointOverview();
        $point->user_id = $sponsor->id;
        $point->point = $points * $rate/100;
        $point->remarks = "Generation points from ".$child;
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

    public function handle()
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
