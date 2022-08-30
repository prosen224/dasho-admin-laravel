@extends('Frontend.mainlayout',['title'=>'All pages'])
@section('content-wrapper')


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    All pages
                </h5>
                <a class="btn btn-dark btn-sm float-right" href="{{route('pages.create')}}"><i class="fa-solid fa-plus"></i> &nbsp;Add New</a>
            </div>

            <div class="card-body">

                <div class="dt-responsive table-responsive ">
                    <table class="table table-striped table-bordered nowrap" id="videos_table" style="max-width: 100%">
                        <thead>
                            <tr>
                                <th style="width:50px">ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th class="text-center" style="width:120px">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $key => $page)
                            <tr>
                                <td>{{$pages->firstItem() + $key}}</td>
                                <td>{{$page->title}}</td>
                                <td>
                                    @if($page->status == 1)
                                        <span class="badge badge-success px-2 py-1">Enabled</span>
                                    @else
                                        <span class="badge badge-danger px-2 py-1">Disabled</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-dark" href="{{route('pages.edit', encrypt($page->id))}}"><i class="fa-solid fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger delete-btn" href="javascript:void(0)" data-href="{{route('pages.delete', $page->id)}}"><i class="fa-solid fa-trash-can"></i></a>
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