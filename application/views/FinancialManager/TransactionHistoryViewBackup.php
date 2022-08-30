
	<div class="col-sm-12">
	    <!-- Bootstrap tab card start -->
	    <div class="card">
	        <div class="card-header">
	            <h5>Points Bank</h5>
	            <h6>PathShala Points Bank</h6>
	        </div>
	        <div class="card-block">
	            <!-- Row start -->
	            <div class="row">
	                <div class="col-lg-12 col-xl-12">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-tabs  tabs" role="tablist">
	                        <li class="nav-item">
	                            <a class="nav-link active" data-toggle="tab"
	                                href="#home1" role="tab">Received</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" data-toggle="tab"
	                                href="#profile1" role="tab">Transferred</a>
	                        </li>
	                  
	                        <li class="nav-item">
	                            <a class="nav-link" data-toggle="tab"
	                                href="#spent1" role="tab">Spent</a>
	                        </li>
	                     
	                    </ul>
	                    <!-- Tab panes -->
	                    <div class="tab-content tabs card-block">
	                        <div class="tab-pane active" id="home1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Date</th>
	                                                    <th>Amount</th>
	                                                    <th>Remarks</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            <?php foreach ($DetailsPoint as $DataPoint) {
	                                            	$strtotime = strtotime($DataPoint->created_at);
	                                            	$created_at = date('d-M-Y',$strtotime);

	                                             ?>
	                                                <tr>
	                                                    <th scope="row"><?php echo $created_at; ?></th>
	                                                    <td style="color:red;"><?php echo number_format($DataPoint->point,2); ?></td>
	                                                    <td><?php echo $DataPoint->remarks; ?></td>
	                                                    
	                                                </tr>
	                                            <?php } ?>
	                                                    
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-pane" id="profile1" role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Transferred To</th>
	                                                    <th>Amount</th>
	                                                    <th>Date</th>
	                                                    <th>Time</th>
	                                                    <th>Remarks</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            	<?php if(isset($formatted_transfer_data)) {?>
	                                            	<?php foreach ($formatted_transfer_data as $key => $value) { ?>
	                                                <tr>

	                                                    
	                                                    <td><?php print_r($value['receiver_name'][0]->FirstName);?></td>
	                                                    <td><?php echo $value['amount'];?></td>
	                                                    <td><?php echo $value['transfer_date'];?></td>
	                                                    <td><?php echo $value['transfer_time'];?></td>
	                                                    <td><?php echo $value['remarks'];?></td>

	                                                   
	                                                    
	                                                </tr>
	                                              <?php } ?>
	                                              <?php }
	                                              else
	                                              	{ 
	                                              		?>
	                                              	<!-- <tr>
	                                              		No data Avialable
	                                              	</tr> -->
	                                              <?php }?>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-pane" id="messages1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                            
	                                            </thead>
	                                            <tbody>
	                                               No Records to display
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-pane" id="settings1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Date</th>
	                                                    <th>Amount</th>
	                                                    <th>Remarks</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                         <div class="tab-pane" id="spent1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Date</th>
	                                                    <th>Amount</th>
	                                                    <th>Remarks</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th scope="row">30/12/2021</th>
	                                                    <td>45000</td>
	                                                    <td>Habib Ullah</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                         <div class="tab-pane" id="cancellation1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Date</th>
	                                                    <th>Amount</th>
	                                                    <th>Remarks</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th scope="row">31/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Saiful Islam</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
	                                                <tr>
	                                                    <th scope="row">27/12/2021</th>
	                                                    <td>1500</td>
	                                                    <td>Testing Purpose</td>
	                                                    
	                                                </tr>
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
	