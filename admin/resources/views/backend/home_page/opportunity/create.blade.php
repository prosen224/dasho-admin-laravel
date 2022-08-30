@extends('Frontend.mainlayout',['title'=>'Create opportunity'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create opportunity
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('opportunity')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('opportunity.create')}}" enctype="multipart/form-data">
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
                            <label for="2">Button Label</label>
                            <input type="text" name="button_label" class="form-control" id="2" aria-describedby="emailHelp">
                            @error('button_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="4">Button Link</label>
                            <input type="text" name="button_link" class="form-control" id="4" aria-describedby="emailHelp">
                            @error('button_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="text">Icon Text 1</label>
                                <input type="text" class="form-control" name="icon_text_1" id="text">
                                @error('icon_text_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text2">Icon Text 2</label>
                                <input type="text" class="form-control" name="icon_text_2" id="text2">
                                @error('icon_text_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text3">Icon Text 3</label>
                                <input type="text" class="form-control" name="icon_text_3" id="text3">
                                @error('icon_text_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon 1</label>
                                <input class="form-control" name="icon_1" type="file" id="info8" multiple>
                                @error('icon_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon 2</label>
                                <input class="form-control" name="icon_2" type="file" id="info8" multiple>
                                @error('icon_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon 3</label>
                                <input class="form-control" name="icon_3" type="file" id="info8" multiple>
                                @error('icon_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
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