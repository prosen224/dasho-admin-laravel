<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pathshala
    </title>
    <meta name="description" content="Cheapers - Cheapers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>website_assets/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>website_assets/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>website_assets/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>website_assets/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>website_assets/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>website_assets/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>website_assets/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>website_assets/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>website_assets/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>website_assets/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>website_assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>website_assets/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>website_assets/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>website_assets/css/vendor.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo base_url(); ?>website_assets/css/styles.min.css">
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>website_assets/customizer/customizer.min.css">
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>css/custom.css">
    <script src="<?php echo base_url(); ?>website_assets/js/modernizr.min.js"></script>
    <style>
    </style>
  </head>
  <body>
    <!-- Off-Canvas Category Menu-->
    
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="menu_item"><a href="<?php echo base_url('/index.php/website/');?>"><span>Home</span></a>
          </li>
          <li class="menu_item"><a data-scroll href="#membership_section"><span>Membership</span></a>
          </li>
          <li class="menu_item"><a data-scroll href="#opportunity_section"><span>Opportunity</span></a>
          </li>
          <li class="menu_item"><a data-scroll href="#section_video"><span>Testimonials</span></a>
          </li>
          <li class="menu_item"><a href="<?php echo base_url('/index.php/website/');?>"><span>News</span></a>
          </li>
          <li class="menu_item"><a data-scroll href="#footer_id"><span>Contact</span></a>
          </li>
          <li class="menu_item"><a href="<?php echo base_url('signup');?>"><span>Join</span></a>
          </li>
          <li class="menu_item"><a href="<?php echo base_url('login');?>">Login</a></li>


         <?php if($this->session->userdata('vendor_logged_in')){?>
          <li class="menu_item"><a style="color:red;" href="<?php echo base_url('/index.php/website/');?>"><span>Dashboard</span></a>
          </li>
          <?php } ?>
          <?php if($this->session->userdata('vendor_logged_in')){?>
          <li class="menu_item"><a style="color:red;" href="<?php echo base_url('/index.php/website/');?>"><span>Log Out</span></a>
          </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->

    <!-- <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@patshala.com"><i class="icon-mail"></i><span style="color:white;">&nbsp; support@patshala.com</span></a><a class="hidden-md-down" href="tel:+880 111 222 333"><i class="icon-bell"></i><span style="color:white;">&nbsp; +880 111 2222 333</span></a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
      <div class="topbar-column">
        <a  style="color:white;border-radius:22px;padding:5px;padding-left:15px;padding-right:15px;margin-right:-25px;text-decoration:none;background: -webkit-linear-gradient(to right, #FFC371, #FF5F6D);background: linear-gradient(to right, #FFC371, #FF5F6D);" href="<?php echo base_url('login');?>">Member Login</a>
      </div>
    </div> -->
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Search-->
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          
          <a class="site-logo" href="<?php echo base_url('/index.php/website/');?>"><img src="<?php echo base_url(); ?>website_assets/logo.png"> PATHSHALA Global</a>
          <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>

        <?php
          if(is_array($navigations)):
            if(count($navigations) > 0):
          foreach ($navigations as $key => $value):

            
        ?>
          <li class="menu_item"><a href="<?= $value['link'] ?>"><span><?= $value['name'] ?></span></a>

          <?php 
            endforeach;
            endif;
          endif;
          ?>

         <?php if($this->session->userdata('vendor_logged_in')){?>
          <li class="menu_item"><a style="color:red;" href="<?php echo base_url('/index.php/website/');?>"><span>Dashboard</span></a>
          </li>
          <?php } ?>
          <?php if($this->session->userdata('vendor_logged_in')){?>
          <li class="menu_item"><a style="color:red;" href="<?php echo base_url('/index.php/website/');?>"><span>Log Out</span></a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
          </div>
        </div>
      </div>
    </header>
    <!-- Off-Canvas Wrapper-->


    
    
    <div class="content_area">
        <section class="hero-slider">
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: false, &quot;autoplay&quot;: true }">
          
        
        <?php
          if(is_array($sliders)):
            if(count($sliders) > 0):
          foreach ($sliders as $key => $value):

            
        ?>

          <div class="slider_item">
            <img src="<?php echo base_url(); ?>admin/public/uploads/banner_image/<?= $value['banner_image']?>.". alt="Image">
            <div class="sliderhero_content">
              <span style="" class=" reveal active fade-bottom"><?= $value['description']?></span>
              <h1 style="" class=" reveal active fade-bottom"><?= $value['title']?></h1>
              <a class="standard_btn reveal active fade-bottom" href="<?= $value['button_link']?>" target="_blank" tabindex="0" style=""><?= $value['button_label']?></a>
            </div>
          </div>

          <?php 
            endforeach;
            endif;
          endif;
          ?>


          <!-- <div class="slider_item">
            <img src="<?php echo base_url(); ?>images/slider_image/hero_slide2.jpg" alt="Image">
            <div class="sliderhero_content">
              <span style="" class=" reveal active fade-bottom">TOGETHER WE CAN ACHIEVE MORE</span>
              <h1 style="" class=" reveal active fade-bottom">BE LIMITLESS</h1>
              <a class="standard_btn reveal active fade-bottom" href="sign-up" target="_blank" tabindex="0" style="">Join Us</a>
            </div>
          </div> -->

        </div>



      </section>
      <!-- Page Content-->
      <!-- Main Slider-->
      <?php
          if(is_array($about_us)):
            if(count($about_us) > 0):
        ?>
      <section class="about_sec reveal fade-bottom" id="about_section">
        <div class="section_content_holder">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-lg-1 order-2">
                <div class="about_tag_name">
                  <span><?= $about_us[0]['section_name']?></span>
                  <h2 class="standard"><?= $about_us[0]['title']?></h2>	
                </div>
                <div class="about_left_part">
							<div class="about_left_cols_left">
                  <img src="<?php echo base_url(); ?>images/about_shape.png" class="img-fluid">
                </div>

                <div class="about_left_right_cols">
                  <div class="standard"><?= $about_us[0]['description']?></div>

                  <img src="<?php echo base_url(); ?>admin/public/uploads/about_us/<?= $about_us[0]['sign_image']?>" class="img-fluid mt-3" style="width:250px;">
                </div>
              </div>
              </div>
              <div class="col-md-6 order-lg-2 order-1">
                <img class="w-100" src="<?php echo base_url(); ?>admin/public/uploads/about_us/<?= $about_us[0]['banner_image']?>" alt="About Image">
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php 
            endif;
          endif;
          ?>
      <section id="section_video" class="section_video_parent">
        <video class="embed-responsive" autoplay="" muted="" playsinline="" loop="" src="https://jupiterx.artbees.net/business-2/wp-content/uploads/sites/416/2020/05/Pexels-Videos-946146.mp4"></video>

        <div class="container">
          <div class="row">
            <div class="section_video_innercontent hideit visibleit animated fadeIn slower">
              <div class="section_video_content">
                <span>#believeachieve</span>
                <h2 class="standard">
                  Don't miss another moment							</h2>
                <p class="standard">Isn't it time to find something to look forward to? At section, it's our mission to help you prioritise what matters most: living the life of your dreams.</p>
              </div>

              <div class="section_video_play_btn">
                <a href="javascript:void(0);">
                  <svg xmlns="https://www.w3.org/2000/svg" width="43.777" height="43.777" viewBox="0 0 43.777 43.777">
                  <path id="Path_2784" data-name="Path 2784" d="M0,0H43.777V43.777H0Z" fill="none"></path>
                  <path id="Path_2785" data-name="Path 2785" d="M11.438,11.912l9.06,6.38-9.06,6.38V11.912M8,5V31.585L26.911,18.293Z" transform="translate(7.302 3.596)" fill="#532f91"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials_sec reveal fade-bottom" id="testimoials-sec">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="video_testimonial_innercontent">
                <div class="owl-carousel testimonal_sllider" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: false, &quot;autoplay&quot;: true }">

                <?php
          if(is_array($testimonials)):
            if(count($testimonials) > 0):
            
          foreach ($testimonials as $key => $value):

            
        ?>

                  <div class="testimonial_video_box">
										<div class="video_testimonial_img">
											<img src="<?php echo base_url(); ?>admin/public/uploads/testimonial/<?= $value['profile_image']?>" class="img-fluid">
										</div>	
										<div class="video_testimonial_content">
											<p class="standard"><?= $value['comment']?></p>
											<h4><?= $value['name']?></h4>
											<h5><?= $value['city']?></h5>
										</div>
									</div>


                  <?php 
            endforeach;
            endif;
          endif;
          ?>
                  <!-- <div class="testimonial_video_box">
										<div class="video_testimonial_img">
											<img src="<?php echo base_url(); ?>images/testimonials/tm2.png" class="img-fluid">
										</div>	
										<div class="video_testimonial_content">
											<p class="standard">Since they launched, I never had any problem. Pathshala team is extremely knowledgeable and helpful if we have any queries. They have superb incentive plan which make them stand out from a lot of other direct selling companies.</p>
											<h4>GAURAV MUNJAL</h4>
											<h5>Hyderabad</h5>
										</div>
									</div> -->



                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

            <?php
          if(is_array($missions)):
            if(count($missions) > 0):
        ?>

      <section class="our_mission_parent">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-12">
              <div class="our_mission_left reveal fade-left">
                <img src="<?php echo base_url(); ?>admin/public/uploads/mission/<?= $missions[0]['image']?>" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-6 col-12">
              <div class="our_mission_right reveal fade-right">
                <h2><?= $missions[0]['title']?></h2>
                <p><?= $missions[0]['sub_title']?></p>
                <ul>
                  <li>
                    <img src="<?php echo base_url(); ?>admin/public/uploads/mission/<?= $missions[0]['icon_1']?>" class="img-fluid">
                    <p><?= $missions[0]['icon_text_1']?></p>
                  </li>

                  <li>
                    <img src="<?php echo base_url(); ?>admin/public/uploads/mission/<?= $missions[0]['icon_2']?>" class="img-fluid">
                    <p><?= $missions[0]['icon_text_2']?></p>
                  </li>

                  <li>
                    <img src="<?php echo base_url(); ?>admin/public/uploads/mission/<?= $missions[0]['icon_3']?>" class="img-fluid">
                    <p><?= $missions[0]['icon_text_3']?></p>
                  </li>
                </ul>
                <p><?= $missions[0]['description']?></p>
              </div>
            </div>
          </div>
        </div>
		  </section>
      <?php 
            endif;
          endif;
          ?>


