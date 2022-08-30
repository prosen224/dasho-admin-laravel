
	<div class="col-sm-12">
	    <!-- Bootstrap tab card start -->
	    <div class="card">
	        <div class="card-header">
	            <h5>Coins Bank</h5>
	            <h6>PathShala Coins Bank</h6>
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
	                                                <tr class="table-primary">
	                                                    <th>Date</th>
	                                                    <th>Type</th>
	                                                    <th>Coins</th>
	                                                    <th>Total</th>
	                                                    <th>Status</th>

	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            <?php

												
	                                            $TotalCoins = 0;
												$i = 1;
	                                            foreach ($DetailsCoins as $DataCoin):
	                                            	$strtotime = strtotime($DataCoin->created_at);
	                                            	$created_at = date('d-M-Y',$strtotime);
													// print_r($DataCoin);die;
                                                    if($DataCoin->referer_userid != $userId || $DataCoin->status != '1'):
														if($DataCoin->coins > 0):
	                                             ?>
	                                                <tr>
													
	                                                    <th scope="row"><?php echo $created_at; ?></th>

	                                                    <td>
															<?php
															$pfx = "";
															if($DataCoin->referer_userid){
																$CI =& get_instance();
																$username = $CI->getUserName($DataCoin->referer_userid);
																$username2 = $CI->getUserName($DataCoin->user_id);
															}

															if($DataCoin->remarks == "FT " || $DataCoin->remarks == "FT From-"){
																
																($DataCoin->referer_userid == $userId ) ? $pfx = "Coin Transfer to ". @$username2 : $pfx = "Coin Received from ".@$username;
																// print_r($DataCoin->remarks . $pfx);die;
															}else{
																$pfx = $DataCoin->remarks . " " . @$username;
															}
																echo "<font size ='4' weight = 'bold'>". $pfx . "</font>";
														
	                                                    ?>
														</td>

	                                                    <td style="color:red;"><?php
														if($DataCoin->referer_userid == $userId){
															echo "-";
														}
														echo number_format($DataCoin->coins,2); ?></td>
	                                                    <?php
														if($DataCoin->referer_userid != $userId){
	                                                    	$TotalCoins = $TotalCoins+$DataCoin->coins;
														}else{
															$TotalCoins = $TotalCoins-$DataCoin->coins;
														}
	                                                    ?>
	                                                    <td style="color:red;"><?php echo number_format($TotalCoins,2); ?></td>
	                                                    <td>Processed</td>
	                                                    
	                                                </tr>
	                                            <?php
												endif;	
												endif;	
												endforeach;
											// } 

												?>
	                                                    
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
	