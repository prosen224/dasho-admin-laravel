@extends('Frontend.mainlayout',['title'=>'Create global'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create global
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('globals')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('globals.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Transparent Text</label>
                            <input type="text" name="transparent_text" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('transparent_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Title Left</label>
                            <input type="text" name="title_left" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title_left')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="info1">Title Right</label>
                            <input type="text" name="title_right" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('title_right')
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
                            <label for="info8" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="info8" multiple>
                            @error('image')
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