<div class="row">
    <div class="col-sm-12">
        <div class="card">
             <div class="card-header text-center" style="background-color:green;padding:15px;margin-bottom:15px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Edit User Info</span></h5>
            </div>
            <div class="card-block">
                <form action="<?php echo base_url('UpdateUser');?>" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="FirstName"
                                id="FirstName" value="<?php echo $UserData['FirstName'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                                id="LastName" name="LastName"
                                value="<?php echo $UserData['LastName'];?>">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone No
                            </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                                id="office_phone" name="office_phone"
                                value="<?php echo $UserData['office_phone'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">User Role
                            </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                                id="user_role" name="user_role"
                                value="<?php echo $UserData['user_role'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-6">
                            <input type="hidden" name="user_id" value="<?php echo $UserData['user_id'];?>" required="required">
                            <button type="submit"
                                class="btn btn-primary m-b-0">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>