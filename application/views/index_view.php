<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI=& get_instance();
function en2bn($number)
{
    $en=array('1','2','3','4','5','6','7','8','9','0');
    $bn=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    return str_replace($en,$bn,$number);
}

function en2bndate($currentDate)
{
    
    $engDATE = array('1','2','3','4','5','6','7','8','9','0','Jan','Feb','Mar','Apr',
    'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec','Saturday','Sunday',
    'Monday','Tuesday','Wednesday','Thursday','Friday');
    $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
    'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার' 
    );
    return str_replace($engDATE, $bangDATE, $currentDate);
}
?>
<div class="content-page" style="padding-bottom:200px; margin-top:20px;background-image: url('<?php echo base_url();?>images/depositphotos_152420328-stock-video-modern-seamless-texture-background-of.jpg');">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <!-- Basic example -->
                <div class="col-md-12">
                    <div class="card card-border card-primary" style="background-color:rgb(245,245,245);">
                    	<div class="card-header custom_card_header" style="background-color:#b30213 !important;border-color:#c13e00 !important;border:1px solid #b30213 !important;"> 
                            <h3 class="card-title text-primary text-center custom_card_header_title">ড্যাশবোর্ড</h3> 
                        </div>
                        <div class="card-body">
                                 <!--Widget-4 -->
		                        <div class="row">
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Person/person_list/" class="btn btn-primary waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ব্যক্তি যোগ করুন</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Income/income_list/" class="btn btn-success waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">জমা যোগ করুন</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Expense/expense_list/" class="btn btn-danger waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">খরচ যোগ করুন</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Income_expense_report/search_report/" class="btn btn-info waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">জমা/খরচ রিপোর্ট</span></a></p>
										    	
										    </div>
										  </div>
		                            </div>

		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Three_piece_stock_in/stock_in_list/" class="btn btn-info waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ত্রি পিস স্টক ইন</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Three_piece_stock_out/stock_out_list/" class="btn btn-danger waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ত্রি পিছ স্টক আউট</span>  <span style="color:red; font-weight:bold;font-size: 16px;">-</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Three_piece_stock_out_sale/stock_out_list/" class="btn btn-success waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ত্রি পিছ (বিক্রয়)</span>  <span style="color:red; font-weight:bold;font-size: 16px;">-</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Three_piece_stock_report/search_report/" class="btn btn-primary waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ত্রি পিছ স্টক রিপোর্ট</span></a></p>
										    	
										    </div>
										  </div>
		                            </div>

		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Three_piece_design_code/design_code_list/" class="btn btn-primary waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">ডিজাইন কোড</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>

		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Income/income_list/" class="btn btn-success waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">আজকের জমা</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Expense/expense_list/" class="btn btn-danger waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">আজকের খরচ</span>  <span style="color:red; font-weight:bold;font-size: 16px;">+</span> </a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            <div class="col-md-3">
		                            	  <div class="card bg-default">
										    <div class="card-body text-center">
										    	<p style="padding:5px;"><a style="padding:9px;" href="<?php echo base_url();?>index.php/Income_expense_report/search_report/" class="btn btn-info waves-effect waves-light"><span style="font-weight:bold;font-size: 16px;">আজকের অবশিষ্ট</span></a></p>
										    	
										    </div>
										  </div>
		                            </div>
		                            
		                        </div>
		                        <!-- end row -->
                        </div><!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col-->
              </div> <!-- End row -->
        </div> <!-- container -->
    </div> <!-- content -->
  </div>

