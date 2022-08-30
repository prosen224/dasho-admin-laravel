


<section class="container" style="background:rgb(87,180,223);">
   <div class="row mt-30">
    <div class="col-lg-6 col-md-8 col-sm-8 offset-md-2 offset-lg-3 offset-sm-2 ">
      <div class="product-card mb-30 ">
        <h3 style="background-color:#20c997;">
          <p style="text-shadow: 2px 2px 4px #000000;color: white;font-size:20px;padding-top:5px;" class="text-center">Registration Details</p>
          <hr style="color:green;">
        </h3>
        
         <form class="md-float-material form-material" action="<?php echo base_url('Registration');?>" id="InputForm"  method="post">
            
            <!--<div class="row" align="center">-->
            <!--    <div class = "col-md-8 offset-md-2">-->
            <!--    <h6>Membership Serial Number:<font color="red"><?php echo $MembershipNumber;?></font></h6>    -->
            <!--    </div>-->
                
            <!--</div>-->
            
            <div class="row" align="center">
                <div class = "col-md-8 offset-md-2">
                <h6>Your Sponsor Name:<font color="red"><?php echo $sposnor_FullName;?></font></h6>    
                </div>
                
            </div>
            
            
            <div class="row" align="center">
                <div class = "col-md-8 offset-md-2">
                <h6>Your Sposnor User ID:<font color="green"><?php echo $sponsor_name;?></font></h6>    
                </div>
                
            </div>
            
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                     <input type="text" class="form-control" id="validationServer01"  name  = 'FirstName' placeholder="First Name" value="" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                    <input type="text" class="form-control" id="validationServer02" name  = "LastName" placeholder="Last name" value="" required>
                  </div>
                </div>
              </div>        
            </div>
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                     <input type="text" class="form-control " id="user_name"  name  = "user_name" placeholder="User Name" value="" required>
                  </div>
                </div>
              </div>
              
               <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                      <input type="text" id = "reference" class="form-control" name="reference_user" placeholder="Reference User (If Any)">
                      <i class="helper"></i>
                  </div>
                </div>
              </div>
              
              </div>
              
              <div class = "row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                      <input type="text" class="form-control" id="validationServer03"  name="email" placeholder="email" required>
                  </div>
                </div>
              </div>        
            </div>
            
            <!--  <div class="row">-->
             
                     
            <!--</div>-->
            
            
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control" id="validationServer04" name="password" placeholder="password" required>
                     
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                    <input type="text" class="form-control" id="validationServer05"  name="confirm_password" placeholder="confirm password" required>
                  </div>
                </div>
              </div>        
            </div>
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                      <select class="form-control required" name='country'>
                                    <option>Select Country
                                    </option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>The Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Botswana</option>
                                    <option>Brazil</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde </option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo, Republic of the</option>
                                    <option>Costa Rica</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>Gabon</option>
                                    <option>The Gambia </option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Greece</option>
                                    <option>Grenada</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea, North</option>
                                    <option>Korea, South</option>
                                    <option>Kosovo</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macedonia</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mexico</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar (Burma)</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                                    <option>New Zealand </option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Qatar</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Kitts and Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>SouthAfrica </option>
                                    <option>South Sudan </option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Togo</option>
                                    <option>Tonga</option>
                                    <option>Trinidad and Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates </option>
                                    <option>United Kingdom</option>
                                    <option>United States of America</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City (Holy See)</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control" id="validationServer04" name="city" placeholder="City" required>
                    
                  </div>
                </div>
              </div>        
            </div>
            
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                     <input type="text" class="form-control" id="validationServer05" name="zip" placeholder="Zip" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                          <input type="hidden" class="form-control" name="sponsor_name" value="<?php echo $sponsor_name;?>" required>
                         <input type="text" class="form-control" name="street_address" placeholder="Street Address" required>
                   
                  </div>
                </div>
              </div>        
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                      <input type="date" id = "d" class="form-control" name="dob">
                      <i class="helper"></i>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                         <input type="text" class="form-control" id = "" name="mobile_no" placeholder="Mobile No">
                        <i class="helper"></i> 
                   
                  </div>
                </div>
              </div>        
            </div>
            
          
           
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                     <input type="radio" id = "pathsala_method" name="payment_method">
                        <i class="helper"></i>Pay Via PathShala Wallet
                  </div>
                </div>
              </div>
              <div class="col-md-6" id="onetherWallet">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                          <input type="radio" id = "differnet_method" name="payment_method">
              <i class="helper"></i>Pay Via Onether 
                   
                  </div>
                </div>
              </div>        
            </div>

             <div class="row" >
              <div class="col-md-6" id="voucher_no"  style="display: none;">
                <div class="form-group" style="margin-bottom: 0px !important;">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                         <input type="text" class="form-control voucher_number" name="voucher_number" placeholder="voucher No" required>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-6" id="voucher_details"  style="display: none;"> 
                <div class="form-group" style="margin-bottom: 0px !important;">
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control voucher_code" name="voucher_code" placeholder="voucher Details" required>
                         
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <span class="error_voucher text-danger"></span>
              </div>

                    <div class="col-md-12 pt-3" id = "terms_conditons" style = "display:none;">
                    
                        <div class = "row">
                            <div class = "col-md-3">
                                <a  href = "#" data-toggle="modal" data-target="#exampleModal"><font color = "red" size = "4">Details</font></a>
