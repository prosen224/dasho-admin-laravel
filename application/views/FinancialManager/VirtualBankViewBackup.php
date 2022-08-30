	<div class="col-sm-12">
	    <!-- Bootstrap tab card start -->
	    <div class="card">
	        <div class="card-header">
	            <h5 align="center">Virtual Bank</h5>
	        </div>
	        <div class="card-block">
	            <!-- Row start -->
	            <div class="row">
	                <div class="col-lg-12 col-xl-12">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-tabs  tabs" role="tablist">
	                        <li class="nav-item">
	                            <a class="nav-link active" data-toggle="tab"
	                                href="#home1" role="tab">Funds Available</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" data-toggle="tab"
	                                href="#profile1" role="tab">Transfer Funds</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" data-toggle="tab"
	                                href="#messages1" role="tab">Request Payout</a>
	                        </li>
	                        
	                    </ul>
	                    <!-- Tab panes -->
	                    <div class="tab-content tabs card-block">
	                        <div class="tab-pane active" id="home1"
	                            role="tabpanel">
	                            <?php if(isset($Total_Available_Funds_Point)){?>
	                             <p class="text-center m-0">Total Points is <?php echo $Total_Available_Funds_Point->total_points;?></p>
	                         <?php }?>
	                         <br>
                 <?php if(isset($Total_Available_Funds_Coins)){?>
                     <p class="text-center m-0">Total Coins is <?php echo $Total_Available_Funds_Coins->total_coins;?></p>
                 <?php }?>
	                         
	                        </div>
	                        <div class="tab-pane" id="profile1" role="tabpanel">
	                        	<?php echo form_open('FundTransferView') ?>
	                             <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Transaction Password </label>
                                        <div class="col-sm-6">
                                            <input type="password" name="tp_pass" id = "tp_pass" class="form-control">
                                        </div>
                                        <div class="col-sm-4">

                                     			<button type="submit" id="TPChecker" class="btn btn-primary">Submit</button>
                                        	
                                        </div>
                                    </div>
                                    <?php echo form_close()?>
	                        </div>
	                        <div class="tab-pane" id="messages1"
	                            role="tabpanel">
	                            <div class="card">

	                                <div class="card-block table-border-style">
	                                   <!--  <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                            
	                                            </thead>
	                                            <tbody> -->
	                                              
	                                               <!-- <div class="tab-pane" id="profile1" role="tabpanel"> -->
	                        	<?php echo form_open('PayoutView') ?>
	                             <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Transaction Password </label>
                                        <div class="col-sm-6">
                                            <input type="password" name="tp_pass" id = "tp_pass" class="form-control">
                                        </div>
                                        <div class="col-sm-4">

                                     			<button type="submit" id="TPChecker" class="btn btn-primary">Submit</button>
                                        	
                                        </div>
                                    </div>
                                    <?php echo form_close()?>
	                        <!-- </div> -->

	                                         <!--    </tbody>
	                                        </table>
	                                    </div> -->
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
	

	