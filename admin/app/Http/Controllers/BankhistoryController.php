<?php

namespace App\Http\Controllers;
use App\Models\PointOverview;
use App\Models\CoinOverview;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class BankhistoryController extends Controller
{

    public function points(Request $request){

        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $search = $request->search;
        $points = [];
        $points = DB::table('points_overview')
        ->join('members', 'points_overview.user_id', '=', 'members.user_id')
        ->select('members.*', 'points_overview.*')
        ->orderBy('points_overview.created_at', 'desc');


        // ->first();

        // dd($points);


        if ($request->has('submit') && $request->submit == 'yes' && (($from_date != null && $to_date != null) || ($search != null)))
        {

            if($from_date != NULL)
            {
                $points = $points
                ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($from_date)), date('Y-m-d 23:59:59', strtotime($to_date))]);
            }

            if($search != NULL)
            {
                $points = $points
                ->where(function ($query) use ($search) {

                    $query->orWhere('points_overview.remarks', 'like', '%' . $search . '%')
                    ->orWhere('points_overview.point', 'like', '%' . $search . '%')
                    ->orWhereRaw('CONCAT(FirstName," ",LastName) like "%'.$search.'%"');
                });
            }

        }

        $points = $points->paginate(25);

        $points->appends($request->all());



        return view('backend.bank_history.points', compact('points', 'from_date', 'to_date', 'search'));

    }

    public function coins(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $search = $request->search;
        $coins = [];
        $coins = DB::table('coins_overview')
        ->join('members', 'coins_overview.user_id', '=', 'members.user_id')
        ->select('members.*', 'coins_overview.*', DB::raw('CONCAT(FirstName," ",LastName) as full_name'))
        ->orderBy('coins_overview.created_at', 'desc');

        if ($request->has('submit') && $request->submit == 'yes' && (($from_date != null && $to_date != null) || ($search != null)))
        {  

            if($from_date != NULL)
            {
                $coins = $coins
                ->whereBetween('coins_overview.created_at', [date('Y-m-d 00:00:00', strtotime($from_date)), date('Y-m-d 23:59:59', strtotime($to_date))]);
            }

            if($search != NULL)
            {
                $coins = $coins
                ->where(function ($query) use ($search) {

                    $query->orWhereRaw('CONCAT(FirstName," ",LastName) like "%'.$search.'%"')
                    ->orWhere('coins_overview.remarks', 'like', '%' . $search . '%')
                    ->orWhere('coins_overview.coins', 'like', '%' . $search . '%');

                });
            }

        }

        $coins = $coins->paginate(25);
        $coins->appends($request->all());
        return view('backend.bank_history.coins', compact('coins', 'from_date', 'to_date', 'search'));

    }

    public function virtual(){
        return view('backend.bank_history.virtual');
    }
}
