<div class="row">
    <div class="col-sm-12">
        <div class="card">
             <div class="card-header text-center" style="background-color:green;padding:15px;margin-bottom:15px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Chnage User's Email</span></h5>
            </div>
            <div class="card-block">
                <?php  echo $email_change_success_msg;?>
                <form action="<?php echo base_url('EmailChangeVerify');?>" method="post" enctype=multipart/form-data>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="user_name"
                                id="user_name" placeholder="Type User Name" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Old Email ID</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email_id"
                                id="email_id" placeholder="Type Email ID" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">New Email ID</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="new_email_id"
                                id="new_email_id" placeholder="Type New Email ID" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>

                   
                  
                    <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-6">
                            <button type="submit"
                                class="btn btn-primary m-b-0">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>