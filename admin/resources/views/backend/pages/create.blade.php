@extends('Frontend.mainlayout',['title'=>'Create page'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create page
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('pages.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('pages.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="1">Title</label>
                            <input type="text" name="title" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="2">Slug</label>
                            <input type="text" name="slug" class="form-control" id="2" aria-describedby="emailHelp">
                        </div>



                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="summernote" class="form-control" name="description"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>

                        <div class="form-group">
                            <label for="5">Status</label>
                            <select name="status" class="form-control" id="5">
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="4" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="4" multiple>
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