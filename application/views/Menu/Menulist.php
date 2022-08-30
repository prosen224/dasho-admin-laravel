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
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Menu List</span></h5>
            </div>

            <div style="margin:10px;" class="panel-body">
              <a href="<?php echo base_url('AddMenu');?>" class="print_button btn btn-primary waves-effect waves-light">Add Menu<span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a>
              <a onclick="window.print()" class="print_button btn btn-success waves-effect waves-light pull-right">Print Data</a>
            </div> 
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-bordered" style="padding:15px !important;">
                        <thead>
                            <tr class="bg-primary">
                                <th>Sl</th>
                                <th>Menu Name</th>
                                <th>Ordering</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row){?>
                            <tr>
                                <th scope="row"><?php echo $row['id'];?></th>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['ordering'];?></td>
                                <td class="">
                                    <a href="<?php echo base_url();?>Menu/MenuController/edit_by_id/<?php echo $row['id'];?>" class="ti-button ti-button-bg btn btn_list btn-info">
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