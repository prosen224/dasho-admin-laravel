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
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Edit User Role</span></h5>
            </div>
            <div class="card-block" style="padding-left:40px;padding-right:40px;">
                <form action="<?php echo base_url('UpdateUserRole');?>" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">User Role Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="name"
                                id="name" required="required" value="<?php echo $user_role_list['name'];?>">
                            <span class="messages"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ordering
                            </label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control"
                                id="ordering" name="ordering" value="<?php echo $user_role_list['ordering'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <h4 class="sub-title">Menu List</h4>
                    <div class="row">
                        <?php foreach($menu_list as $row){?>
                        <div class="col-md-4">
                            <div class="checkbox-fade fade-in-success">
                                <label>
                                    <input type="checkbox" name="items[]" <?php if(isset($user_role_details_id[$row['id']])){echo 'checked';}?> value="<?php echo $row['id']?>">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                                    </span>
                                    <span><?php echo $row['name']?></span>
                                </label>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $user_role_list['id'];?>" required="required">
                    <div class="form-group row" style="padding-top:20px;">
                        <div class="col-sm-10">
                            <button style="font-size:18px;" type="submit" class="btn btn-primary m-b-0">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
