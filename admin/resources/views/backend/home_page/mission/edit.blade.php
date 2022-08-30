@extends('Frontend.mainlayout',['title'=>'Update mission'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update mission
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('mission')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('mission.update', $item->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Title</label>
                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">Sub title</label>
                            <input type="text" name="sub_title" value="{{$item->sub_title}}"  class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('sub_title')
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



                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="text">Icon Text 1</label>
                                <input type="text" class="form-control" value="{{$item->icon_text_1}}" name="icon_text_1" id="text">
                                @error('icon_text_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text2">Icon Text 2</label>
                                <input type="text" class="form-control" value="{{$item->icon_text_2}}" name="icon_text_2" id="text2">
                                @error('icon_text_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text3">Icon Text 3</label>
                                <input type="text" class="form-control" value="{{$item->icon_text_3}}" name="icon_text_3" id="text3">
                                @error('icon_text_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon</label>
                                <input class="form-control" name="icon_1" type="file" id="info8" multiple>
                                @error('icon_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 

                                <div class="mt-2">
                                    <div class="text-info mb-1">Old image</div>
                                    @if ($item->icon_1 && file_exists(public_path('uploads/mission/'.$item->icon_1)))
                                        <img width="45" style="" src="{{asset('uploads/mission/'.$item->icon_1)}}">
                                    @endif
                                </div>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon 2</label>
                                <input class="form-control" name="icon_2" type="file" id="info8" multiple>
                                @error('icon_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 

                                <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->icon_2 && file_exists(public_path('uploads/mission/'.$item->icon_2)))
                                    <img width="45" style="" src="{{asset('uploads/mission/'.$item->icon_2)}}">
                                @endif
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="info8" class="form-label">Icon 3</label>
                                <input class="form-control" name="icon_3" type="file" id="info8" multiple>
                                @error('icon_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror 

                                <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->icon_3 && file_exists(public_path('uploads/mission/'.$item->icon_3)))
                                    <img width="45" style="" src="{{asset('uploads/mission/'.$item->icon_3)}}">
                                @endif
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="info8" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="info8" multiple>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <div class="text-info mb-1">Old image</div>
                                @if ($item->image && file_exists(public_path('uploads/mission/'.$item->image)))
                                    <img width="100" style="" src="{{asset('uploads/mission/'.$item->image)}}">
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