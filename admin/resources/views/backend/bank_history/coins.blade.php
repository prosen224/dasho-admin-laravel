@extends('Frontend.mainlayout',['title'=>'Dashbord'])
@section('content-wrapper')

<div class="card">
    <div class="card-header">
        <h5>Coins bank history</h5>
    </div>


    <form class="" action="" id="sort_orders" method="GET">

        <div class="card-header">
            <div class="row gutters-5">
                <div class="col-md-2 col-5 mb-md-3">
                    <div class="form-group mb-0">
                        <input type="date" class="form-control" id="" value="{{ $from_date }}" name="from_date">
                    </div>
                </div>
                <div class="d-flex align-items-center"> to </div>
                <div class="col-md-2 col-5">
                    <div class="form-group mb-0">
                        <input type="date" class="form-control" id="" value="{{ $to_date }}" name="to_date">
                    </div>
                </div>
                <div class="col-md-3 col-8">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" id="" value="{{ $search }}" name="search" placeholder="Search in table...">
                    </div>
                </div>
                <div class="col-md-2 col-4 pl-0">
                    <div class="form-group mb-0">
                        <input type="hidden" name="submit" value="yes">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
            <div class="row px-3 pt-3">

            
                @foreach($coins as $key => $coin)
                @endforeach
                <code class="text-info">
                        Showing {{$coins->FirstItem()}} to {{$coins->lastItem()}} of {{$coins->total()}} results
                </code>
            


        </div>
        </div>
        
        
    </form>



    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Member Name</th>
                        <th>Coins</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coins as $key => $item)

                    
                        <tr>
                            <td>{{@$coins->firstItem() + $key}}</td>
                            <td>{{@$item->FirstName}} {{@$item->LastName}}</td>
                            <td>{{@$item->coins}}</td>
                            <td>{{@$item->remarks}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
            </table>

            <div class="d-flex justify-content-end mt-5">
                {{ $coins->links() }}
            </div>
            
        </div>
    </div>
</div>


@endsection
