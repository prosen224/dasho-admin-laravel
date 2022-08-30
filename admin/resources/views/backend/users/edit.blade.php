@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')


<div class="card">
    <div class="card-header">
        <h5>Update user</h5>
    </div>
    <div class="card-body">
        <form id="" action="{{route('users.update', encrypt($user->id))}}" method="post">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6 px-3">
                    <div class="form-group mb-2 text-left">
                        <label for="1">First Name</label>
                        <input id="1" type="text" class="form-control " name="first_name" value="{{$user->first_name}}"  title="First Name">
                        <span class="text-danger error_first_name"></span>
                    </div>
                </div>

                <div class="form-group col-md-6 px-3">
                    <div class="form-group mb-2 text-left">
                        <label for="2">Last Name</label>
                        <input id="2" type="text" class="form-control " name="last_name" value="{{$user->last_name}}"  title="Last Name">
                        <span class="text-danger error_last_name"></span>
                    </div>
                </div>

            </div>

            <div class="form-row">

               

                <div class="form-group col-md-6 px-3">
                    <div class="form-group mb-2 text-left">
                        <label for="1">Email</label>
                        <input  type="email" class="form-control" name="email"  value="{{$user->email}}" title="E-mail">
                        <span class="text-danger error_email"></span>
                    </div>
                </div>

                <div class="form-group col-md-6 px-3">
                    <div class="form-group mb-2 text-left">
                        <label for="1">Password</label>
                        <input  id="password" value="" type="password" class="form-control" name="password" autocomplete="current-password" title="Password">
                        <span class="text-danger error_password"></span>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6 px-3">
                    <div class="form-group mb-2 text-left">
                        <label for="1">Phone</label>
                        <input  value="{{$user->phone}}" type="text" class="form-control" name="phone" title="Phone">
                        <span class="text-danger error_phone"></span>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>


@endsection