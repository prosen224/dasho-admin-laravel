   
    <div class="col-sm-12">
     <!-- Register your self card start -->
            <div class="card">
                <div class="card-header" style="background-color: aqua;">
                     <h5 align="center">Transaction Password</h5>

                                                    </div>
            <div class="card-block">
                <div class="j-wrapper j-wrapper-640">
                <form action="<?php echo base_url('TransactionSubmit');?>" method="post">
                        <div>
                            <!-- start name -->
                            
                                    <br>
                                    <div>
                                       
                                        <input type="password" id="password"
                                            name="trans_password" class="form-control" placeholder="Create Your Transaction password">
                                    </div>
                                    <br>
                                    <div>
                                        <input type="password" id="verify__trans_password"
                                           class="form-control" name="verify__trans_password" placeholder="Verify Your Transaction password">
                                    </div>
                                
                            
                            <!-- end email -->
                            <!-- start login -->
                            <div>
                              <!--   <div>
                                    <label class="j-label ">Select Your Security Question</label>
                                </div> -->
                                <br>
                                    <div>
                                       

                                    
                                        <select
                                        class="form-control required"  name='security_question'>
                                        <option>Select Your Security Question
                                        </option>
                                        <option>What is your favourite pet?</option>
                                        <option>What is your nick Name?</option>
                                        <option>Who is the your best friend?</option>
                                        <option>Where are you want to grow up?</option>
                                        <option>What is your best skill?</option>
                                    </select>
                              
                                    </div>
                               

                                


                            </div>
                            <!-- end login -->
                            <!-- start password -->
                            <div>
                                
                                    <div >
                                        <label class="j-icon-right"
                                            for="password">
                                            <i class="icofont icofont-lock"></i>
                                        </label>
                                        <input type="text" id="text"
                                            class="form-control" name="secuirty_answer" placeholder="Enter Secuirty Answer">
                                    </div>
                            </div>
                            <!-- end password -->
                            <!-- start response from server -->
                            <div class="j-response"></div>
                            <!-- end response from server -->
                        </div>
                        <!-- end /.content -->
                        <div class="j-footer">
                            <button type="submit"
                                class="btn btn-primary">Submit</button>
                        </div>
                        <!-- end /.footer -->
                    </form>
                </div>
            </div>
            </div>
            <!-- Register your self card end -->
        </div>
    