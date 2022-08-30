@extends('Frontend.mainlayout',['title'=>'Create video'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create video
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}#!">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('video.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Sub Title</label>
                            <input type="text" name="sub_title" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('sub_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info3">Description</label>
                            <textarea id="summernote" class="form-control" name="description"></textarea>
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
                        </div>


                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection