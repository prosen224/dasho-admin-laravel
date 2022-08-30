<div class="col-sm-12">
    <div class="card" >
         <div class="card-header" align="center" style="color: green;font-weight: bold;font-size: 24px;">
             Genealogy
         </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-12">
                    <?php if(isset($exist_user)){?>
                        <div class="alert alert-info alert-dismissible" style="padding:7px;">
                            <p style="color:red;font-size:18px;text-align:center;"><?php if(isset($exist_user)){echo $exist_user;}?>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; font-size:24px;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12 col-xl-12">
                    <ul class="nav nav-tabs  tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab"
                                href="#Summary" role="tab">Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#ViewBoard" role="tab">View Board</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#SearchDownline" role="tab">Search Downline</a>
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
                                                    <td><?php echo $rank;?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Number of members in Downline</td>
                                                    <td><?php echo $NoOfMembersDownline;?></td>
                                                    
                                                </tr>
                                                <tr class="bg-success">
                                                    <th scope="row">3</th>
                                                    <td>Directly enrolled members</td>
                                                    <td><?php echo $EnrolledMembersDirectly;?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Members enrolled this month</td>
                                                    <td><?php echo $EnrolledThisMonth;?></td>
                                                    
                                                </tr>
                                                <tr class="bg-warning">
                                                    <th scope="row">5</th>
                                                    <td>Members enrolled this week</td>
                                                    <td><?php echo $EnrolledThisWeek;?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Direct members enrolled this month</td>
                                                    <td><?php echo $DirectlyEnrolledThisMonth;?></td>
                                                    
                                                </tr>
                                                
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

                    					<div class="form-group row">
                    												   
                        					<div class="col-sm-6">
                        					<input type="text"
                        					name="c" class="form-control" id="SearchDownlineUserID" value="">
                        					</div> 
                        					<button class="btn-primary" id="SearchDownline">Search</button>
                    				    </div>					   
                            		</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                            		<div class="card-header">
                            			<h5>Enter The Member Name</h5>
                    					<form>
                    												
                    					<div class="form-group row">
                    												   
                        					<div class="col-sm-6">
                        					<input type="text"
                        					class="form-control form-txt-default" placeholder="">
                        					</div> 
                        					<button class="btn-primary">Search</button>
                    				    </div>					   
                    					</form>
                            		</div>
                                    <div class="card-block">
                                        <div class="card-block tree-view">
                                            <div id="basicTree">
                                                <ul>
                                                    <li>Admin
                                                        <ul>
                                                            <li data-jstree='{"opened":true}'>Assets
                                                                <ul>
                                                                    <li data-jstree='{"type":"file"}'>
                                                                        Css</li>
                                                                    <li data-jstree='{"opened":true}'>
                                                                        Plugins
                                                                        <ul>
                                                                            <li
                                                                                data-jstree='{"selected":true,"type":"file"}'>
                                                                                Plugin one</li>
                                                                            <li
                                                                                data-jstree='{"type":"file"}'>
                                                                                Plugin two</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li data-jstree='{"opened":true}'>Email
                                                                Template
                                                                <ul>
                                                                    <li data-jstree='{"type":"file"}'>
                                                                        Email one</li>
                                                                    <li data-jstree='{"type":"file"}'>
                                                                        Email two</li>
                                                                </ul>
                                                            </li>
                                                            <li
                                                                data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>
                                                                Dashboard</li>
                                                            <li
                                                                data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>
                                                                Typography</li>
                                                            <li data-jstree='{"opened":true}'>User
                                                                Interface
                                                                <ul>
                                                                    <li data-jstree='{"type":"file"}'>
                                                                        Buttons</li>
                                                                    <li data-jstree='{"type":"file"}'>
                                                                        Cards</li>
                                                                </ul>
                                                            </li>
                                                            <li
                                                                data-jstree='{"icon":"zmdi zmdi-collection-text"}'>
                                                                Forms</li>
                                                            <li
                                                                data-jstree='{"icon":"zmdi zmdi-view-list"}'>
                                                                Tables</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"type":"file"}'>Frontend</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="card-block" id="downlineblock">-->
                                <!--      <div class="card" >-->
                                        
                                <!--      </div>-->
                                <!--</div>-->
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
    jQuery(document).ready(function()
    {
        $(document).off('click','#SearchDownline');
        $(document).on('click', '#SearchDownline', function()
        {
            //alert('hi..');
             var userid=$('#SearchDownlineUserID').val();
             $.ajax({
                    url: '<?php echo base_url('index.php/Dashboard/DashboardController/SearchDownlineByUserID'); ?>',
                    type: 'POST',
                    dataType: 'html',
                    data:{
                        userid:userid
                    },
                    success: function (data, status)
                    {
                        
                        $('#downlineblock').html(data);
                        //console,log(current_id);
                        //console.log(data.current_stock);
                        //console.log(data.current_id);
                        //var unit_price=data.unit_price;
                        //alert(unit_price);
                    },
                    error: function (xhr, desc, err)
                    {
                    
                        console.log("error");

                    }
                });
                
        });


    });
</script>
