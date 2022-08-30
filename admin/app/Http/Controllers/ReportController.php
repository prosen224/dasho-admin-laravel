<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $search = $request->search;
        $members = [];
        $members = Member::orderBy('created_at', 'desc');

        if ($request->has('submit') && $request->submit == 'yes' && (($from_date != null && $to_date != null) || ($search != null))){


            if($from_date != null )
            {
                $members = $members
                ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($from_date)), date('Y-m-d 23:59:59', strtotime($to_date))]);           
            }

            if($search != null)
            {
                $members = $members
                ->where(function ($query) use ($search) {

                    $query->orWhere('FirstName', 'like', '%' . $search . '%' )
                    ->orWhere('LastName', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('mobile_no', 'like', '%' . $search . '%')
                    ->orWhere('street_address', 'like', '%' . $search . '%')
                    ->orWhere('city', 'like', '%' . $search . '%')
                    ->orWhere('country', 'like', '%' . $search . '%')
                    ->orWhere('MembershipNumber', 'like', '%' . $search . '%')
                    ->orWhere('sponsor_user_name', 'like', '%' . $search . '%')
                    ->orWhere('reference_user', 'like', '%' . $search . '%')
                    ->orWhere('user_name', 'like', '%' . $search . '%')
                    ->orWhere('blood_group', 'like', '%' . $search . '%')
                    ->orWhere('total_donate', 'like', '%' . $search . '%')
                    ->orWhere('blood_group', 'like', '%' . $search . '%')
                    ->orWhere('voucher_number', 'like', '%' . $search . '%')
                    ->orWhere('voucher_code', 'like', '%' . $search . '%');

                });
            }
        }
        
        $members = $members->paginate(25);

        return view('backend.report.member_join.index', compact('from_date', 'to_date', 'members', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
