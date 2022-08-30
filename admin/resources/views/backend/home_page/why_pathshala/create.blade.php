@extends('Frontend.mainlayout',['title'=>'Create why pathshala'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create why pathshala
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('why.pathshala.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="1">Title</label>
                            <input type="text" name="title" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="summernote">Description</label>
                            <textarea id="summernote" class="form-control" name="description"></textarea>
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
                        </div>


                        <div class="form-group">
                            <label for="3" class="form-label">Image Right</label>
                            <input class="form-control" name="image2" type="file" id="3" multiple>
                            @error('image2')
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