
    <div class="col-sm-12">
        <div class="card">
             <div class="card-header text-center" style="background-color:green;padding:15px;margin-bottom:15px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Edit Task</span></h5>
            </div>
            <div class="card-block">
                <form action="<?php echo base_url('UpdateTask');?>" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Task Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name"
                                id="name" value="<?php echo $result['name'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Task Description</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                                id="description" name="description"
                                value="<?php echo $result['description'];?>">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ordering
                            </label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control"
                                id="ordering" name="ordering"
                                value="<?php echo $result['ordering'];?>" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-6">
                            <input type="hidden" name="id" value="<?php echo $result['id'];?>" required="required">
                            <button type="submit"
                                class="btn btn-primary m-b-0">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
