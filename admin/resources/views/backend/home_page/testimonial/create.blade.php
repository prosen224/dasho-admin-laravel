@extends('Frontend.mainlayout',['title'=>'Add testimonial'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Add testimonial
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('testimonial.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="info1">Author Name</label>
                            <input type="text" name="name" class="form-control" id="info1" aria-describedby="emailHelp" value="" placeholder="" >
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info1">City</label>
                            <input type="text" name="city" class="form-control" id="info1" aria-describedby="emailHelp">
                            @error('city')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info3">Comment</label>
                            <textarea class="form-control" name="comment"></textarea>
                            @error('comment')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror            
                        </div>

                        <div class="form-group">
                            <label for="info8" class="form-label">Profile Image</label>
                            <input class="form-control" name="profile_image" type="file" id="info8" multiple>
                            @error('profile_image')
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

@push('scripts')
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});

</script>

@endpush