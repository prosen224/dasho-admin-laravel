<style type="text/css">

.btn 
{
    height: 20px !important; 
    border: 0px solid transparent;
    margin-top: 2px; 
    margin-bottom: 2px;
    line-height: 0px;
    padding: 15px !important; 
}

.table td, .table th {
    padding: 0px !important;
    padding-top:2px !important;
    padding-left:3px !important;
    color:black;
}

a {
 text-decoration: none;
 color:black;
 font-weight: bold;
 font-family: cursive;
}

@media print {
  .header-print {
    display: table-header-group;
  }
  
  @page {
    margin-top: -1.5cm;
    margin-bottom: -1cm;
  }
  .print_button
  {
    display: none;
  }
  .custom_card_header_title
  {
    text-shadow: 0px 0px 0px white !important;
    color:black !important;
    border-color:1px solid white !important;
  }
  .custom_card_header
  {
    background-color: white !important;
    border-color:1px solid white !important;
  }
}
</style>
<div class="col-sm-12">
	    <!-- Bootstrap tab card start -->
	    <div class="card">
	    	<div class="card-header">
    			<h5>Search User To Send Message</h5>
				<form action="<?php echo base_url('index.php/Messaging/MessagingController/SearchUser');?>" method="post" enctype=multipart/form-data>
											
				<div class="form-group row">
											   
					<div class="col-sm-6">
					<input type="text" name="user_id" placeholder="Serach User To Send Message" class="form-control form-txt-default">
					</div> 
					<button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Search User</button>
			    </div>					   
				</form>
    		</div>
	        <div class="card-block">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/Messaging/MessagingController/saveMessageNext" method="post" enctype=multipart/form-data>
                        <div class="row">
                            <?php foreach($result as $row){?>
                                <div class="form-group col-md-12">
                                
                                   
                                    <?php echo '<span style="color:blue;">'.'<i>'.$row['time'].'</i>'.' '.' - '.'</span>'.'<span style="color:red;font-size:16px;">'.'<b>'.$row['from_user_name'].'</b>'.'</span>';?></b>:: <?php echo $row['text'];?>
                                    <?php if($row['image_name']){?>
                                    <a href="<?php echo base_url().$row['image_name']; ?>" download="" class="btn btn-danger" target="_blank" style="font-size:12px;color:white;border-radius:22px;padding:0px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:green;">Download File</a>
                                    <?php } ?>
                                    
                                </div>
                            <?php } ?>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <textarea style="border:1px solid #182958;" class="form-control stinput" rows="2" id="text" name="text" placeholder="Type Your Message Here."></textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="name">File Upload <span style="font-size:14px;">(If Any)</span></label>
                                <br/>
                                <input type="file" class="browse_button" data-preview-container="#project_slide" data-preview-width="300" name="image_name">
                            </div>
                            
                            <div class="text-center text-sm-left">
                               <button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:red;" type="submit" id="" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>

                        <input type="hidden" name="route_id" value="<?php echo $route_id;?>">
                        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">


                    </form>
                </div><!-- card-body -->
	        </div>
	    </div>
	    <!-- Bootstrap tab card end -->
	</div>
	