@extends('Frontend.mainlayout',['title'=>'Update footer menu item'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Update footer menu item
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{route('navigation2.index')}}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{route('navigation2.update', encrypt($navigation->id))}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="1">Name</label>
                            <input type="text" name="name" value="{{$navigation->name}}" class="form-control" id="1" aria-describedby="emailHelp">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="2">Link</label>
                            <input type="text" value="{{$navigation->link}}" name="link" class="form-control" id="2" aria-describedby="emailHelp">

                            @error('link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="5">Status</label>
                            <select name="status" class="form-control" id="5">
                            <option
                                    <?php
                                    if ($navigation->status == 1){
                                    ?>
                                    selected
                                    <?php }?>
                                    value="1">Enabled</option>


                                    <option
                                    <?php
                                    if ($navigation->status == 0){
                                    ?>
                                    selected
                                    <?php }?>
                                    value="0">Disabled</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="2">Order</label>
                            <input type="phone" value="{{$navigation->order}}" name="order" class="form-control" id="2" aria-describedby="emailHelp">

                            @error('order')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection