<?php
get_instance()->load->helper('common_helper');

?>

<div class="col-sm-12">
	<!-- Bootstrap tab card start -->
	<div class="card">
		<div class="card-header">
			<h5 align="center">Virtual Bank</h5>
			<div class="row">

				<div class="col-md-6 offest-md-3">
					<?php echo $this->session->flashdata('error_msg'); ?>
				</div>
			</div>
		</div>
		<div class="card-block">
			<!-- Row start -->
			<div class="row">
				<div class="col-lg-12 col-xl-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs  tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Available Coins</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#recieved" role="tab">Receieved</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#transferred" role="tab">Transferred</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#CoinTransfer" role="tab">Transfer Coins</a>
						</li>
						<!--<li class="nav-item">-->
						<!--    <a class="nav-link" data-toggle="tab"-->
						<!--        href="#messages1" role="tab">Request Payout</a>-->
						<!--</li>-->

					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabs card-block">

						<div class="tab-pane active" id="home1" role="tabpanel">
							<p class="text-center m-0">
								Total Coins is <?= $availableCoin ?>
							</p>
						</div>

						<?php /* 
	                         <!--   <?php if(isset($Total_Available_Funds_Point)){?>-->
	                         <!--    <p class="text-center m-0">Total Available is <?php echo $Total_Available_Funds_Point->total_points;?></p>-->
	                         <!--<?php }?>-->
	                         <!--<br>-->
							<?php
								// $TotalCoins = 0;
								// foreach ($DetailsCoins as $DataCoin) 
								// {   
								// 	$TotalCoins=$TotalCoins+$DataCoin->coins;
								// } 
							?>
	                         */ ?>

						<div class="tab-pane" id="recieved" role="tabpanel">
							<div class="" id="">
								<div class="card">
									<div class="card-block table-border-style">
										<div class="table-responsive">
											<table class="table table-styling">
												<thead>
													<tr class="table-primary">
														<th>SL</th>
														<th>Received From</th>
														<th>Coin</th>
														<th>Date</th>
														<th>Remarks</th>
													</tr>
												</thead>
												<tbody>
													<?php


													$TotalCoins = 0;
													if (isset($ReceivedCoinDetails)) {
														foreach ($ReceivedCoinDetails as $index => $data) {

													?>
															<tr>
																<th><?php echo ++$index ?></th>
																<th scope="row"><?= $data->user_name ?></th>
																<td style="color:red;"><?php echo number_format($data->point_amount, 2); ?></td>
																<td><?php echo $data->transfer_time; ?></td>
																<td><?= ($data->receiver_user_id) ? $data->remarks . ' - ' . member_username($data->receiver_user_id)  :  $data->remarks; ?></td>
															</tr>
													<?php }
													} ?>



													</tr>
												</tbody>
											</table>
										</div>
										<!-- <div class="table-responsive"> -->
										<!-- <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Date & Time</th>
	                                                    <th>Coin</th>
	                                                    <th>Remarks</th>
	                                                    
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            <?php
												$TotalCoins = 0;
												foreach ($DetailsCoins as $DataCoin) {
													$strtotime = strtotime($DataCoin->created_at);
													$created_at = date('d-M-Y', $strtotime);

												?>
	                                                <tr>
	                                                    <th scope="row"><?php echo $created_at; ?></th>
	                                                    <td style="color:red;"><?php echo number_format($DataCoin->coins, 2); ?></td>
	                                                    <td><?php

															if ($DataCoin->referer_userid) {
																$CI = &get_instance();
																$username = $CI->getUserName($DataCoin->referer_userid);
																echo "<font size='4' weight = 'bold'>" . $DataCoin->remarks . "</font>- " . $username;
															} else {
																echo $DataCoin->remarks;
															}
															?></td>
	                                                </tr>
	                                            <?php } ?>
	                                                    
	                                                </tr>
	                                            </tbody>
	                                        </table> -->
										<!-- </div> -->
									</div>
								</div>
							</div>

						</div>
						<!-- Transfer tab -->
						<div class="tab-pane" id="transferred" role="tabpanel">
							<div class="" id="">
								<div class="card">

									<div class="card-block table-border-style">
										<div class="table-responsive">
											<table class="table table-styling">
												<thead>
													<tr class="table-primary">
														<th>SL</th>
														<th>Transferred To</th>
														<th>Coin</th>
														<th>Date</th>
														<th>Remarks</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$TotalCoins = 0;
													if (isset($formatted_transfer_data)) {
														foreach ($formatted_transfer_data as $index => $data) {
															if ($data['amount'] > 0) :
													?>
																<tr>
																	<th><?php echo ++$index ?></th>
																	<th scope="row"><?php echo $data['receiver_name']; ?></th>
																	<td style="color:red;"><?php echo number_format($data['amount'], 2); ?></td>
																	<td><?php echo $data['transfer_date']; ?></td>
																	<td><?=
																		($data['sender_user_id']) ? $data['remarks'] . ' - ' . member_username($data['sender_user_id']) : $data['remarks']; ?></td>
																</tr>
													<?php
															endif;
														}
													} ?>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- Ending Transfer Tab -->

						<!-- Coin Transfer -->

						<div class="tab-pane" id="CoinTransfer" role="tabpanel">
							<?php echo form_open('FundTransferView') ?>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Transaction Password </label>
								<div class="col-sm-6">
									<input type="password" name="tp_pass" id="tp_pass" class="form-control">
								</div>
								<div class="col-sm-4">

									<button type="submit" id="TPChecker" class="btn btn-primary">Submit</button>

								</div>
							</div>
							<?php echo form_close() ?>
						</div>

						<!-- Ending Coin Transfer -->

						<!--  Transfer details -->
						<div class="tab-pane" id="Transfer" role="tabpanel">
							<div class="card">

								<div class="card-block table-border-style">
									<div class="table-responsive">
										<table class="table table-styling">
											<thead>
												<tr class="table-primary">
													<th>SL</th>
													<th>Reciever Name</th>
													<th>Coin</th>
													<th>Date</th>
													<th>Remarks</th>

												</tr>
											</thead>
											<tbody>
												<?php
												$TotalCoins = 0;
												foreach ($DetailsCoins as $DataCoin) {
													$strtotime = strtotime($DataCoin->created_at);
													$created_at = date('d-M-Y', $strtotime);

												?>
													<tr>
														<th scope="row"><?php echo $created_at; ?></th>
														<td style="color:red;"><?php echo number_format($DataCoin->coins, 2); ?></td>
														<td><?php echo $DataCoin->remarks; ?></td>




													</tr>
												<?php } ?>

												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Ending Transfer Details -->

					</div>
				</div>

			</div>
			<!-- Row end -->
		</div>
	</div>
	<!-- Bootstrap tab card end -->
</div>


<script>
	$(document).ready(function() {
		$('#TPChecker').click(function() {
			var TPPassword = $('#tp_pass').val().trim();
			var url = "<?php echo base_url(); ?>Signup/SignUp/CheckTPPassword/" + TPPassword;
			$.ajax({
				type: "POST",
				url: url,
				data: {
					TPPassword: TPPassword
				},
				success: function(content) {
					if (content.trim().toLowerCase() == 'success') {
						$('#ErrorMSg1').hide();
						$('#TPBox1').hide();
						$('#CoinTransfer').show();


					} else {
						$('#ErrorMSg1').show();
					}
				},
				beforeSend: function() {
					$('#ajaxLoader').show();
				},
				complete: function() {
					$('#ajaxLoader').hide();
				}
			});
		});
	});
</script>