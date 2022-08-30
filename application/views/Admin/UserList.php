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
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header text-center" style="background-color:green;padding:20px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Task List</span></h5>
            </div>
           

            <div style="margin:10px;" class="panel-body">
               <a onclick="window.print()" class="print_button btn btn-success waves-effect waves-light pull-right">Print Data</a>
            </div> 
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-bordered" style="padding:15px !important;">
                        <thead>
                            <tr class="bg-primary">
                                <th>Sl</th>
                                <th>User Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Spnosor's Name</th>
                                <th>Phone No</th>
                                <th>Blood Group</th>
                                <th>User Role</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($UserList as $key => $row){?>
                            <tr>
                                <th scope="row"><?php echo $key+1;?></th>
                                <td><?php echo $row->user_name;?></td>
                                <td><?php echo $row->FirstName;?></td>
                                <td><?php echo $row->LastName;?></td>
                                <td><?php echo $row->sponsor_user_name;?></td>
                                <td><?php echo $row->office_phone;?></td>
                                <td><?php echo $row->blood_group;?></td>
                                <td><?php echo $row->user_role;?></td>
                                <td class="">
                                    <a href="<?php echo base_url();?>Admin/AdminController/edit_by_id/<?php echo $row->user_id;?>" class="ti-button ti-button-bg btn btn_list btn-danger">
                                        <span>Edit</span>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>