@extends('Frontend.mainlayout',['title'=>'Add video'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update Image
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('slider.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('slider.update', $slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" class="form-control" id="info1" aria-describedby="emailHelp" value="{{$slider->title}}" placeholder="" >
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info3">Description</label>
                            <textarea id="info3" class="form-control"  name="description">{{$slider->description}}</textarea>            
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info1">Button Label</label>
                            <input type="text" name="button_label" value="{{$slider->button_label}}" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('button_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Button Link</label>
                            <input type="text" name="button_link" class="form-control" value="{{$slider->button_link}}" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('button_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info6">Featured</label>
                            <select name="featured" class="form-control" id="info6">
                            <option
                                    <?php
                                    if ($slider->featured == 1){
                                    ?>
                                    selected
                                    <?php }?>
                                    value="1">Yes</option>


                                    <option
                                    <?php
                                    if ($slider->featured == 0){
                                    ?>
                                    selected
                                    <?php }?>
                                    value="0">No</option>
                            </select>
                        </div>


                        <div class="form-group">
                            
                            <label for="info8" class="form-label">Banner Image</label>
                            <input class="form-control" name="banner_image" type="file" id="info8" multiple>                   
                            @error('banner_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($slider->banner_image && file_exists(public_path('uploads/banner_image/'.$slider->banner_image)))
                                    <img width="100" style="" src="{{asset('uploads/banner_image/'.$slider->banner_image)}}">
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