<?php
          if(is_array($globals)):
            if(count($globals) > 0):
        ?>
      <section class="global_opportunities">
        <div class="container-fluid p-0">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="global-map-container reveal fade-left">
                <img src="<?php echo base_url(); ?>admin/public/uploads/globals/<?= $globals[0]['image']?>" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
                <div class="global_text_container reveal fade-right">       
                  <div class="global-text">
                    <h3><?= $globals[0]['transparent_text']?></h3>
                    <div class="global_opportunity_content hideit visibleit animated fadeInRight full-visible">
                      <h2><?= $globals[0]['title_left']?> <span><?= $globals[0]['title_right']?></span></h2>
                      <p><?= $globals[0]['description']?></p>			
                    </div> 
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <?php 
            endif;
          endif;
          ?>



      <section id="membership_section" class="memebership_section_parent">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="membership_headpart reveal fade-bottom">
                <h2>Membership</h2>
                <p class="standard">Want to decide how you spend your time? You've come to the right place! Maybe you're looking for a fun way to earn a little extra cash. Or perhaps you dream of starting your own business by connecting with others. Whatever your goal, we have a path for you. We have created a revolutionary business system that places you at the forefront of a huge financial revolution.</p>
              </div>
            </div>

            <div class="col-12">
              <div class="membership_monthly_charges_parent reveal fade-bottom">
                <p class="standard" style="text-transform: uppercase;"><strong>one-time lifetime membership cost</strong></p>
                <h4><sup>$</sup> 300<small>/One-Time</small></h4>
              
                <p class="mb-2 standard">The entryway into the business system has a one-time lifetime membership cost of USD 300.</p>
                <a href="sign-up" class="standard_btn" target="_blank">get started</a>
              </div>

              <div class="membership_monthly_normal_box">
                <p class="standard"><strong style="color:#532f91;">Early Believer Advantage:</strong> First 25,000 members will be airdropped complimentary tokens, as a gift of loyalty that will be valid for placing bets and cashing winnings at Pathshala Central.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="casino_industry_fact_parent">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="casino_industry_fact_headpart reveal fade-bottom">
                <h2>Casino Industry Worldwide</h2>
                <p>Owing to the legalisation of gambling-related activities and the growth of the experience economy in many parts of the world, licensed casinos have expanded to new markets and generated record-breaking revenue figures.</p>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12 col-lg-6">
              <div class="casino_facts_left_part reveal fade-left">
                <h4>Quick Facts</h4>
                <ul>
                  <li>In 2020, there were over one million workers employed.</li>
                  <li>There were over 187 thousand open gambling properties worldwide in 2020.</li>
                  <li>There are just under five thousand casinos across the globe.</li>
                  <li>The top casino by number of hotel rooms worldwide is the Casino de Genting in the Genting Highlands, Malaysia.</li>
                  <li>Texas Holdem Poker generates the most revenue among the games of fortune.</li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="casino_facts_right_part reveal fade-right">
                <ul>
                  <li style="background: #2e8dd9;">
                    <span>Pathshala</span>
                    <h5>In mid-2020, the market size of the global casinos and online gambling industry reached a total of</h5>
                    <p>227 Billion USD</p>
                  </li>

                  <li style="background: #102b48;">
                    <span>Pathshala</span>
                    <h5>Gambling in Macau, which was legalised in the 1850s, makes up a large portion of the region's economy</h5>
                    <p>36.7 Billion USD</p>
                  </li>

                  <li style="background: #0e897c;">
                    <span>Pathshala</span>
                    <h5>WinStar World Casino, located in Oklahoma in the United States, is the largest casino in the world</h5>
                    <p>600 Thousand square feet</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bigwigs_section_parent">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="bigwigs_headpart">
                <h2>What Do The Bigwigs Say?</h2>
              </div>

              <div class="owl-carousel bigwigs_sllider" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true }">

              <?php
          if(is_array($bigwigs)):
            if(count($bigwigs) > 0):
            
          foreach ($bigwigs as $key => $value):

            
        ?>
                <div class="bigwigs_testimonial">
                  <div class="bigwigs_testimonial_pic">
                    <img src="<?php echo base_url(); ?>admin/public/uploads/bigwig/<?= $value['profile_image']?>" class="img-fluid">
                  </div>
                  <div class="bigwigs_testimonial_content">
                    <p><?= $value['comment']?></p>
                    <h4><?= $value['name']?></h4>
                    <span><?= $value['designation']?></span>
                  </div>
                </div>

                <?php 
            endforeach;
            endif;
          endif;
          ?>
