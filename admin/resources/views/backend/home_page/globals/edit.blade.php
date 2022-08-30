@extends('Frontend.mainlayout',['title'=>'Update global'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update global
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('globals')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('globals.update', $item->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Transparent Text</label>
                            <input type="text" name="transparent_text" value="{{$item->transparent_text}}" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('transparent_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Title Left</label>
                            <input type="text" name="title_left" value="{{$item->title_left}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title_left')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info1">Title Right</label>
                            <input type="text" name="title_right" value="{{$item->title_right}}" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title_right')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="info3">Description</label>
                            <textarea id="info3" class="form-control" name="description">{{$item->description}}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>

                        <div class="form-group">
                            <label for="info8" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="info8" multiple>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->image && file_exists(public_path('uploads/globals/'.$item->image)))
                                    <img width="100" style="" src="{{asset('uploads/globals/'.$item->image)}}">
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