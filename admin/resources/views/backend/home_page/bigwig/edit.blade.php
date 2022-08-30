@extends('Frontend.mainlayout',['title'=>'Update comment'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update comment
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('bigwig.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('bigwig.update', $bigwig->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Name</label>
                            <input type="text" name="name" class="form-control" id="info1" aria-describedby="emailHelp" value="{{$bigwig->name}}" placeholder="" >
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Designation</label>
                            <input type="text" name="designation" value="{{$bigwig->designation}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info3">Comment</label>
                            <textarea id="info3" class="form-control" name="comment">{{$bigwig->comment}}</textarea>
                            @error('comment')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>

                        <div class="form-group">
                            <label for="info8" class="form-label">Profile Image</label>
                            <input class="form-control" name="profile_image" type="file" id="info8" multiple>
                            @error('profile_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($bigwig->profile_image && file_exists(public_path('uploads/bigwig/'.$bigwig->profile_image)))
                                    <img width="100" style="" src="{{asset('uploads/bigwig/'.$bigwig->profile_image)}}">
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