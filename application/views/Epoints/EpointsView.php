<div class="row">

    <div class="col-sm-11 col-md-12 offset-sm-1">
        <div class="card">
            <div class="card-header" align="center" style="background-color: background: #40E0D0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;">
                <h5 style="color:white;font-weight: bold;font-size: 16px;">E- Points</h5>

            </div>

            <hr>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 offset-md-3" id="myDiv">
                        <font color="red"> <?php echo $msg; ?> </font>


                    </div>

                </div>
                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link <?php echo $first_tab_status; ?>" data-toggle="tab" href="#modifyiInformation" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Available Points</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#PurchaseVouchers" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">Purchase Points</a>
                            </li>




                            <li class="nav-item <?php echo $verify_tab; ?>">
                                <a class="nav-link" data-toggle="tab" href="#History" role="tab" style="color:blue ;font-size: 12px;font-weight: bold;">History</a>
                            </li>




                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs card-block">



                            <!-- Modify Information -->

                            <div class="tab-pane <?php echo $first_tab_status; ?> " id="modifyiInformation" role="tabpanel">
                                <div class="card">
                                    <div class="row" id="TPBox">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="TPValue" name="transaction_password" placeholder="Enter Your Transaction Passowrd">
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary text-center" id="TPPassword">Validate</button>
                                        </div>

                                    </div>

                                    <div class="row" id="ErrorMSg" style="display: none;">
                                        <div class="col-md-6">
                                            <font color="red" weight="bold">Wrong Transaction Password</font>
                                        </div>
                                        <div class="col-md-6">
                                            <font>Try Again</font>
                                        </div>

                                    </div>

                                    <div class="row" style="display: none;" id="ModifyDataInfo">
                                        <div class="col-md-12 ">
                                            <div class="card-block table-border-style" align="center">
                                                <font color="red" weight="bold"> Your Total Points is <?php echo $TotalPoints; ?> </font>
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
                                                            <th>Date & Time</th>
                                                            <th>Type</th>
                                                            <th>Point</th>
                                                            <th>Total Coins</th>
                                                            <th>Status</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $TotalPoints = 0;
                                                        foreach ($DetailsPoint as $DataPoint) {
                                                            $strtotime = strtotime($DataPoint->created_at);
                                                            $created_at = date('d-M-Y H:i:s', $strtotime);

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
                                                                <td style="color:red;"><?php echo number_format($DataPoint->point, 2); ?></td>
                                                                <?php $TotalPoints = $TotalPoints + $DataPoint->point; ?>
                                                                <!-- <td style="color:red;"><?php echo number_format($TotalPoints, 2); ?></td> -->
                                                                <td style="color:red;"><?= @$DataPoint->coin ?></td>
                                                                <td style="color:green">Processed</td>



                                                            </tr>
                                                        <?php } ?>

                                                        </tr>
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
                                                <input type="text" class="form-control" id="P_TPValue" name="transaction_password" placeholder="Enter Your Transaction Passowrd">
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary text-center" id="P_TPPassword">Validate</button>
                                            </div>

                                        </div>

                                        <div class="row" id="P_ErrorMSg" style="display: none;">
                                            <div class="col-md-6">
                                                <font color="red" weight="bold">Wrong Transaction Password</font>
                                            </div>
                                            <div class="col-md-6">
                                                <font>Try Again</font>
                                            </div>

                                        </div>

                                        <div class="row" style="display: none;" id="P_ModifyDataInfo">
                                            <div class="col-md-6 ">

                                                <div class="row" id="TPBox">

                                                    <div class="col-md-12">

                                                        <!-- <form action="<?php echo base_url('PurchasePoints'); ?>" onsubmit="return checkForm(this);" id="purchasePointForm" method="POST"> -->
                                                        <form action="<?php echo base_url('PurchasePoints'); ?>"  id="purchasePointForm" method="POST">
                                                            <label>
                                                                Enter Total Points:

                                                                <input type="text" class="form-control form-group" id="Total_vocuher" name="total_points[]" placeholder="Total Points">
                                                            </label>
                                                            <br>
                                                            <label>
                                                                Need Total Coins For Purchase:
                                                            </label>

                                                            <input type="text" class="form-control" id="total_amount" name="total_coins[]" readonly value="">
                                                            <br>
                                                            <!--<p><input type="checkbox" name="terms"> I accept the <u>Terms and Conditions</u></p>-->
                                                            <p><input type="checkbox" name="terms"> I accept the<a href="#" data-toggle="modal" data-target="#Epoints"> Terms and Conditions</a> </p>



                                                            <button class="btn btn-primary text-center" id="submission">Purchase</button>
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
    $(document).ready(function() {
        $('#TPPassword').click(function() {
            var TPPassword = $('#TPValue').val().trim();
            var url = "<?php echo base_url(); ?>Signup/SignUp/CheckTPPassword/" + TPPassword;
            $.ajax({
                type: "POST",
                url: url,
                success: function(content) {
                    if (content.trim().toLowerCase() == 'success') {
                        $('#ErrorMSg').hide();

                        $('#TPBox').hide();
                        $('#ModifyDataInfo').show();
                        $('#UpdateBTN').show();

                    } else {
                        $('#ErrorMSg').show();
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

<script>
    $(document).ready(function() {
        $('#TPPassword1').click(function() {
            var TPPassword = $('#TPValue1').val().trim();
            var url = "<?php echo base_url(); ?>Signup/SignUp/CheckTPPassword/" + TPPassword;
            $.ajax({
                type: "POST",
                url: url,
                success: function(content) {
                    if (content.trim().toLowerCase() == 'success') {
                        $('#ErrorMSg1').hide();
                        $('#TPBox1').hide();
                        $('#PasswordBox').show();


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



<script>
    $(document).ready(function() {
        $('#P_TPPassword').click(function() {
            var TPPassword = $('#P_TPValue').val().trim();
            var url = "<?php echo base_url(); ?>Signup/SignUp/CheckTPPassword/" + TPPassword;
            $.ajax({
                type: "POST",
                url: url,
                success: function(content) {
                    if (content.trim().toLowerCase() == 'success') {
                        $('#P_ErrorMSg').hide();

                        $('#P_TPBOX').hide();
                        $('#P_ModifyDataInfo').show();
                        $('#UpdateBTN').show();

                    } else {
                        $('#P_ErrorMSg').show();
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



<script>
    $(document).ready(function() {
        $("#Total_vocuher").keyup(function() {
            var grandTotal = 0;
            $("input[name='total_points[]']").each(function(index) {
                var qty = $("input[name='total_points[]']").eq(index).val();
                var price = 100;


                if (!isNaN(parseInt(qty))) {
                    var output = parseInt(qty) / parseInt(price);
                    $("input[name='total_coins[]']").eq(index).val(output);
                    $('#total_amount').val(output);
                }
            });
        });


    });
</script>

<script>
    function checkForm(form) {

        if (!form.terms.checked) {
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
    $(document).ready(function() {

        //email check
        $("#sub").click(function(e) {

            var voucher_no = $('#voucher_no').val().trim();
            var voucher_code = $('#voucher_code').val().trim();

            var url = "<?php echo base_url(); ?>Voucher/VoucherController/CheckVoucher/" + voucher_no + voucher_code;
            $.ajax({
                type: "POST",
                url: url,
                success: function(content) {
                    if (content != '') {
                        console.log(content);
                        exit();
                    } else {
                        console.log('no data');
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


        $(document).on("submit","#purchasePointForm",function(e){
            e.preventDefault();
            var formData = new FormData(this);
            let totalPoint = $("#Total_vocuher").val();
            $.ajax({
                url: $(this).attr("action"),
                type: "POST",
                data: {  total_points: totalPoint},
                success: function(data) {
                    const {status, msg} = JSON.parse(data);
                    if(status == 'success'){
                        alert(msg);
                        $("#purchasePointForm")[0].reset();
                    }else{
                        alert(msg);
                    }
                    // console.log(data);
                    // if (data.trim() == 'success') {

                    // }
                },
                beforeSend: function() {
                    // $('#ajaxLoader').show();
                },
                complete: function() {
                    // $('#ajaxLoader').hide();
                }
            })
        });


    });
</script>