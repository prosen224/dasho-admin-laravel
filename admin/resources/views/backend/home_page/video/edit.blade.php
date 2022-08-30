@extends('Frontend.mainlayout',['title'=>'Update video'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update video
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}#!">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('video.update', $item->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" value="{{$item->title}}"  class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Sub Title</label>
                            <input type="text" name="sub_title" value="{{$item->sub_title}}"  class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('sub_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info3">Description</label>
                            <textarea id="summernote" class="form-control" name="description">{{$item->description}}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>


                        <div class="form-group">
                            <label for="info8" class="form-label">Video</label>
                            <input class="form-control" name="video" type="file" id="info8" multiple>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div style="width:150px" class="mt-3">


                            <div class="text-info mb-1">Old video</div>
                                @if ($item->video && file_exists(public_path('uploads/video/'.$item->video)))
                                    <video class="embed-responsive" autoplay="" muted="" playsinline="" loop="" src="{{asset('uploads/video/'.$item->video)}}"></video>
                                @endif

                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection