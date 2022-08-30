


<div class = "row">

<div class = "col-sm-11 col-md-12 offset-sm-1">
    <div class="card">
            <div class="card-header" align="center" style="background-color: background: #40E0D0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;"> 
                <h5 style="color:white;font-weight: bold;font-size: 16px;">E- Vouchers</h5>
                
            </div>
           
            <hr>
            <div class="card-block">
            <div class = "row">
                <div class="col-md-6 offset-md-3" id = "myDiv">
                    <font color = "red"> <?php echo @$msg; ?> </font>
                    
                    
                </div>
                
            </div>
                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link <?php echo @$first_tab_status;?>" data-toggle="tab"
                                    href="#modifyiInformation" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Available Vouchers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"
                                    href="#PurchaseVouchers" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Purchase Vouchers</a>
                            </li>
                            
                            <li class="nav-item <?php echo @$verify_tab;?>">
                                <a class="nav-link" data-toggle="tab"
                                    href="#VerifyVouchers" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Verify Vouchers</a>
                            </li>
                            
                            
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="tab"
                                    href="#History" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">History</a>
                            </li>

                            
                       
                         
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs card-block">
                           
                            

                            <!-- Modify Information -->

                            <div class="tab-pane <?php echo $first_tab_status;?> " id="modifyiInformation"
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
                                    
                                     <div class="row" style="display: none;" id="ModifyDataInfo">
                                            <div class="col-md-12 ">
                                             <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Voucher No</th>
	                                                    <th>Voucher Code</th>
	                                                    <th>Status</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            <?php 
	                                            $TotalPoints = 0;
	                                       foreach ($TotalVouchers as $Data) {
	                                            	$strtotime = strtotime($Data->created_at);
	                                            	$created_at = date('d-M-Y H:i:s',$strtotime);

	                                             ?>
	                                                <tr>
	                                                    <td scope="row"><?php echo $Data->voucher_no; ?></th>
	                                                   
                                        	                                                    <td style = "color:green">
                                        	       <?php echo "Pathshala-".$Data->voucher_code;?>                                        
                                        	                                                    </td>
                                        	                                                    
	                                                
	                                                    <td style = "color:green">
	                                           <?php
	                                            
	                                                    if($Data->voucher_status == '0')
	                                                    {
	                                                        echo "Not used";
	                                                    }
	                                                    else
	                                                    {
	                                                        echo "Used";
	                                                    }
	                                           ?>
	                                                    
	                                            </td>
	                                                    
	                                                    
	                                                    
	                                                </tr>
	                                            <?php } ?>
	                                                    
	                                                
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
                                             
                                             </div>
                                     </div>
                             </div>
                                
                                
                            </div>
                            <!-- Ending Modify Information -->



                            


                            <!-- History Portion -->
                            <div class="tab-pane" id="History" role="tabpanel">

                                 
                                <div class="row" id="TPBox2">
                                        <div class="col-md-12">
                                             
                                             
                                             <div class="card-block table-border-style">
	                                    <div class="table-responsive">
	                                        <table class="table table-styling">
	                                            <thead>
	                                                <tr class="table-primary">
	                                                    <th>Voucher No</th>
	                                                    <th>Voucher Code</th>
	                                                    <th>Generation Date</th>
	                                                    <th>Used On</th>
	                                                    <th>Used For</th>
	                                                    
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            <?php 
	                                            $TotalPoints = 0;
	                                       foreach (@$TotalVouchers as $Data) {
	                                            	$strtotime = strtotime($Data->created_at);
	                                            	$created_at = date('d-M-Y H:i:s',$strtotime);

	                                             ?>
	                                                <tr>
	                                                    <td scope="row"><?php echo $Data->voucher_no; ?></th>
	                                                   
                                        	                                                    <td style = "color:green">
                                        	       <?php echo "Pathshala-".$Data->voucher_code;?>                                        
                                        	                                                    </td>
                                        	                                                    
	                                               
	                                                 <td style = "color:green">
                                        	            <?php echo $created_at; ?>
                                                        
                                            
                                        	        </td>
                                        	                                                    
                                        	                                                    
	                                                    <td style = "color:green">
	                                                
	                                                    <?php echo $Data->userd_on;?>
	                                                    
	                                            </td>
	                                                 
	                                                            
	                                                    <td style = "color:green">
	                                                
	                                                    <?php echo $Data->used_for;?>
	                                                    
	                                            </td>   
	                                                    
	                                                    
	                                                </tr>
	                                            <?php } ?>
	                                                    
	                                                
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
                                             
                                             
                                             
                                             
                                        </div>
                                       
                                         
                                    </div>

                                  

                                        
                                       
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                            <!-- Ending History Portion -->
                            
                                <div class="tab-pane" id="PurchaseVouchers" role="tabpanel">
                                    <div class="row" id="TPBox2">
                                        <div class="col-md-12">
                                           
                                     <div class="row" id="P_TPBOX">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="P_TPValue" name="transaction_password" placeholder ="Enter Your Transaction Passowrd" >
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary text-center" id="P_TPPassword">Validate</button>
                                        </div>
                                         
                                    </div>

                                     <div class="row" id="P_ErrorMSg" style="display: none;">
                                        <div class="col-md-6">
                                            <font color="red" weight = "bold">Wrong Transaction Password</font>
                                        </div>
                                        <div class="col-md-6">
                                                <font>Try Again</font>
                                            </div>
                                         
                                    </div>
                                    
                                     <div class="row" style="display: none;" id="P_ModifyDataInfo">
                                            <div class="col-md-6 ">
                                        
                                                     <div class="row" id="TPBox">
                                                       
                                                        <div class="col-md-12">
                                                            
                                        <form action = "<?php echo base_url('Purchasevouchers');?>" onsubmit="return checkForm(this);" method= "POST">
                                                            <input type="text" class="form-control" id="Total_vocuher" name="total_voucherNO[]" placeholder ="Total Voucher" >
                                                             <br>
                                                             <input type="text" class="form-control" id="total_amount" name="total_coins[]" readonly value = "" >
                                                             <br>
                                                             <p><input type="checkbox" name="terms"> I accept the<a href = "#" data-toggle="modal" data-target="#exampleModal1"> Terms and Conditions</a> </p>
                                                             
                                                              <!--<a  href = "#" data-toggle="modal" data-target="#exampleModal"><font color = "red" size = "4">Details</font></a>-->


                                                             <button class="btn btn-primary text-center" id="submission" >Validate</button>
                                    </form>                  
                                                        </div>
                                                       
                                                        <!--<div class="col-md-6">-->
                                                        <!--    <button class="btn btn-primary text-center" id="P_TPPassword">Validate</button>-->
                                                        <!--</div>-->
                                                    </div>
                                            </div>
                                     
                                     
                                    </div>
                                         
                                    </div>
                                </div>
                                </div>
                                
                                
                                  <div class="tab-pane <?php echo $verify_tab;?>" id="VerifyVouchers" role="tabpanel">
                                      
                                          <h5 align="center" style = "color:green;font-weight:bold;">Verify Vouchers</h5>
                                      <br>
                                    <div class="row" id="TPBox2" style = "<?php echo $hideStyle?>">
                                        <div class="col-md-6">
                                            <form action = "<?php echo base_url('VerifyVouchers');?>" method = "POST">
                                                <input type="text" class="form-control" id="voucher_no" name="voucher_no" placeholder ="Enter Voucher NO" >
                                                             <br>
                                                             <input type="text" class="form-control" id="voucher_code" name="voucher_code"  placeholder  = "Enter Voucher Code">
                                                             <br>
                                                            


                                                             <button class="btn btn-primary text-center" id="sub" >Verify</button>
                                            </form>
                                             
                                                            
                                    
                                        </div>
                                         
                                    </div>
                                    
                                    <?php if(isset($voucher_data)){?>
                                    <div class = "row" id = "voucherDetails">
                                        <div class = "col-md-8 offset-md-2" style = "border:2px; background-color:#DDF4E9;">
                                        <p>Voucher NO: <?php echo $voucher_data[0]->voucher_no; ?></p>
                                            <p>Voucher Code: <?php echo $voucher_data[0]->voucher_code; ?></p>
                                            <p>Generation Date: <?php 
                                            $originalDate = $voucher_data[0]->created_at;
                                            $newDate = date("d-M-Y", strtotime($originalDate));

                                            echo  $newDate; ?></p>
                                            <p>Voucher Owner: <?php echo  $voucher_data[0]->voucher_owner; ?> -> <button id = "OwnerInfoButton">View Details</button></p>
                                            <p>Used On:  <?php echo $voucher_data[0]->userd_on; ?> </p>
                                            <p>Used for: <?php echo  $voucher_data[0]->used_for; ?></p>
                                            
                                        </div>
                                    </div>
                                    
                                    <!--VouchersOwnersData-->
                                    
                                    <div class = "row" style ="display:none;" id="voucherOwnerData">
                                        <div class = "col-md-8 offset-md-2" style = "border:2px; background-color:lightgreen;">
                                        <p>UserName: <?php echo $VouchersOwnersData[0]->user_name; ?></p>
                                        
                                        <p>Date Of Joining: <?php 
                                            $originalDate = $VouchersOwnersData[0]->created_at;
                                            $newDate = date("d-M-Y", strtotime($originalDate));

                                            echo  $newDate; ?></p>
                                        <p>FirstName: <?php echo $VouchersOwnersData[0]->FirstName; ?></p>
                                        <p>LastName: <?php echo $VouchersOwnersData[0]->LastName; ?></p>
                                        <p>Address: <?php echo $VouchersOwnersData[0]->street_address; ?></p>
                                        <p>City: <?php echo $VouchersOwnersData[0]->city; ?></p>
                                        
                                      
                                        <p>Rank: <?php
                                          switch($VouchersOwnersData[0]->rank)
                                                {
                                                    case "First Class":
                                                        $rank = "Primary Associate";
                                                        break;
                                                    case "Second Class":
                                                        $rank = "Junior Associate";
                                                        break;
                                                    case "Third Class":
                                                        $rank = "Senior Associate";
                                                        break;
                                                    case "Fourth Class":
                                                        $rank = "Higher Associate";
                                                        break;
                                                    
                                                    case "Fifth Class":
                                                        $rank = "Final Associate";
                                                        break;
                                                    default:
                                                        $rank = "Associate";
                                                        break;
                                                        
                                                        
                                                }
        
                                        echo $rank; ?></p>
                                             
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <?php }?>
                                    
                                    
                                </div>
                                
                            
                            
                          
                            

                        </div>
                    </div>
                    
                </div>
                <!-- Row end -->
            </div>
        </div>
        <!-- Bootstrap tab card end -->
