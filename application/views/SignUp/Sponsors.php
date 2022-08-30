

      <section class="container" style="background:#E1BEE7; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
         <div class="row mt-30">
          <div class="col-lg-6 col-md-6 col-sm-6 offset-md-3 ">
            <div class="product-card mb-30 ">
              <h3 style="background-color:#20c997;">
                <p style="text-shadow: 2px 2px 4px #000000;color: white;font-size:20px;padding-top:5px;" class="text-center">Sponsor Details</p>
                <hr style="color:green;">
              </h3>
              <h6 style = "color:red;" align= "center" ><?php echo $error_data;?></h6>
               <form class="md-float-material form-material" action="<?php echo base_url('SponsorDetails');?>" id="InputForm"  method="post">
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="input-wrap">
                            <div class="icon"><span class="fa fa-user"></span></div>
                             <input type="text" name="sponsor_uname" id = "sponsor_name" class="form-control" required=""
                                        placeholder="Please Enter Your Sponsor's username">
                          </div>
                        </div>
                      </div>
                                      
           
                    </div>

                     <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-10" style="position: center;">Continue</button>

                  </form>
            </div>
          </div>
        </div>

      </section>