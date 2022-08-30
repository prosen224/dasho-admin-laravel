@extends('Frontend.mainlayout',['title'=>'Update testimonial'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update testimonial
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('testimonial.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('testimonial.update', $testimonial->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Author Name</label>
                            <input type="text" name="name" class="form-control" id="info1" aria-describedby="emailHelp" value="{{$testimonial->name}}" placeholder="" >
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">City</label>
                            <input type="text" name="city" value="{{$testimonial->city}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('city')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info3">Comment</label>
                            <textarea id="info3" class="form-control" name="comment">{{$testimonial->comment}}</textarea>
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
                                @if ($testimonial->profile_image && file_exists(public_path('uploads/testimonial/'.$testimonial->profile_image)))
                                    <img width="100" style="" src="{{asset('uploads/testimonial/'.$testimonial->profile_image)}}">
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