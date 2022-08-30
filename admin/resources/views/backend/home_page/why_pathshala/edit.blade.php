@extends('Frontend.mainlayout',['title'=>'Update why pathshala'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update why pathshala
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('why.pathshala.update', $item->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="1">Title</label>
                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="summernote">Description</label>
                            <textarea id="summernote" class="form-control" name="description">{{$item->description}}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>


                        <div class="form-group">
                            <label for="2" class="form-label">Image Left</label>
                            <input class="form-control" name="image" type="file" id="2" multiple>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->image && file_exists(public_path('uploads/why_pathshala/'.$item->image)))
                                    <img width="100" style="" src="{{asset('uploads/why_pathshala/'.$item->image)}}">
                                @endif
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="3" class="form-label">Image Right</label>
                            <input class="form-control" name="image2" type="file" id="3" multiple>
                            @error('image2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->image2 && file_exists(public_path('uploads/why_pathshala/'.$item->image2)))
                                    <img width="100" style="" src="{{asset('uploads/why_pathshala/'.$item->image2)}}">
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