@extends('Frontend.mainlayout',['title'=>'Create footer menu item'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create footer menu item
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('navigation2.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('navigation2.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="1">Name</label>
                            <input type="text" name="name" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="2">Link</label>
                            <input type="text" name="link" class="form-control" id="2" aria-describedby="emailHelp">

                            @error('link')
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
                            <label for="2">Order</label>
                            <input type="phone" name="order" class="form-control" id="2" aria-describedby="emailHelp">

                            @error('order')
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