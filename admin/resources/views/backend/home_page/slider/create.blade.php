@extends('Frontend.mainlayout',['title'=>'Add banner'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Add Image
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('slider.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info3">Description</label>
                            <textarea id="info3" class="form-control" name="description"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror         
                        </div>


                        <div class="form-group">
                            <label for="info1">Button Label</label>
                            <input type="text" name="button_label" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('button_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Button Link</label>
                            <input type="text" name="button_link" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('button_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info6">Featured</label>
                            <select name="featured" class="form-control" id="info6">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
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