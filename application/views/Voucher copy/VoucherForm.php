 <div class="card col-sm-12" style="">
                                                    <div class="row invoice-contact">
                                                        <div class="col-md-12">
                                                            <div class="invoice-box row">
                                                                <div class="col-sm-12" >
                                                                    <table
                                                                        class="table table-responsive invoice-table table-borderless" >
                                                                        <tbody >
                                                                            <tr>
                                                                                <td><img src="../files/assets/images/logo-blue.png"
                                                                                        class="m-b-10" alt=""></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style=""><font style = "color: green; font-weight: bold;font-size: 16px;">PathShala BD</font></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><font style = "color: red; font-weight: bold;font-size: 14px;">New Market, Biponi Bitan
                                                                                    ShahBag, BD 60185</font></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="mailto:demo@gmail.com"
                                                                                        target="_top"><font style = "color: blue; font-weight: italic;font-size: 12px;">pathshala@gmail.com</font></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><font style = "color: violet; font-weight: bold;font-size: 12px;">+8801828-829105</font></td>
                                                                            </tr>
                                                                            <!-- <tr>
                                                            <td><a href="#" target="_blank">www.demo.com</a>
                                                            </td>
                                                        </tr> -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row invoive-info">
                                                            <!-- <div class="col-md-4   invoice-client-info">
                                                                <h6>Client Information :</h6>
                                                                <h6 class="m-0">Josephin Villa</h6>
                                                                <p class="m-0 m-t-10">123 6th St. Melbourne, FL 32904
                                                                    West Chicago, IL 60185</p>
                                                                <p class="m-0">(1234) - 567891</p>
                                                                <p>demo@xyz.com</p>
                                                            </div> -->
                                                            
                                                            <div class="col-md-4 col-sm-6">
                                                                <h6>Order Information :</h6>
                                                                <table
                                                                    class="table table-responsive invoice-table invoice-order table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Date :</th>
                                                                            <td><?php echo date('Y-M-d');?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Status :</th>
                                                                            <td>
                                                                                <span
                                                                                    class="label label-warning">Unused</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Creatd By :</th>
                                                                            <td>
                                                                                <?php echo $this->session->userdata('CurrentUserFirstName');?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <h6 class="m-b-20 text-success" >Voucher Number: 
                                                                    <span><?php echo $voucher_no;?></span></h6>
                                                                <h6 class="text-uppercase text-primary">Voucher Code: 
                                                                    <span ><?php echo $voucher_code;?></span>
                                                                </h6>
                                                            </div>

                                                              <div class="col-md-4 col-sm-6">
                                                                
                                                                 
                                                                    <button style="font-size:18px;" type="submit" class="btn btn-primary m-b-0">Print</button>
                                                               

                                                            </div>


                                                        </div>
                                                       
                                                        
                                                       
                                                    </div>
                                                    <!-- <div>
                                                        <button class="btn-primary">Print</button>
                                                    </div> -->
                                                </div>