@extends('Frontend.mainlayout',['title'=>'Create about us'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create about us
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}#!">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('about.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Section Name</label>
                            <input type="text" name="section_name" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('section_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title')
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
                            <label for="info8" class="form-label">Sign Image</label>
                            <input class="form-control" name="sign_image" type="file" id="info8" multiple>
                            @error('sign_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info8" class="form-label">Banner Image</label>
                            <input class="form-control" name="banner_image" type="file" id="info8" multiple>
                            @error('banner_image')
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