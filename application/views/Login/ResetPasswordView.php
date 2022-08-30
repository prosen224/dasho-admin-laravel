<div class = "container">
    <div class="col-lg-6 col-md-6 col-sm-6 offset-md-3 ">
             <div class="product-card mb-30 ">
              <h3 style="background-color:;">
                <p style="text-shadow: 2px 2px 4px #000000;color: red;font-size:20px;padding-top:5px;" class="text-center">Reset Password</p>
                <hr style="color:green;">
              </h3>
           
              
               
               
                       <form class="md-float-material form-material" action="<?php echo base_url('ResetPassWord');?>" id="InputForm"  method="post">
                            <div class = "row col-md-6 offset-md-3">
                                <?php echo $error_msg;?>
                            </div>
                            
                              
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-user"></span></div>
                                    <input type="text" name="user_name" class="form-control" required=""
                                                placeholder="Enter OTP">
                                  </div>
                                </div>
                              </div>
                        <button type="submit" id="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-10" >Send Verification Code</button>
                        
                        </form>    
               </div>
    </div>           
  </div> 