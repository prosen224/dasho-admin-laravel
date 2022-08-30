
    <div class="col-sm-12">
        <!-- Bootstrap tab card start -->
        <div class="card">
            <div class="card-header" align="center" style="background-color: background: #40E0D0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;"> 
                <h5 style="color:white;font-weight: bold;font-size: 16px;">Your Information</h5>
            </div>
            <hr>
            <div class="card-block">
                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab"
                                    href="#home1" role="tab" style="color: green;font-size: 16px;font-weight: bold;">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#profile1" role="tab" style="color: red;font-size: 16px;font-weight: bold;">Change Password</a>
                            </li>
                      
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#blood_info" role="tab" style="color: blue;font-size: 16px;font-weight: bold;">Blood Information</a>
                            </li>
                         
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs card-block">
                            <div class="tab-pane active" id="home1"
                                role="tabpanel">
                                <div class="card">

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                            <!-- -->
                                    <div class="row">
                                            <div class="col-lg-11 col-xl-6">
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" class = "table-info">
                                                            User Name
                                                        </th>
                                                        <td class = "table-info" ><?php echo $user_info->user_name;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            First Name</th>
                                                        <td ><?php echo $user_info->FirstName;?></td>
                                                        
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" class = "table-info">
                                                            Last Name</th>
                                                        <td class = "table-info"><?php echo $user_info->LastName;?></td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">
                                                            Birth Date
                                                        </th>
                                                        <td><?php echo $user_info->dob;?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class = "table-info">
                                                            Marital
                                                            Status</th>
                                                        <td class = "table-info">Single</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Location
                                                        </th>
                                                        <td><?php echo $user_info->city;?></td>
                                                    </tr>
                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                          <div class="col-lg-11 col-xl-6">
                                                     <div class="table-responsive ">
                                                               <table class="table">
                                                                     <tbody>
                                                 <tr>
                                                    <th scope="row" class = "table-info">
                                                        Email</th>
                                                    <td class = "table-info"><a
                                                            href="#!"><?php echo $user_info->email;?></a>
                                                    </td>
                                                </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            Mobile
                                                                            Number</th>
                                                                        <td><?php echo $user_info->mobile_no;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class = "table-info">
                                                                            City</th>
                                                                        <td class = "table-info"><?php echo $user_info->city;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            Address</th>
                                                                        <td><?php echo $user_info->street_address;?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class = "table-info">
                                                                            Secutiy Question</th>
                                                                        <td class = "table-info"><a
                                                                                href="#!"><?php echo $security_question->security_question;?></a>
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th scope="row">
                                                                            Security Answer</th>
                                                                        <td><a
                                                                                href="#!"><?php echo $security_question->security_answer;?></a>
                                                                        </td>
                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                            <!-- -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile1" role="tabpanel">
                               <!--  <div class="card">
 -->
                                    <!-- <div class="card-block table-border-style"> -->
                                        <!-- change password -->
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-12 col-xl-6">
                                                <!-- Login card start -->
                                                <div class="card">
                                                    <div class="card-header" style="background: #00C9FF;
                                                            background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF); 
                                                            background: linear-gradient(to right, #92FE9D, #00C9FF);">
                                                        <h5 style="color:">Change Your Login Password</h5>
                                                    </div>
                                                    <hr>    
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-400">
                                                            <form action="<?php echo base_url('changeLoginPass');?>" method="post"
                                                                class="j-pro" id="j-pro" novalidate>
                                                                <!-- end /.header -->
                                                                <div class="j-content">
                                                                    <!-- start login -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="old_password"
                                                                                placeholder="your Old password...">
                                                                            
                                                                        </div>
                                                                    </div>

                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="new_password"
                                                                                placeholder="New password...">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- end login -->
                                                                    <!-- start password -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="confirm_password"
                                                                                placeholder="Confirm  your  new password...">
                                                                            
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
                                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Login card end -->
                                            </div>


                                             <div class="col-sm-6 col-lg-12 col-xl-6">
                                                <!-- Login card start -->
                                                <div class="card">
                                                    <div class="card-header"  style="background: #00C9FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                                                        <h5>Change Your Transaction Password</h5>
                                                        

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-400">
                                                            <form action="<?php echo base_url('changeTransactionPass');?>" method="post"
                                                                class="j-pro" id="j-pro" novalidate>
                                                                <!-- end /.header -->
                                                                <div class="j-content">
                                                                    <!-- start login -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="passsword"
                                                                                name="old_transaction_passwsord"
                                                                                placeholder="your Old password...">
                                                                            
                                                                        </div>
                                                                    </div>

                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="new_transaction_password"
                                                                                placeholder="New password...">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- end login -->
                                                                    <!-- start password -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="password">
                                                                                <i class="icofont icofont-lock"></i>
                                                                            </label>
                                                                            <input type="password" id="password"
                                                                                name="confirm_transaction_password"
                                                                                placeholder="Confirm  your  new password...">
                                                                            
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
                                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Login card end -->
                                            </div>

                                        </div>
                                        <!-- Change Password--->
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                          
                            <div class="tab-pane" id="blood_info"
                                role="tabpanel">
                                <div class="card">

                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-styling">
                                               <tbody>
                                                    <tr>
                                                        <th scope="row" class = "table-info">
                                                            Blood Group
                                                        </th>
                                                        <td class = "table-info" ><?php echo $user_info->blood_group;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                           Total Donate Time</th>
                                                        <td ><?php echo $user_info->total_donate;?></td>
                                                        
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" class = "table-info">
                                                            Last Donate Date</th>
                                                        <td class = "table-info"><?php echo $user_info->last_donate_date;?></td>
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
    