<!-- 
                <div class="bigwigs_testimonial">
                  <div class="bigwigs_testimonial_pic">
                    <img src="<?php echo base_url(); ?>images/bigwigs4.jpg" class="img-fluid">
                  </div>
                  <div class="bigwigs_testimonial_content">
                    <p>If I would be given a chance to start all over again, I would choose Network Marketing.</p>
                    <h4>Bill Gates</h4>
                    <span>American Business Magnate &amp; Philanthropist</span>
                  </div>
                </div>
 -->



              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
          if(is_array($opportunity)):
            if(count($opportunity) > 0):
        ?>

      <section id="opportunity_section" class="opportunity_parent" style="background: url(<?php echo base_url(); ?>admin/public/uploads/opportunity/<?= $opportunity[0]['image']?>) no-repeat; background-size: cover;
background-position: center center;">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="opportunity_headpart reveal fade-bottom">
                <h2><?= $opportunity[0]['title']?></h2>
                <p><?= $opportunity[0]['description']?></p>
              </div>
            </div>

            <div class="col-12">
              <div class="opportunity_grid reveal fade-bottom">
                <ul>
                  <li>
                    <div class="opportunity_box_child">
                      <div class="opportunity_icon">
                        <svg style=" fill: #ffffff;" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                          <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                        </svg>

                        <div class="opportunity_middle_icon">
                          <img src="<?php echo base_url(); ?>admin/public/uploads/opportunity/<?= $opportunity[0]['icon_1']?>" class="img-fluid">
                        </div>
                      </div>

                      <h4><?= $opportunity[0]['icon_text_1']?></h4>
                    </div>
                  </li>
                  <li>
                    <div class="opportunity_box_child">
                      <div class="opportunity_icon">
                        <svg style=" fill: #ffffff;" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                          <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                        </svg>

                        <div class="opportunity_middle_icon">
                          <img src="<?php echo base_url(); ?>admin/public/uploads/opportunity/<?= $opportunity[0]['icon_2']?>" class="img-fluid">
                        </div>
                      </div>	

                      <h4><?= $opportunity[0]['icon_text_2']?></h4>
                    </div>
                  </li>
                  <li>
                    <div class="opportunity_box_child">
                      <div class="opportunity_icon">
                        <svg style=" fill: #ffffff;" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                          <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                        </svg>

                        <div class="opportunity_middle_icon">
                          <img src="<?php echo base_url(); ?>admin/public/uploads/opportunity/<?= $opportunity[0]['icon_3']?>" class="img-fluid">
                        </div>
                      </div>

                      <h4><?= $opportunity[0]['icon_text_3']?></h4>
                    </div>
                  </li>
                </ul>

                <a href="<?= $opportunity[0]['button_link']?>" target="_blank"><?= $opportunity[0]['button_label']?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php 
            endif;
          endif;
          ?>

