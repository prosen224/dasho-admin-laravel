<style>
.table td, .table th {
    padding: .25rem;
}
.table td, .table tr {
    padding: .15rem;
}
.btn {
    padding: 2px 5px;
}
</style>

    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center" style="background-color:green;padding:20px;margin-bottom:15px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Generate a Voucher</span></h5>
            </div>
            <div class="card-block" style="padding-left:40px;padding-right:40px;">
                <form action="<?php echo base_url('GenerateVoucher');?>" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Enter Validity</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="validity"
                                id="name" placeholder="Enter Expected Client Name" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>                   

                    <div class="form-group row" style="padding-top:20px;">
                        <div class="col-sm-10">
                            <button style="font-size:18px;" type="submit" class="btn btn-primary m-b-0">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
