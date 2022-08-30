<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $members = Member::orderBy('created_at', 'desc');


        if ($request->has('submit') && $request->submit == 'yes' && $search != null )
        {

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

        return view('backend.member.index', compact('members', 'search'));
    }


    public function edit($user_id){
        $member = Member::where('user_id','=', decrypt($user_id))->first();
        return view('backend.member.edit', compact('member'));
    }



    public function update(Request $request, $user_id){

        $member = Member::where('user_id','=', decrypt($user_id))->first();

        $member->FirstName = $request->FirstName;
        $member->LastName = $request->LastName;
        $member->email = $request->email;
        $member->mobile_no = $request->mobile_no;
        $member->street_address = $request->street_address;
        $member->city = $request->city;
        $member->country = $request->country;
        $member->sponsor_user_name = $request->sponsor_user_name;
        $member->reference_user = $request->reference_user;
        $member->blood_group = $request->blood_group;
        $member->total_donate = $request->total_donate;
        $member->last_donate_date = $request->last_donate_date;
        $member->office_phone = $request->office_phone;
        $member->system_user = $request->system_user;
        $member->postal = $request->postal;


        $member->update();

        return redirect()->route('member.list');

    }
}