<?php
          if(is_array($rank)):
            if(count($rank) > 0):
        ?>

      <section class="world_class_incentives_section reveal fade-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="world_class_incentives_head">
							<h2 class=""><?= $rank[0]['title']?></h2>  
							<p class=""><?= $rank[0]['description']?></p> 
							<img class="img-fluid" src="<?php echo base_url(); ?>admin/public/uploads/ranks/<?= $rank[0]['image']?>"> 
							
						</div>					
					</div>     
				</div>  
			</div>      
		</section>
    <?php 
            endif;
          endif;
          ?>

<?php
          if(is_array($reward)):
            if(count($reward) > 0):
        ?>
    <section class="incredible_experience_section" style="background: #f7f5ff">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="lifestyle_left reveal fade-bottom">
							<h2><?= $reward[0]['title']?></h2>
							<h4><?= $reward[0]['sub_title']?></h4>
							<p><?= $reward[0]['description']?></p> 
						</div>	
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12">                     
						<img class="img-fluid reveal fade-bottom" src="<?php echo base_url(); ?>admin/public/uploads/rewards/<?= $reward[0]['image']?>">			 			 
					</div> 				
				</div>  
			</div>  	
		</section>
    <?php 
            endif;
          endif;
          ?>

<?php
          if(is_array($why)):
            if(count($why) > 0):
        ?>

    <section class="inspire_achieve_section">
      <div class="container-fluid p-0">
        <div class="row g-0 mx-0 flex-row inspire_achieve_content">
          <div class="col-md-8 p-0 inspire_achieve_left">
            <div class="row g-0 mx-0 flex-row inspire_achieve_left_content">
              <div class="col-md-6 p-0 inspire_achieve_left_image">
                <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/uploads/why_pathshala/<?= $why[0]['image']?>"> 
              </div>
              <div class="col-md-6 inspire_achieve_textbox">
                <div class="inspire_achieve_left_text">
                  <div class="inspire_text_inner">
                    <h4><?= $why[0]['title']?></h4>
                    <ol>
                      <li>Stable, debt-free company</li>
                      <li>Solid financial backing</li>
                      <li>Universal appeal</li>
                      <li>Opportunity to be a part of the burgeoning casino industry</li>
                      <li>Opportunity to build a global business from home</li>
                      <li>Be a part of the community that travels across the globe</li>
                      <li>Unmatched compensation plan</li>
                      <li>Never before timing opportunity</li>
                    </ol>	
                  </div>  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 p-0 inspire_achieve_right">
            <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/uploads/why_pathshala/<?= $why[0]['image2']?>"> 
          </div>
        </div>
      </div>
    </section>
    <?php 
            endif;
          endif;
          ?>


