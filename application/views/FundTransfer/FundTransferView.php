            
                <div class="col-sm-12">
                                                <!-- Login card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 style="color: red">Fill Up The Fund Transfer Form</h5>
                                                        

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-400">
                                                            <form action="<?php echo base_url('FundTransfer');?>" method="post"
                                                                class="j-pro" id="j-pro" novalidate>
                                                                <!-- end /.header -->
                                                                <div class="j-content">
                                                                    <!-- start login -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="info">
                                                                                <i class="icofont icofont-info"></i>
                                                                            </label>
                                                                            <input type="text" id="text"
                                                                                name="user_name"
                                                                                placeholder="Enter Reciever User Name">
                                                                            
                                                                        </div>
                                                                    </div>

                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-money"></i>
                                                                            </label>
                                                                            <input type="text" id="password"
                                                                                name="amount"
                                                                                placeholder="Enter The Amount">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- end login -->
                                                                    <!-- start password -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-code"></i>
                                                                            </label>
                                                                            <input type="text" id="password"
                                                                                name="remarks"
                                                                                placeholder="Give a Reference Code/Remarks">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- end password -->
                                                                    <!-- start reCaptcha -->
                                                                    <div class="j-unit">
                                                                        <!-- start an example of the site key -->
                                                                        <div class="g-recaptcha"
                                                                            data-sitekey="6LeV7gwUAAAAAKOX-B12lNcg1ids8dFylMP6XihO">
                                                                        </div>
                                                                        <!-- end an example of the site key -->
                                                                        <!-- <div class="g-recaptcha" data-sitekey="your-site-key"></div> -->
                                                                    </div>
                                                                    <!-- end reCaptcha -->
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit" class="btn btn-primary">Transfer</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Login card end -->
                                            </div>
           
                                