@extends('Frontend.mainlayout',['title'=>'List of testimonial'])
@section('content-wrapper')


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    List of testimonial
                </h5>
                <a class="btn btn-dark btn-sm float-right" href="{{route('testimonial.create')}}"><i class="fa-solid fa-plus"></i> &nbsp;Add New</a>
            </div>

            <div class="card-body">

                <div class="dt-responsive table-responsive ">
                    <table class="table table-striped table-bordered nowrap" id="videos_table" style="max-width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>City</th>
                                <th class="text-center">Profile Image</th>
                                <th class="text-center" style="width:120px">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $key => $testimonial)
                            <tr>
                                <td>{{$testimonials->firstItem() + $key}}</td>
                                <td>{{$testimonial->name}}</td>
                                <td>{{$testimonial->city}}</td>
                                <td class="text-center">
                                    @if (($testimonial->profile_image && File::exists(public_path('uploads/testimonial/'.$testimonial->profile_image))))
                                        <img width="100" style="margin:auto;display:block" src="{{asset('uploads/testimonial/'.$testimonial->profile_image)}}">
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-dark" href="{{route('testimonial.edit', $testimonial->id)}}"><i class="fa-solid fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger delete-btn" href="javascript:void(0)" data-href="{{route('testimonial.delete', $testimonial->id)}}"><i class="fa-solid fa-trash-can"></i></a>
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