<?php
          if(is_array($richtext)):
            if(count($richtext) > 0):
        ?>


    <section class="bringing_people_section reveal fade-bottom">
			<div class="container h-100">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-12">
						<div class="bringing_people_innercontent">
							<h4><?= $richtext[0]['title']?></h4>
							<h2><?= $richtext[0]['sub_title']?></h2>
							<p><?= $richtext[0]['description']?></p>				
						</div> 
					</div> 
				</div>  
			</div>  	
		</section>
    <?php 
            endif;
          endif;
          ?>

<?php
          if(is_array($power)):
            if(count($power) > 0):
        ?>


    <section class="start_business_section">
      <div class="container-fluid p-0">
        <div class="row g-0 mx-0 flex-row start_business_content align-items-center">
          <div class="col-md-6 p-0 start_business_image">
            <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/uploads/power/<?= $power[0]['image']?>"> 
          </div>
          <div class="col-md-6 start_business_textbox">
            <div class="start_business_content">
              <div class="start_innercontent">
                <h3><?= $power[0]['title']?></h3>  
                <p><?= $power[0]['description']?></p> 
                <a href="<?= $power[0]['button_link']?>" target="_blank"><?= $power[0]['button_label']?></a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php 
            endif;
          endif;
          ?>



    <footer id="footer_id" class="footer_parent">
      <div class="footer_inner_parent">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3">
              <div class="footer_links foot_logo">
              <?php
          if(is_array($general)):
            if(count($general) > 0):
