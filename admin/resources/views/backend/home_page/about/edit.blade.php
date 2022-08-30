@extends('Frontend.mainlayout',['title'=>'Update about us'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update about us
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}#!">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('about.update', $item->id )}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Section Name</label>
                            <input type="text" name="section_name" value="{{$item->section_name}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('section_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title')
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
                            <label for="info8" class="form-label">Sign Image</label>
                            <input class="form-control" name="sign_image" type="file" id="info8" multiple>
                            
                            @error('sign_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->sign_image && file_exists(public_path('uploads/about_us/'.$item->sign_image)))
                                    <img width="100" style="" src="{{asset('uploads/about_us/'.$item->sign_image)}}">
                                @endif
                            </div>
                            
                        </div>


                        <div class="form-group">
                            <label for="info8" class="form-label">Banner Image</label>
                            <input class="form-control" name="banner_image" type="file" id="info8" multiple>

                            @error('banner_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->banner_image && file_exists(public_path('uploads/about_us/'.$item->banner_image)))
                                    <img width="100" style="" src="{{asset('uploads/about_us/'.$item->banner_image)}}">
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