<!--                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--  Modal-->
<!--</button>-->
                            </div>
                         <div class="col-md-9 form-group form-check">
                            
                                <input type="checkbox" class="form-check-input" id="agree_button">
                                <label class="form-check-label" for="agree_button"> I have read and agree with all terms & Conditions.</label>
                         </div>    
                        </div>
                            
                    </div>
                    
              
            </div>





            <button type="submit" id="submit_btn" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-10" style="position: center; display:none;">Continue</button>
        </form>
      </div>
    </div>
  </div>
</section>
  <script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
  <script>
      $(document).ready(function(){
          $('#pathsala_method').click(function() {
            $('#onetherWallet').hide();
            $('#voucher_no').show();
            $('#voucher_details').show();
            $('#terms_conditons').show();
            
            // $(".voucher_number").trigger("focus");
          });
            
            $('input[type="checkbox"]').click(function(){
              if($(this).prop("checked") == true){
                  $('#submit_btn').show();    
                  // $(".voucher_number").trigger("focus");
              }
              else if($(this).prop("checked") == false){
                  $('#submit_btn').hide();
              }
              
            });
          
        //   $('#pathsala_method').click(function() {
        //     $('#onetherWallet').hide();
        //     $('#voucher_no').show();
        //     $('#voucher_details').show();
        //   });
          
      });
      </script>
      
      
<script type="text/javascript">
    
    $(document).ready(function(){

        //email check
    $("#user_name").change(function(e) {
        var user_name=$('#user_name').val().trim();       
        var url="<?php echo base_url();?>Signup/SignUp/CheckUserName/"+user_name;
        $.ajax({
                type: "POST",
                url: url,
                success: function(content)
                {
                    if(content.trim().toLowerCase() == user_name.toLowerCase())
                    {
                      $("#user_name").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>This User Name  is already taken</div>");
                      e.preventDefault(); // prevent form from POST to server
                      $('#user_name').focus();
                      focusSet = true;
                    }
                    else
                    {
                        $("#user_name").parent().next(".validation").remove();
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


        $(document).on("click","#submit_btn",function(e){
            let password = $('input[name="password"]').val();
            let confirm_password = $('input[name="confirm_password"]').val();
            if(password !='' && password != confirm_password){
              alert("Password and Confirm Password does not match");
              return false;
            }

            let voucher_number = $('.voucher_number').val();
            let voucher_code = $('.voucher_code').val();
            var url="<?php echo base_url();?>Signup/SignUp/Checkvoucher";
            $.ajax({
                   type: "POST",
                   url: url,
                   data: {voucher_number:voucher_number,voucher_code:voucher_code},
                   success: function(response)
                    {
                      let data = JSON.parse(response);
                      const {status, message} =  data;
                      // console.log(status);
                      if(status == "error"){
                        return false;
                        $(".error_voucher").text(message);
                        // $('#submit_btn').hide();
                      }else{
                        return true;
                        // $("#InputForm").submit();
                        $(".error_voucher").text('');
                        // $('#submit_btn').show();
                      }
                        // console.log(response);
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
        })

        $(document).on("keyup",".voucher_code, .voucher_number", function(){
           $("#submit_btn").attr("disabled", true);
            let voucher_number = $('.voucher_number').val();
            let voucher_code = $('.voucher_code').val();
            var url="<?php echo base_url();?>Signup/SignUp/Checkvoucher";
            $.ajax({
                   type: "POST",
                   url: url,
                   data: {voucher_number:voucher_number,voucher_code:voucher_code},
                   success: function(response)
                    {
                      let data = JSON.parse(response);
                      const {status, message} =  data;
                      // console.log(status);
                      if(status == "error"){
                        $(".error_voucher").text(message);
                        // $('#submit_btn').hide();
                      }else{
                        $(".error_voucher").text('');
                        // $('#submit_btn').show();
                        $("#submit_btn").attr("disabled", false);
                      }
                        // console.log(response);
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