?>
              <a class="site-logo" href="<?php echo base_url();?>">
              <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/uploads/general/<?= $general[0]['logo']?>"> 

              <?php 
                endif;
              endif;
              ?>
            </a>
              </div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="footer_links foot_links">


                <h4>Quick Links</h4>		
                <ul>
        <?php
          if(is_array($nav2)):
            if(count($nav2) > 0):
          foreach ($nav2 as $key => $value):
?>

                  <li><a href="<?= $value['link']?>"><?= $value['name']?></a></li>

              <?php 
                  endforeach;
                endif;
              endif;
              ?>
    

                </ul>				
              </div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="footer_links">
              <?php
          if(is_array($general)):
            if(count($general) > 0):
?>
        
                <h4><?= $general[0]['column_title_3rd']?></h4>		
                <?= $general[0]['column_richtext_3rd']?>

                <?php 
                endif;
              endif;
              ?>    
              
              
              </div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="footer_links">
              <?php
          if(is_array($general)):
            if(count($general) > 0):
?>
        
                <h4><?= $general[0]['column_title_4th']?></h4>		
                <?= $general[0]['column_richtext_4th']?>

                <?php 
                endif;
              endif;
              ?>    	
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <!-- Blank Cols -->
            </div>

            <div class="col-12 col-lg-6">
              <div class="footer_links">
                <p>Regional Representative Offices opening soon.</p>
              </div>
            </div>
          </div>

          <hr> <!-- Horizontal Line --->

          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="lets_talk_box">
                <h4>Let’s connect</h4>
                <p>Zeal to excel?</p>
                <a href="mailto:support@Pathshala.com">SEND US AN EMAIL</a>
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="social_icon">
                <h4>Social</h4>
                <?php
                  if(is_array($general)):
                    if(count($general) > 0):
                 ?>
        
          
                <ul>
                  <li class="facebook"><a href="<?= $general[0]['facebook']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <!-- <li class="twitter"><a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i></a></li>  --> 
                  <li class="instagram"><a href="<?= $general[0]['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>  
                  <li class="blog"><a href="<?= $general[0]['blog']?>" target="_blank"><i class="fab fa-medium-m"></i></a></li>
                  <li class="telegram"><a href="<?= $general[0]['telegram']?>" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>  
                </ul>  
                <?php 
                endif;
              endif;
              ?> 
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="newsletter">
                <h4>Newsletter</h4>
                <form id="newsletter_form" method="post" novalidate="novalidate">
                  <input type="email" name="nemail" id="newsletter_email" placeholder="Your email address">
                  <input type="submit" id="foot_n_btn" value="SIGN UP">
                  <div class="newsletter_loader"><img src="<?php echo base_url(); ?>images/spinner_roll.gif" class="img-fluid"></div>
                  <input type="hidden" name="news_lang" id="news_lang" value="en">
                </form>
              </div>
            </div>

            <div class="col-12">
              <div class="copyright_box">
              <?php
          if(is_array($general)):
            if(count($general) > 0):
