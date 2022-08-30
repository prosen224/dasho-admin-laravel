@extends('Frontend.mainlayout',['title'=>'Update General settings'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update General settings
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('home')}}#!">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('settings.general.update', $item->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6 pr-3">
                                <label for="1" class="form-label">Logo</label>
                                <input class="form-control" name="logo" type="file" id="1" multiple>
                                <div class="mt-2">
                                    <div class="text-info mb-1">Old image</div>
                                    @if ($item->logo && file_exists(public_path('uploads/general/'.$item->logo)))
                                        <img width="100" style="" src="{{asset('uploads/general/'.$item->logo)}}">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6 pl-3">
                                <label for="2" class="form-label">Fevicon</label>
                                <input class="form-control" name="favicon" type="file" id="2" multiple>
                                <div class="mt-2">
                                    <div class="text-info mb-1">Old image</div>
                                    @if ($item->favicon && file_exists(public_path('uploads/general/'.$item->favicon)))
                                        <img width="100" style="" src="{{asset('uploads/general/'.$item->favicon)}}">
                                    @endif
                                </div>
                            </div>
                        </div>


                    <div class="form-row">
                        <div class="form-group col-md-6 pr-3">
                            <label for="3">Email</label>
                            <input type="text" name="email" value="{{$item->email}}" class="form-control" id="3" aria-describedby="emailHelp" value="" placeholder="" >
                            
                        </div>

                        <div class="form-group col-md-6 pl-3">
                            <label for="4">Phone</label>
                            <input type="text" name="phone" value="{{$item->phone}}"  class="form-control" id="4" aria-describedby="emailHelp">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="4">3rd column title</label>
                        <input type="text" name="column_title_3rd" value="{{$item->column_title_3rd}}" class="form-control" id="4" aria-describedby="emailHelp">
                        
                    </div>

                    <div class="form-group">
                        <label for="summernote">3rd column description</label>
                        <textarea id="summernote" class="form-control" name="column_richtext_3rd">{{$item->column_richtext_3rd}}</textarea>
                                   
                    </div>

                    <div class="form-group">
                        <label for="4">4th column title</label>
                        <input type="text" name="column_title_4th" value="{{$item->column_title_4th}}"  class="form-control" id="4" aria-describedby="emailHelp">
                        
                    </div>

                    <div class="form-group">
                        <label for="summernote2">4th column description</label>
                        <textarea id="summernote2" class="form-control" name="column_richtext_4th">{{$item->column_richtext_4th}}</textarea>
                                 
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6 pr-3">
                            <label for="3">Facbook link</label>
                            <input type="text" name="facebook" value="{{$item->facebook}}" class="form-control" id="3" aria-describedby="emailHelp" value="" placeholder="" >
                           
                        </div>

                        <div class="form-group col-md-6 pl-3">
                            <label for="4">Instagram Link</label>
                            <input type="text" name="instagram" value="{{$item->instagram}}" class="form-control" id="4" aria-describedby="emailHelp">
           
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 pr-3">
                            <label for="3">Blog Link</label>
                            <input type="text" name="blog" value="{{$item->blog}}" class="form-control" id="3" aria-describedby="emailHelp" value="" placeholder="" >
               
                        </div>

                        <div class="form-group col-md-6 pl-3">
                            <label for="4">Telegram Link</label>
                            <input type="text" name="telegram" value="{{$item->telegram}}" class="form-control" id="4" aria-describedby="emailHelp">
               
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="4">Copyright Text</label>
                        <input type="text" name="copyright" value="{{$item->copyright}}" class="form-control" id="4" aria-describedby="emailHelp">
            
                    </div>


                       


                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection