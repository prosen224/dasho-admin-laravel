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
    			<h5>Serach User To Send Message</h5>
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

	            <!-- Row start -->
	            <div class="row">
	                <div class="col-lg-12 col-xl-12">
	                    <!-- Nav tabs -->
	                   
	                    <!-- Tab panes -->
	                    <div class="tab-content tabs card-block">
	                        <div class="tab-pane active" id="home1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr>
		                                                <th>Member Name</th>
		                                                <th>Last Message Time</th>
		                                              
		                                                <th colspan="4" class="text-center print_button">Action</th>
		                                            </tr>
	                                            </thead>
	                                            <tbody>
	                                            
	                                                <?php foreach($result as $row){?>
		                                                <tr>
		                                                    <td>
		                                                      <?php 
		                                                        if($row['to_user']==$from_user)
		                                                        {
		                                                      ?>
		                                                       
		                                                         <p><a target="_blank" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['from_user'];?>/<?php echo $row['route_id'];?>"><?php echo $row['from_user_name'];?></a></p>
		                                                       <?php }else{ ?>
		                                                        
		                                                         <p><a target="_blank" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['to_user'];?>/<?php echo $row['route_id'];?>"><?php echo $row['to_user_name'];?></a></p>

		                                                     <?php } ?>
		                                                    </td>
		                                                    <td>
		                                                       <?php echo $row['time'];?>
		                                                    </td>
		                                                    
		                                                   
		                                                    <?php 
		                                                        if($row['to_user']==$from_user)
		                                                        {

		                                                    ?>
		                                                    <td class="td_height_special print_button text-center">
		                                                      <a style="font-size:12px;color:white;border-radius:22px;padding:0px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:green;" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['from_user'];?>/<?php echo $row['route_id'];?>" class="btn btn-success" target="_blank">View Chat History</a>
		                                                    </td>
		                                                    <?php }else{ ?>
		                                                    <td class="td_height_special print_button text-center">
		                                                      <a style="font-size:12px;color:white;border-radius:22px;padding:0px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:green;" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['to_user'];?>/<?php echo $row['route_id'];?>" class="btn btn-success" target="_blank">View Chat History</a>
		                                                    </td>
		                                                    <?php } ?>

		                                                    <?php 
		                                                        if($row['to_user']==$from_user)
		                                                        {

		                                                    ?>
		                                                    <td class="td_height_special print_button text-center">
		                                                        <a style="font-size:12px;color:white;border-radius:22px;padding:0px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:red;" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['from_user'];?>/<?php echo $row['route_id'];?>" class="btn btn-danger" target="_blank">Send New Message</a>
		                                                    </td>
		                                                    <?php }else{ ?>
		                                                    <td class="td_height_special print_button text-center">
		                                                        <a style="font-size:12px;color:white;border-radius:22px;padding:0px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:red;" href="<?php echo base_url();?>index.php/Messaging/MessagingController/view_chat_history/<?php echo $row['to_user'];?>/<?php echo $row['route_id'];?>" class="btn btn-danger" target="_blank">Send New Message</a>
		                                                    </td>
		                                                    <?php } ?>
		                                              </tr>
		                                            <?php } ?>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	            </div>
	            <!-- Row end -->
	        </div>
	    </div>
	    <!-- Bootstrap tab card end -->
	</div>
	