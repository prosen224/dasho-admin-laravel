<div class="col-sm-12">
  <!-- Bootstrap tab card start -->
            <div class="card" >
                 <div class="card-header" align="center" style="color: green;font-weight: bold;font-size: 24px;">
                     Genealogy
                 </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <!-- <div class="sub-title" align="center" style="color: green;font-weight: bold;font-size: 24px;">Genealogy</div> -->
                                                                <!-- Nav tabs -->
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
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#ViewDownline" role="tab">View Downline</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="Summary"
                                                                        role="tabpanel">
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
																					<div class="col-sm-6 mobile-inputs">
																						<h4 class="sub-title">Show Board For</h4>
																						<form>
																							
																							<div class="form-group row">
																							   
																								<div class="col-sm-6">
																									<input type="text"
																										class="form-control form-txt-default"
																										placeholder=".form-txt-default">
																								</div>
																							</div>
																						   
																						   
																						</form>
																					</div>
																					<div class="col-sm-6">
																						<h4 class="sub-title" align="right">Board # 422532</h4>
																						<h4 class="sub-title" align="right">parent board # 422532 </h4>
																						<h4 class="sub-title" align="right">Traveller</h4>
																						<h4 class="sub-title" align="right">Spiled</h4>
																					</div>
																				</div>
																				<div class="card-block">
                                                        <h4 class="sub-title">Current Leader</h4>
                                                        <form>
                                                            <div class="form-group row">
                                                                <div class="col" >
                                                                    
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <input type="text" class="form-control form-bg-success"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col">
                                                                    
                                                                </div>
                                                                
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-warning"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-warning"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                
                                                                <div class="col">
                                                                    
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-danger"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-danger"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-danger"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-danger"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
																<div class="col">
                                                                    <input type="text" class="form-control form-bg-info"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                
																				
                                                    
                                                                    </div>
                                                                    <div class="tab-pane" id="SearchDownline"
                                                                        role="tabpanel">
                                                                       <div class="row">
                                            <div class="col-sm-12 col-lg-12">
                                                <!-- Basic Tree card start -->
                                                <div class="card">
														<div class="card-header">
															<h5>Enter The Member Name</h5>
																	<form>
																								
																	<div class="form-group row">
																								   
																	<div class="col-sm-6">
																	<input type="text"
																	class="form-control form-txt-default"
															placeholder="">
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
                                                <!-- Basic Tree card end -->
                                            </div>
                                             </div>
                                    
                                                                    </div>
                                                                    <div class="tab-pane" id="ViewDownline"
                                                                        role="tabpanel">
                                                                       <div class="row">
                                            <div class="col-sm-12 col-lg-12">
                                                <!-- Basic Tree card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>View Downline</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="card-block tree-view">
                                                            <!-- <div id="basicTree2"> -->
                                                                <div class="col-md-8" id="treeview_json">
                                                                </div>

                                                                <!-- <ul>
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
                                                                </ul> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Tree card end -->
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
   
});
</script>