</div>
    
</div>


 <script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
  <script>
  $(document).ready(function() {
    
    $('#OwnerInfoButton').click(function() {
        
        $('#voucherDetails').hide();
        $('#voucherOwnerData').show();
        
    });
        
  });
    </script>
    
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
      
      
      
      <script>
      $(document).ready(function(){
          $('#P_TPPassword').click(function() {
            var TPPassword=$('#P_TPValue').val().trim();
            var url="<?php echo base_url();?>Signup/SignUp/CheckTPPassword/"+TPPassword;
            $.ajax({
                   type: "POST",
                   url: url,
                   success: function(content)
                    {
                        if(content.trim().toLowerCase() == 'success')
                        {
                          $('#P_ErrorMSg').hide();

                          $('#P_TPBOX').hide();
                          $('#P_ModifyDataInfo').show();
                          $('#UpdateBTN').show();
                          
                        }
                        else
                        {
                           $('#P_ErrorMSg').show();
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
     $(document).ready(function() {
    $("#Total_vocuher").keyup(function() {
        var grandTotal = 0;
        $("input[name='total_voucherNO[]']").each(function (index) {
            var qty = $("input[name='total_voucherNO[]']").eq(index).val();
            var price = 999;
           
            
            if (!isNaN(parseInt(qty))) 
            {
                var output = parseInt(qty) * parseInt(price);
				$("input[name='total_coins[]']").eq(index).val(output);
            	$('#total_amount').val(output);
            }
        });
    });
    
  
});
      </script>

<script>
 function checkForm(form)
  {
   
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }

setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 1000);

</script>

<script type="text/javascript">
    
    $(document).ready(function(){

        //email check
    $("#sub").click(function(e) {
           
            var voucher_no=$('#voucher_no').val().trim();      
            var voucher_code=$('#voucher_code').val().trim(); 
            
            var url="<?php echo base_url();?>Voucher/VoucherController/CheckVoucher/"+voucher_no+voucher_code;
            $.ajax({
                   type: "POST",
                   url: url,
                   success: function(content)
                    {
                        if(content != '')
                        {
                          console.log(content);
                          exit();
                        }
                        else
                        {
                           console.log('no data');
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
    

