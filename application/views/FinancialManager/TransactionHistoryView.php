<div class="col-sm-12">
	<!-- Bootstrap tab card start -->
	<div class="card">
		<div class="card-header">
			<h5 align="left">Points Bank</h5>
			<br>
			<h5 align="left">PathShala Points Bank</h5>
		</div>
		<div class="card-block">
			<!-- Row start -->
			<div class="row">
				<div class="col-lg-12 col-xl-12">
					<!-- Nav tabs -->

					<!-- Tab panes -->
					<div class="card-block">
						<div class="" id="">
							<div class="card">

								<div class="card-block table-border-style">
									<div class="table-responsive">
										<table class="table table-styling">
											<thead>
												<tr class="table-primary">
													<th>Date & Time</th>
													<th>Type</th>
													<th>Point</th>
													<th>Total Points</th>
													<th>Status</th>

												</tr>
											</thead>
											<tbody>
												<?php
												$TotalPoints = 0;
												foreach ($DetailsPoint as $DataPoint) {
													$strtotime = strtotime($DataPoint->created_at);
													$created_at = date('d-M-Y H:i:s', $strtotime);
													if($DataPoint->referer_userid != $user_id || $DataPoint->status != 1):
													if ($DataPoint->point > 0 ) :

												?>
														<tr>
															<th scope="row"><?php echo $created_at; ?></th>
															<td><?php

																if ($DataPoint->referer_userid) {
																	$CI = &get_instance();
																	$username = $CI->getUserName($DataPoint->referer_userid);
																	echo "<font size= '4' weight = 'bold'>" . $DataPoint->remarks . "</font>- " . $username;
																} else {
																	echo $DataPoint->remarks;
																}


																?></td>
															<td style="color:red;">
																<?php

																if ($DataPoint->user_id != $user_id) {
																	echo "-";
																} else {
																	echo "+";
																}
																echo number_format($DataPoint->point, 2);
																?>
															</td>
															<?php
															if ($DataPoint->user_id == $user_id) {
																$TotalPoints += $DataPoint->point;
															} else {
																$TotalPoints -= $DataPoint->point;
															}
															// $TotalPoints = $TotalPoints + $DataPoint->point; 

															?>
															<td style="color:red;"><?php echo number_format($TotalPoints, 2); ?></td>
															<td style="color:green">Processed</td>



														</tr>
												<?php
													endif;
													endif;
												} ?>

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