?>
                <p><?= $general[0]['copyright']?></p>
                <?php 
                endif;
              endif;
              ?>
    
                <ul>
                  <li><a href="" target="_blank">Terms of Use</a></li>
                  <li><a href="" target="_blank">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="telegram_floating_icon" style="display: block;">
        <a href="" target="_blank">
          <img src="<?php echo base_url(); ?>images/joinus_telegram.png" class="img-fluid">
        </a>
      </div>
    </footer>
      
      <!-- <section class="container" style="box-shadow: 0px 0px 8px #bbb;margin-top:20px;margin-bottom:20px;border: 1px solid #e1e7ec;border-radius:8px;padding-top:20px;padding-bottom:50px;">
        <h3 class="text-center mb-30" style="color:black;text-shadow: 2px 2px 4px #000000;font-size:20px !important;">Welcome To PATSHALA</h3>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="#">
              
              <div class="row">

                <div class="col-md-12">
                  <div class="teacher-info">


                    <div class="desc" style="text-align:justify;padding:5px;padding-top:10px;">
                      <p style="font-weight:bold;color:black;"><b>WELCOME TO PATSHALA</b></p>
                      <p style="font-size:15px;color:black !important;"><i>We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our We are here to help everyone who are our .....  <a href="#">Read More</a></i></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="#">
              <div class="row">
                <div class="col-md-12">
                  <div class="teacher-info">
                    <div class="desc" style="text-align:justify;padding:5px;padding-top:10px;">
                      <table class="table table-bordered" style="margin-top:10px;">
                        <thead>
                          <tr style="background-color:#17a2b8;">
                            <td style="color:black;text-align:center;font-size:16px;"colspan="2"><b>Celebrate</b></td>
                          </tr>
                          <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mahfuzur Rahman Khalili</td>
                            <td>First Class</td>
                          </tr>

                          <tr>
                            <td>Ziauddin Talukder</td>
                            <td>Second Class</td>
                          </tr>

                          <tr>
                            <td>Dewan Fazlur Rahman</td>
                            <td>Third Class</td>
                          </tr>

                          <tr>
                            <td>Mustaq Ahmed</td>
                            <td>Fourth Class</td>
                          </tr>

                          <tr>
                            <td>Akhter Ahmad</td>
                            <td>Fifth Class</td>
                          </tr>

                          <tr>
                            <td>Nowab Ali</td>
                            <td>Third Class</td>
                          </tr>

                          <tr>
                            <td>Mohammed Hanif</td>
                            <td>Fourth Class</td>
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

      </section> -->
      <!-- Site Footer-->
      <!-- <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch</h3>
                <p class="text-white">Phone: 000 111 222 333</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Saturday-Thursday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Friday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@patshala.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About LMS</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Your Account</a></li>
                </ul>
              </section>
            </div>
          </div>
          
  
        </div>
      </footer> -->
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
    <script type="text/javascript">
      //For Section Animation
      function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = reveals[i].getBoundingClientRect().top;
          var elementVisible = 150;

          if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
          } else {
            reveals[i].classList.remove("active");
          }
        }
      }

      window.addEventListener("scroll", reveal); 

      //For Fixed Header on scroll
      $(window).scroll(function(){
          if ($(window).scrollTop() >= 200) {
              $('.navbar').addClass('fixed-header');
          }
          else {
              $('.navbar').removeClass('fixed-header');
          }
      });

      jQuery(document).ready(function($) {
      // Scroll to the desired section on click
      // Make sure to add the `data-scroll` attribute to your `<a>` tag.
      // Example: 
      // `<a data-scroll href="#my-section">My Section</a>` will scroll to an element with the id of 'my-section'.
      function scrollToSection(event) {
        event.preventDefault();
        var $section = $($(this).attr('href')); 
        $('html, body').animate({
          scrollTop: $section.offset().top
        }, 500);
      }
      $('[data-scroll]').on('click', scrollToSection);
    }(jQuery));

      $('.offcanvas-menu .menu_item').click(function() {

          // $(this).siblings('.active').removeClass('active');

          if ($('.offcanvas-container').hasClass('active')) {
              $('.offcanvas-container').removeClass('active');
          } else {
              $('.offcanvas-container').addClass('active');
          }

          if ($('body').hasClass('offcanvas-open')) {
              $('body').removeClass('active');
          }

      });

      $('.offcanvas-menu .menu_item').click(function() {

      // $(this).siblings('.active').removeClass('active');

        if ($('body').hasClass('offcanvas-open')) {
            $('body').removeClass('offcanvas-open');
            $('body').css('overflow', 'visible');
        }else {
            $('body').addClass('offcanvas-open');
        }

      });
          

    </script>
  </body>
</html>

