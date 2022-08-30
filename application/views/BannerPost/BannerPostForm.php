<div class="row">
    <div class="col-sm-12">
        <div class="card">
             <div class="card-header text-center" style="background-color:green;padding:15px;margin-bottom:15px;">
                <h5><span style="color:white;font-weight:bold;font-size:16px;">Create Banner Post</span></h5>
            </div>
            <div class="card-block">
                <form action="<?php echo base_url('SaveBannerPost');?>" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Set Title for The Post</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="post_title"
                                id="post_title" placeholder="Type Title here" required="required">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Task Description</label>
                        <div class="col-sm-6">
                            <textarea id="post_details" style="font-style: italic;font-color:blue;"  name="post_details" rows="4" cols="50">
                               Here you can create any type of post.....
                            </textarea>
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Post Type
                            </label>
                        <div class="col-sm-6">
                          <select name="post_type" id="post_type">
                                <option value="banner">Banner</option>
                                <option value="notice">Notice</option>
                                <option value="welcome_msg">Welcome Message</option>
                                <option value="announcements">Announcements</option>
                              </select>
                                                        
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