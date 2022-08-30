@extends('Frontend.mainlayout',['title'=>'Footer menu'])
@section('content-wrapper')


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Footer menu
                </h5>
                <a class="btn btn-dark btn-sm float-right" href="{{route('navigation2.create')}}"><i class="fa-solid fa-plus"></i> &nbsp;Add New</a>
            </div>

            <div class="card-body">

                <div class="dt-responsive table-responsive ">
                    <table class="table table-striped table-bordered nowrap" id="videos_table" style="max-width: 100%">
                        <thead>
                            <tr>
                                <th style="width:50px">#</th>
                                <th>Name</th>
                                <th class="text-center">Order</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" style="width:120px">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($navigations as $key => $navigation)
                            <tr>
                                <td>{{$navigations->firstItem() + $key}}</td>
                                <td>{{$navigation->name}}</td>
                                <td class="text-center">
                                    <span class="badge badge-primary px-2 py-1">{{$navigation->order}}</span>
                                    
                                </td>
                                <td class="text-center">
                                    @if($navigation->status == 1)
                                        <span class="badge badge-success px-2 py-1">Enabled</span>
                                    @else
                                        <span class="badge badge-danger px-2 py-1">Disabled</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-dark" href="{{route('navigation2.edit', encrypt($navigation->id))}}"><i class="fa-solid fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger delete-btn" href="javascript:void(0)" data-href="{{route('navigation2.delete', encrypt($navigation->id))}}"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection