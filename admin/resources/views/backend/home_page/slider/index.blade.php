@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    All Image
                </h5>
                <a class="btn btn-dark btn-sm float-right" href="{{route('slider.create')}}"><i class="fa-solid fa-plus"></i> &nbsp;Add New</a>
            </div>

            <div class="card-body">

                <div class="dt-responsive table-responsive ">
                    <table class="table table-striped table-bordered nowrap" id="videos_table" style="max-width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-center">Banner Image</th>
                                <th class="text-center">Feautured</th>
                                <th class="text-center" style="width:120px">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $key => $slider)
                            <tr>
                                <td>{{$sliders->firstItem() + $key}}</td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->description}}</td>
                                <td class="text-center">
                                @if (($slider->banner_image && File::exists(public_path('uploads/banner_image/'.$slider->banner_image))))
                                    <img width="100" style="margin:auto;display:block" src="{{asset('uploads/banner_image/'.$slider->banner_image)}}">
                                    @else
                                    <img width="100" style="margin:auto;display:block" src="{{asset('assets/frontend/img/not_found.png')}}">
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($slider->featured == 1)
                                        <span class="badge badge-success px-2 py-1">Yes</span>
                                    @else
                                        <span class="badge badge-danger px-2 py-1">No</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-dark" href="{{route('slider.edit', $slider->id)}}"><i class="fa-solid fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger delete-btn" href="javascript:void(0)" data-href="{{route('slider.delete', $slider->id)}}"><i class="fa-solid fa-trash-can"></i></a>
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