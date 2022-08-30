@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')


<div class="card">
    <div class="card-header">
        <h5>Create user</h5>
    </div>
    <div class="card-body">
        <form id="" action="{{route('users.store')}}" method="post">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6 px-2">
                    <div class="form-group mb-2 text-left">
                        <input id="" type="text" class="form-control " name="first_name" value="" placeholder="First Name" title="First Name">
                        <span class="text-danger error_first_name"></span>
                    </div>
                </div>

                <div class="form-group col-md-6 px-2">
                    <div class="form-group mb-2 text-left">
                        <input id="" type="text" class="form-control " name="last_name" value="" placeholder="Last Name" title="Last Name">
                        <span class="text-danger error_last_name"></span>
                    </div>
                </div>

            </div>

            <div class="form-row">

               

                <div class="form-group col-md-6 px-2">
                    <div class="form-group mb-2 text-left">
                        <input placeholder="E-mail" type="email" class="form-control" name="email" title="E-mail">
                        <span class="text-danger error_email"></span>
                    </div>
                </div>

                <div class="form-group col-md-6 px-2">
                    <div class="form-group mb-3 text-left">
                        <input placeholder="Password" id="password" type="password" class="form-control" name="password" autocomplete="current-password" title="Password">
                        <span class="text-danger error_password"></span>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6 px-2">
                        <div class="form-group mb-2 text-left">
                            <input placeholder="Phone" type="text" class="form-control" name="phone" title="Phone">
                            <span class="text-danger error_phone"></span>
                        </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>


@endsection