<?php 
// print_r("fafafa");die;
// error reporting off

?>

<div class="col-sm-12">
    <div class="card" >
         <div class="card-header" align="center" style="color: green;font-weight: bold;font-size: 24px;">
             Genealogy
         </div>
         <?php echo validation_errors(); ?>
         <?php if($this->session->flashdata('success')){ ?>
         <!-- success message -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success" id="success_msg">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <span id="success_message"><?= $this->session->flashdata('success')?></span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- success message end -->
        <?php } ?>


        <div class="card-block">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <ul class="nav nav-tabs  tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab"
                                href="#Summary" role="tab">Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#ViewBoard" role="tab">View Position</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#SearchDownline" role="tab">Search Downline</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#MembershipCard" role="tab">Membership Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#GraduationCertificate" role="tab">Graduation Certificate</a>
                        </li>
                      
                    </ul>
                    <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="Summary" role="tabpanel">
                            <div class="card">                              
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-inverse">
                                            
                                            <tbody>
                                                <tr class="bg-primary">
                                                    <th scope="row">1</th>
                                                    <td>Rank</td>
                                                    <td><?php echo $Members_rank;?></td>
                                                    
                                                </tr>
                                                
                                                  <tr class="bg-success">
                                                    <th scope="row">2</th>
                                                    <td>Directly Sponsored Members</td>
                                                    <td><?php echo $EnrolledMembersDirectly;?></td>
                                                    
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Number of Members Under His Reference</td>
                                                    <td><?php echo $NoOfMembersUnderhisRefernce;?></td>
                                                    
                                                </tr>
                                                
                                                  <tr>
                                                    <th scope="row">4</th>
                                                    <td>Total Members In Downline </td>
                                                    <td><?php echo $downline_counter;?></td>
                                                    
                                                </tr>
                                                
                                                
                                              
                                              
                                                <!--<tr class="bg-warning">-->
                                                <!--    <th scope="row">5</th>-->
                                                <!--    <td>Members enrolled this week</td>-->
                                                <!--    <td><?php echo $EnrolledThisWeek;?></td>-->
                                                    
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--    <th scope="row">6</th>-->
                                                <!--    <td>Direct members enrolled this month</td>-->
                                                <!--    <td><?php echo $DirectlyEnrolledThisMonth;?></td>-->
                                                    
                                                <!--</tr>-->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>            
                        </div>
                        <div class="tab-pane" id="ViewBoard" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <a target="_blank"style="font-size:18px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;margin-right:-25px;text-decoration:none;background: -webkit-linear-gradient(to right, #FFC371, #FF5F6D);background: linear-gradient(to right, #FFC371, #FF5F6D);" href="<?php echo base_url('ClassRoomView');?>">View Own Board</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <form action="<?php echo base_url('SearchClassroomByUserID');?>" method="post" target="_blank" enctype=multipart/form-data>
                                        <div class="form-group row">
                                            <input type="text" class="form-control form-txt-default" name="user_id" placeholder="Serach By User ID">
                                            <!-- <input type="hidden" class="form-control form-txt-default" name="search_downline" value="1"> -->
                                        </div>
                                        <button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
							<div class="card-block">
                            </div>
                        </div>

                    <div class="tab-pane" id="SearchDownline" role="tabpanel">
                       <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="card">
                            		<div class="card-header">
                            			<h5>Enter The Member Name</h5>
                    					<form action="<?php echo base_url('index.php/Dashboard/DashboardController/SearchDownlineByUserID');?>" method="post" enctype="multipart/form-data" id="searchDownlineform" >
                    					
                                        <input type="hidden" name="myUserName" value="<?php echo $userName;?>">
                                        <input type="hidden" name="sd" value="1">
                    					<div class="form-group row">
                    												   
                        					<div class="col-sm-6"> 
                        					<input type="text" name="user_id" placeholder="Serach By User ID" class="form-control form-txt-default" id="searchDownInput" title="Please don't use your own user id">
                                            <input type="hidden" class="form-control form-txt-default" name="search_downline" value="1">
                        					</div> 
                        					<button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Submit</button>
                    				    </div>					   
                    					</form>
                            		</div>
                                    <div class="card-block">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="MembershipCard" role="tabpanel">
                       <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="card">
                            		<div class="card-header">
                            			<h5>Request Membership Card-here</h5>
                    					<form action="<?php echo base_url('index.php/Dashboard/DashboardController/SearchDownlineByUserID');?>" method="post" enctype=multipart/form-data>
                    												
                    					<div class="form-group row">
                    												   
                        					<div class="col-sm-6">
                        					<input type="text" name="user_id" placeholder="Serach By User ID" class="form-control form-txt-default">
                        					</div> 
                        					<button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Submit</button>
                    				    </div>					   
                    					</form>
                            		</div>
                                    <div class="card-block">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table start -->
                        <table class="table caption-top">
                            <caption>Membership card history</caption>
                            <thead class="table-primary text-light">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Card ID</th>
                                <th scope="col">Submitted Date</th>
                                <th scope="col">Expired Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(count($card_info) > 0){
                                    $i = 1;
                                    foreach($card_info as $k=>$v){
                                    ?>
                                <tr>
                                    <th scope="row"><?= $i;?></th>
                                    <td><?=$v->card_id ?></td>
                                    <td> <strong> <?= date("d-M-Y H:i:s",strtotime($v->created_at))  ?></strong></td>
                                    <td>
                                        <?= ($v->status != 1)? date("d-M-Y",strtotime($v->expire_date)):"";  ?></td>
                                    <td><?php if($v->status == 1){
                                        echo "<span class='text-warning'>Prosessing</span>";
                                    }elseif ($v->status == 2) {
                                        echo "<span class='text-success'>Active</span>";
                                    }else{
                                        echo "<span class='text-danger'>Inactive</span>";
                                    } ?></td>
                                </tr>
                                <?php
                                $i++;    
                            }
                            }else{
                                echo "<tr><td colspan='4'>No data found</td></tr>";
                            } ?>
                            </tbody>
                        </table>
                        <!-- table end -->
                        <style>
                            caption{
                                caption-side: top;
                                font-size: 20px;
                                text-align: center;
                            }
                            
                        </style>
                    </div>
                    
                    
                     <div class="tab-pane" id="GraduationCertificate" role="tabpanel">
                       <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="card">
                            		<div class="card-header">
                            			<h5>Graduation Certificate</h5>
                    					<!--<form action="<?php echo base_url('index.php/Dashboard/DashboardController/SearchDownlineByUserID');?>" method="post" enctype=multipart/form-data>-->
                    												
                    					<!--<div class="form-group row">-->
                    												   
                        	<!--				<div class="col-sm-6">-->
                        	<!--				<input type="text" name="user_id" placeholder="Serach By User ID" class="form-control form-txt-default">-->
                        	<!--				</div> -->
                        	<!--				<button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Submit</button>-->
                    				 <!--   </div>					   -->
                    					<!--</form>-->
                            		</div>
                                    <div class="card-block">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_edit_table.js"></script>
    
<script type="text/javascript" src="<?echo base_url();?>files/assets/pages/j-pro/js/jquery.ui.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  
   var treeData;
   
   $.ajax({
        type: "GET",  
        url: "<?php echo base_url('getItem');?>",
        dataType: "json",       
        success: function(response)  
        {
           initTree(response)
        }   
  });
    
  function initTree(treeData) {
    $('#treeview_json').treeview({data: treeData});
  }
  
  $(document).on("submit","#searchDownlineform",function(){
    let myUsername = $("input[name='myUserName']").val();
    let inputUserName = $("#searchDownInput").val();
    if(inputUserName != '' && myUsername.toLowerCase() == inputUserName.toLowerCase()){
        return true;
    }else{
        alert("You can search only your own downline");
        return false;
        
    }
  })

});
</script>