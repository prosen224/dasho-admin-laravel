@extends('Frontend.mainlayout',['title'=>'Create voucher'])
@section('content-wrapper')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Create voucher
                </h5>
                <a class="btn btn-sm btn-dark float-right" href="{{ Route('home') }}">Back</a>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <form method="POST" action="{{ Route('voucher.store') }}">
                        @csrf


                        <div class="form-row">

                            <div class="form-group col-md-4 pr-3">
                                <label for="1">Total Voucher</label>
                                <input type="text" id="Total_vocuher" name="total_voucher_count" class="form-control" id="1" aria-describedby="emailHelp">
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4 pr-3">
                                <label for="1">Total Amount</label>
                                <input type="text" id="total_amount" readonly class="form-control" id="1" aria-describedby="emailHelp">
                            </div>
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
        $("#Total_vocuher").keyup(function() {
            $("input[name='total_voucher_count']").each(function (index){
                var qty = $("input[name='total_voucher_count']").eq(index).val();
                var price = "{{env('VOUCHER_RATE_PER')}}";
                
                if (!isNaN(parseInt(qty))) 
                {
                    var output = parseInt(qty) * parseInt(price);
                    $('#total_amount').val(output);
                }
            });
        });
    });

</script>

@endpush