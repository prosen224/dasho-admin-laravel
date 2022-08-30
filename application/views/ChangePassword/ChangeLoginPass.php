


                                                
                                                <div class="card col-sm-6 offset-md-3 mt-2" style="background-color: blue;">
                                                    <div class="card-header" style="background: #00C9FF;  /* fallback for old browsers */
                                                        background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
                                                        background: linear-gradient(to right, #92FE9D, #00C9FF);">
                                                        <h5>Input Your Transaction Password</h5>
                                                    </div> 
                                                    <hr>    
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-400">
                                                            <form action="<?php echo base_url('changeLoginPassVerify');?>" method="post"
                                                                class="j-pro" id="j-pro" novalidate>
                                                                <!-- end /.header -->
                                                                <div class="j-content">
                                                                    <!-- start login -->
                                                                    

                                                                   
                                                                    <!-- end login -->
                                                                    <!-- start password -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="transaction_password"
                                                                                placeholder="Input  your  Transaction password...">
                                                                                
                                                                                
                                                                                
                                                                                <input type="hidden" id="password"
                                                                                name="password" value="<?php echo $new_password;?>">
                                                                                


                                                                            
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
                                                                    <button type="submit" class="btn btn-primary col-sm-8 offset-md-2">Change</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Login card end -->
                                      <!--       </div> -->