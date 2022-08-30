
    <div class="col-sm-12">
        <!-- Bootstrap tab card start -->
        <div class="card">
            <div class="card-header" align="center" style="background-color: background: #40E0D0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;"> 
                <h5 style="color:white;font-weight: bold;font-size: 16px;">Member Profile</h5>
            </div>
           
            <hr>
            <div class="card-block">
            <div class = "row">
                <div class="col-md-6 offset-md-3" style="font-color:red;font-size:16px;">
                    <?php echo $this->session->flashdata('error_msg');?>

                </div>
                
            </div>
                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-6">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab"
                                    href="#home1" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#modifyiInformation" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Modify Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#profile1" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Change Password</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#Status" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Status</a>
                            </li>

                            
                          <!--   <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#profile1" role="tab" style="color: red;font-size: 12px;font-weight: bold;">Change Transactinal Password</a>
                            </li> -->
<!-- 
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#blood_info" role="tab" style="color: blue;font-size: 16px;font-weight: bold;">Blood Information</a>
                            </li> -->
                         
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
                                            <div class="col-lg-12 col-xl-12 col-md-12">
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
                                                        <th scope="row" class = "">
                                                            Sponsor Name</th>
                                                        <td class = ""><?php echo $user_info->sponsor_user_name;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" class = "table-info">
                                                            Reference Name</th>
                                                        <td class = "table-info"><?php echo $user_info->reference_user;?></td>
                                                    </tr>
                                                
                                                
                                                  <tr>
                                                                        <th scope="row">
                                                                            Mobile
                                                                            Number</th>
                                                                        <td><?php echo $user_info->mobile_no;?></td>
                                                </tr>
                                                                   
                                              <tr>
                                                    <th scope="row" class = "table-info">
                                                        Email</th>
                                                    <td class = "table-info"><a
                                                            href="#!"><?php echo $user_info->email;?></a>
                                                    </td>
                                                </tr>
                                                
                                                
                                                                    
                                                                    
                                                                    

                                                    <tr>
                                                        <th scope="row">
                                                            Date of Birth
                                                        </th>
                                                        <td><?php echo $user_info->dob;?>
                                                        </td>
                                                    </tr>
                                                      <tr>
                                                                        <th scope="row">
                                                                            Address</th>
                                                                        <td><?php echo $user_info->street_address;?>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                               <tr>
                                        <th scope="row" class = "table-info">
                                                                            City</th>
                                    <td class = "table-info"><?php echo $user_info->city;?></td>
                                       </tr>
                                       
                                       
                                        <tr>
                                                        <th scope="row" class = "table-info">
                                                            Country</th>
                                                        <td class = "table-info"><?php echo $user_info->country; ?></td>
                                        </tr>
                                         <tr>
                                                        <th scope="row">
                                                            Joining Date
                                                        </th>
                                                        <td>
                                                        <?php
                                                        $old_date_timestamp = strtotime($user_info->created_at);
                                                        $new_date = date('d-M-Y', $old_date_timestamp); 
                                                        echo $new_date;?></td>
                                                    </tr>
                                                    
                                                    
                                                      <tr>
                                                        <th scope="row">
                                                            Expiry Date
                                                        </th>
                                                        <td>
                                                        <?php
                                                        // $old_date_timestamp = strtotime($user_info->created_at);
                                                        $new_date =  date("d-M-Y", strtotime(date("Y-m-d", strtotime($user_info->created_at)) . " + 365 day"));
                                                        // $new_date = date('d-M-Y', $old_date_timestamp); 
                                                        echo $new_date;?></td>
                                                    </tr>
                                                    
                                                     <tr>
                                                        <th scope="row">
                                                           Membership NO
                                                        </th>
                                                        <td>
                                                        <?php echo $user_info->MembershipNumber;?></td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                                 
                                         <!--<tr>-->
                                         <!--               <th scope="row" class = "table-info">-->
                                         <!--                   Marital-->
                                         <!--                   Status</th>-->
                                         <!--               <td class = "table-info">Single</td>-->
                                         <!--           </tr>-->
                                                    <!--<tr>-->
                                                    <!--    <th scope="row">-->
                                                    <!--        Location-->
                                                    <!--    </th>-->
                                                    <!--    <td><?php echo $user_info->city;?></td>-->
                                                    <!--</tr>-->
                                                    
                                                   
                                                    
                                                    <tr>
                                                        <th scope="row">
                                                            Blood Group
                                                        </th>
                                                        <td>
                                                        <?php echo $user_info->blood_group;?></td>
                                                    </tr>
                                                    
                                                      <tr>
                                                        <th scope="row">
                                                            Last Donate Date
                                                        </th>
                                                        <td>
                                                         
                                                         <?php 
                                                         $old_date_timestamp = strtotime($user_info->last_donate_date);
                                                        $new_date = date('d-M-Y', $old_date_timestamp); 
                                                        echo $new_date;
                                                        ?>
                                                       </td>
                                                    </tr>
                                                   
                                                    
                                                    
                                                    
                                                <!--</tbody>-->
                                                <!--                                            </table>-->
                                                <!--                                        </div>-->
                                                                                    <!--</div>-->
                                                                                    <!-- end of table col-lg-6 -->
                                          <!--<div class="col-lg-11 col-xl-6">-->
                                                     <!--<div class="table-responsive ">-->
                                                               <!--<table class="table">-->
                                                               <!--      <tbody>-->
                                               
                                                                  
                                                                 
                                                                  
                                                                    <tr>
                                                                        <th scope="row" class = "table-info">
                                                                            Secutiy Question</th>
                                                                        <td class = "table-info"><a
                                                                                href="#!"><?php if($security_question)
                                                                                {
                                                                                    echo $security_question->security_question;
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "";    
                                                                                }
                                                                                ?>
                                                                               </a>
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th scope="row">
                                                                            Security Answer</th>
                                                                        <td>
                                                                            <a href="#!">
                                                                                <?php if($security_question)
                                                                                {
                                                                                    echo $security_question->security_answer;    
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "";    
                                                                                }
                                                                                ?>
                                                                            </a>
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

                            

                            <!-- Modify Information -->

                            <div class="tab-pane " id="modifyiInformation"
                                role="tabpanel">
                                <div class="card">
                                    <div class="row" id="TPBox">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="TPValue" name="transaction_password" placeholder ="Enter Your Transaction Passowrd" >
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary text-center" id="TPPassword">Validate</button>
                                        </div>
                                         
                                    </div>

                                     <div class="row" id="ErrorMSg" style="display: none;">
                                        <div class="col-md-6">
                                            <font color="red" weight = "bold">Wrong Transaction Password</font>
                                        </div>
                                        <div class="col-md-6">
                                                <font>Try Again</font>
                                            </div>
                                         
                                    </div>


                                    


                            <div class="card-block table-border-style">
                            
                            <div class="table-responsive">
                                            <!-- -->
                             <form class="md-float-material form-material" action="<?php echo base_url('ModifyiInformation');?>" id="InputForm"  method="post">
                                    
                                    <div class="row" style="display: none;" id="ModifyDataInfo">
                                            <div class="col-lg-12 col-xl-12 col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                    <tbody>
                                                   
                                                    <tr>
                                                        <th scope="row">
                                                            First Name</th>
                                                        <td>
                                                            <input type="text" class="form-control" id="validationServer01"  name  = 'FirstName' placeholder="First Name" value="<?php echo $user_info->FirstName;?>" >

                                                                
                                                            </td>
                                                        
                                                    </tr>
                                                     <tr>
                                                        <th scope="row">
                                                            Last Name</th>
                                                        <td class = "table-info">
                                                            <input type="text" class="form-control" id="validationServer02" name  = "LastName" placeholder="Last name" value="<?php echo $user_info->LastName;?>" >
                                                            </td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">
                                                            Birth Date
                                                        </th>
                                                        <td><input type="date" class="form-control" id="validationServer02" name  = "dob" placeholder="" value="<?php echo $user_info->dob;?>" >

                                                        </td>
                                                    </tr>
                                                  
                                                    <tr>
                                                        <th scope="row">
                                                            Location
                                                        </th>
                                                        <td> <input type="text" class="form-control" id="validationServer04" name="city" value="<?php echo $user_info->city;?>">
                                                            </td>
                                                    </tr>

                                                   
                                                <tr>
                                                    <th scope="row">
                                                        City</th>
                                                    <td class = "table-info">
                                                         <input type="text" class="form-control" id="validationServer04" name="city" value="<?php echo $user_info->city;?>" >
                                                         </td>
                                                </tr>


                                          <!--      </tbody>-->
                                          <!--                                                  </table>-->
                                          <!--                                              </div>-->
                                          <!--                                          </div>-->
                                                                                    <!-- end of table col-lg-6 -->
                                          <!--<div class="col-lg-11 col-xl-6">-->
                                          <!--           <div class="table-responsive ">-->
                                          <!--                     <table class="table">-->
                                          <!--                           <tbody>-->
                                                                        
                                                                    
                                                                    <tr>
                                                                        <th>
                                                                            Address</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="" name="street_address" value="<?php echo $user_info->street_address;?>" >

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            Secutiy Question</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="" name="security_question" value="<?php echo $security_question->security_question;?>" >

                                                                                
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th >
                                                                            Security Answer</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="validasastionServer04" name="security_answer" value="<?php echo $security_question->security_answer;?>" >
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                     <tr>
                                                        <th scope="row">
                                                            Blood Group
                                                        </th>
                                                        <td>
                                                            <!--<input type="text" class="form-control" id="validationServer04" name="blood_group" value="<?php echo $user_info->blood_group;?>" >-->
                                                            <select  class="form-control" id="validationServer04" name="blood_group">
                                                                  <option selected><?php echo $user_info->blood_group;?></option>
                                                                  <option value="O+ve">O+ve</option>
                                                                  <option value="O-ve">O-ve</option>
                                                                  <option value="B+ve">B+ve</option>
                                                                   <option value="B-ve">B-ve</option>
                                                                    <option value="A+ve">A+ve</option>
                                                                     <option value="A-ve">A-ve</option>
                                                                     <option value="AB+ve">AB+ve</option>
                                                                     <option value="AB-ve">AB-ve</option>
                                                                </select>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                           Total Donate Time</th>
                                                        <td >
                                                            <input type="text" class="form-control" id="validationServer04" name="total_donate" value="<?php echo $user_info->total_donate;?>" >
                                                            </td>
                                                        
                                                    </tr>
                                                     <tr>
                                                        <th scope="row">
                                                            Last Donate Date</th>
                                                        <td ><input type="date" class="form-control" id="validationServer04" name="last_donate_date" value="<?php echo $user_info->last_donate_date;?>" >
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
                                <div align="center" style="display: none;" id="UpdateBTN">
                                    <button class="btn-primary  waves-effect waves-light btn-md">Update</button>
                                </div>
                                 </form>
                            </div>
                            <!-- Ending Modify Information -->



                            <div class="tab-pane" id="profile1" role="tabpanel">
                               <!--  <div class="card">
 -->
                                    <!-- <div class="card-block table-border-style"> -->
                                        <!-- change password -->
                             <div class="row" id="TPBox1">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="TPValue1" name="transaction_password" placeholder ="Enter Your Transaction Passowrd" >
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary text-center" id="TPPassword1">Validate</button>
                                        </div>
                                         
                                    </div>

                                     <div class="row" id="ErrorMSg1" style="display: none;">
                                        <div class="col-md-6">
                                            <font color="red" weight = "bold">Wrong Transaction Password</font>
                                        </div>
                                        <div class="col-md-6">
                                                <font>Try Again</font>
                                            </div>
                                         
                            </div>

                                        <div class="row" style="display: none;" id="PasswordBox">
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
                                                            <form action="<?php echo base_url('changeLoginPassVerify');?>" method="post"
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
                                                            <form action="<?php echo base_url('changeTransactionPassword');?>" method="post"
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


                            <!-- Status Portion -->
                            <div class="tab-pane" id="Status" role="tabpanel">
                               <!--  <div class="card">
 -->
                                    <!-- <div class="card-block table-border-style"> -->
                                        <!-- change password -->
                             <div class="row" id="TPBox2">
                                        <div class="col-md-6">
                                            <font color="green" style="font-size: 16px;font-weight: bold;"><?php echo $this->session->userdata('status');?></font>
                                        </div>
                                       
                                         
                                    </div>

                                  

                                        
                                       
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                            <!-- Ending Status Portion -->
                          
                            

                        </div>
                    </div>
                    
                </div>
                <!-- Row end -->
            </div>
        </div>
        <!-- Bootstrap tab card end -->
    </div>

      <script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
  <script>
      $(document).ready(function(){
          $('#TPPassword').click(function() {
            var TPPassword=$('#TPValue').val().trim();
            var url="<?php echo base_url();?>Signup/SignUp/CheckTPPassword/"+TPPassword;
            $.ajax({
                   type: "POST",
                   url: url,
                   success: function(content)
                    {
                        if(content.trim().toLowerCase() == 'success')
                        {
                          $('#ErrorMSg').hide();

                          $('#TPBox').hide();
                          $('#ModifyDataInfo').show();
                          $('#UpdateBTN').show();
                          
                        }
                        else
                        {
                           $('#ErrorMSg').show();
                        }
                    },
                  beforeSend: function()
                  {
                    $('#ajaxLoader').show();
                  },
                  complete: function()
                  {
                     $('#ajaxLoader').hide();
                  }
            });
          });
      });
      </script>

<script>
      $(document).ready(function(){
          $('#TPPassword1').click(function() {
            var TPPassword=$('#TPValue1').val().trim();
            var url="<?php echo base_url();?>Signup/SignUp/CheckTPPassword/"+TPPassword;
            $.ajax({
                   type: "POST",
                   url: url,
                   success: function(content)
                    {
                        if(content.trim().toLowerCase() == 'success')
                        {
                          $('#ErrorMSg1').hide();
                          $('#TPBox1').hide();
                          $('#PasswordBox').show();
                          
                          
                        }
                        else
                        {
                           $('#ErrorMSg1').show();
                        }
                    },
                  beforeSend: function()
                  {
                    $('#ajaxLoader').show();
                  },
                  complete: function()
                  {
                     $('#ajaxLoader').hide();
                  }
            });
          });
      });
      </script>