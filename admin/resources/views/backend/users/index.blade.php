@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')




<div class="card">
    <div class="card-header">
        <h5>List of users</h5>
    </div>
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{$users->firstItem() + $key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td class="text-center"><a href="{{route('users.edit', encrypt($user->id) )}}"><i class="fa-solid fa-pen-to-square fa-lg text-success "></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
            <div>
                {{ $users->links() }}
            </div>
            
            
        </div>
    </div>
</div>





@endsection