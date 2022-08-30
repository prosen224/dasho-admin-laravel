@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')


<div class="card">
    <div class="card-header">
        <h5>Update Member</h5>
    </div>
    <div class="card-body">

    <form action="{{route('member.update', encrypt($member->user_id) )}}" method="post">
        @csrf   
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="1">First Name</label>
                <input type="text" name="FirstName" class="form-control" id="1" value="{{$member->FirstName}}">
            </div>
            <div class="form-group col-md-6">
                <label for="2">Last Name</label>
                <input type="text" name="LastName" class="form-control" id="2" value="{{$member->LastName}}">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="3">Email</label>
                <input type="text" name="email" class="form-control" id="3" value="{{$member->email}}">
            </div>
            <div class="form-group col-md-6">
                <label for="4">Phone</label>
                <input type="text" name="mobile_no" class="form-control" id="4" value="{{$member->mobile_no}}">
            </div>
        </div>

        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="5">Address</label>
                <input type="text" name="street_address" class="form-control" id="5" value="{{$member->street_address}}">
            </div>
            <div class="form-group col-md-6">
                <label for="17">Postal</label>
                <input type="text" name="postal" class="form-control" id="17" value="{{$member->postal}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="6">City</label>
                <input type="text" name="city" class="form-control" id="6" value="{{$member->city}}">
            </div>
            <div class="form-group col-md-6">
                <label for="7">Country</label>
                <input type="text" name="country" class="form-control" id="7" value="{{$member->country}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="8">User Name</label>
                <input readonly type="text" name="user_name" class="form-control" id="8" value="{{$member->user_name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="12">Membership Number</label>
                <input readonly type="phone" name="MembershipNumber" class="form-control" id="12" value="{{$member->MembershipNumber}}">
            </div>
            
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="9">Sponsor User Name</label>
                <input type="text" name="sponsor_user_name" class="form-control" id="9" value="{{$member->sponsor_user_name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="13">Reference User</label>
                <input type="text" name="reference_user" class="form-control" id="13" value="{{$member->reference_user}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="14">Blood Group</label>
                <input type="text" name="blood_group" class="form-control" id="14" value="{{$member->blood_group}}">
            </div>
            <div class="form-group col-md-6">
                <label for="15">Total Donate</label>
                <input type="phone" name="total_donate" class="form-control" id="15" value="{{$member->total_donate}}">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="16">Last Donate Date</label>
                <input type="date" name="last_donate_date" class="form-control" id="16" value="{{$member->last_donate_date}}">
            </div>

            <div class="form-group col-md-6">
                <label for="16">DOB</label>
                <input type="date" name="dob" class="form-control" id="16" value="{{$member->dob}}">
            </div>

        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="16">Office Phone</label>
                <input type="text" name="office_phone" class="form-control" id="16" value="{{$member->office_phone}}">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>


    </div>
</div>


@endsection