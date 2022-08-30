@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')

<div class="card">
    <div class="card-header">
        <h5>Date wise member report</h5>
    </div>


    <form class="" action="" id="" method="GET">

        <div class="card-header">
            <div class="row gutters-5">
                <div class="col-md-2 col-5 mb-md-3">
                    <div class="form-group mb-0">
                        <input type="date" class="form-control" id="" value="{{ $from_date }}" name="from_date">
                    </div>
                </div>
                <div class="d-flex align-items-center"> to </div>
                <div class="col-md-2 col-5">
                    <div class="form-group mb-0">
                        <input type="date" class="form-control" id="" value="{{ $to_date }}" name="to_date">
                    </div>
                </div>
                <div class="col-md-3 col-8">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" id="" value="{{ $search }}" name="search" placeholder="Search in table...">
                    </div>
                </div>
                <div class="col-md-2 col-4 pl-0">
                    <div class="form-group mb-0">
                        <input type="hidden" name="submit" value="yes">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
            <div class="row px-3 pt-3">

            @foreach($members as $key => $member)
            @endforeach
            <code class="text-info">
                    Showing {{$members->FirstItem()}} to {{$members->lastItem()}} of {{$members->total()}} results
            </code>



        </div>
        </div>
        
        
    </form>



    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Member Info</th>
                        <th>Membership Number</th>
                        <th>Reference User</th>
                        <th>Blood Group</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $key => $member)
                        <tr>
                            <td>{{$members->firstItem() + $key}}</td>
                            <td><span  class="font-weight-bold">{{$member->FirstName}} {{$member->LastName}}</span><br>
                            {{$member->email}}<br>
                            {{$member->mobile_no}}<br>
                            {{$member->street_address}}
                            </td>
                            <td>{{$member->MembershipNumber}}</td>
                            <td>{{$member->reference_user}}</td>
                            <td>{{$member->blood_group}}</td>
                            <td>{{$member->country}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
            </table>

            <div class="d-flex justify-content-end mt-3">
                {{ $members->links() }}
            </div>
            
        </div>
    </div>
</div>


@endsection
