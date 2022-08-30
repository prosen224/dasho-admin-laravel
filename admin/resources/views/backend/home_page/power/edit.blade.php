@extends('Frontend.mainlayout',['title'=>'Create power'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update power
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('power.update', $item->id)}}" enctype="multipart/form-data">
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
                            <label for="1">Button Label</label>
                            <input type="text" name="button_label" value="{{$item->button_label}}" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('button_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="1">Button Link</label>
                            <input type="text" name="button_link" value="{{$item->button_link}}" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('button_link')
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
                                @if ($item->image && file_exists(public_path('uploads/power/'.$item->image)))
                                    <img width="100" style="" src="{{asset('uploads/power/'.$item->image)}}">
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