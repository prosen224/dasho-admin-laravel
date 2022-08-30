<!DOCTYPE html>
<html lang="en">
<head>
  <title>Class Room View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .table td, .table th {
    padding: 2px !important;
    padding-top:2px !important;
    padding-left:3px !important;
    color:#FFFF00;
}
 a
 {
     color:#FFFF00;
     text-decoration:none;
 }
 a:hover
 {
     color:#FFFF00;
     text-decoration:none;
 }
  ul 
  {
      position: relative;
      top: 280px; left: 222px; /*for example purposes only*/
      list-style-type: none;
      margin: 0;
      padding: 0;
  }
  li {
      position: absolute;
      -webkit-transition: all 2s linear;
      -moz-transition: all 2s linear;
      transition: all 2s linear;
  }


  from {
      -ms-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -webkit-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    to {
      -ms-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -webkit-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }

  @keyframes rotating {
    from {
      -ms-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -webkit-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    to {
      -ms-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -webkit-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  .item_2 {
    -webkit-animation: rotating 15s linear infinite;
    -moz-animation: rotating 15s linear infinite;
    -ms-animation: rotating 15s linear infinite;
    -o-animation: rotating 15s linear infinite;
    animation: rotating 15s linear infinite;
    overflow: hidden;
/*     box-shadow: 0 0 8px 4px #868686;
*/  }

  #content-desktop {display: block;}
#content-mobile {display: none;}

@media screen and (max-width: 850px) {

#content-desktop {display: none;}
#content-mobile {display: block;}

}
/* relevant styles */

.img_description_1 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;

}
.first_member:hover .img_description_1 
{
  visibility: visible;
}

.img_description_2 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.second_member:hover .img_description_2 
{
  visibility: visible;
}

.img_description_3 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.third_member:hover .img_description_3 
{
  visibility: visible;
}

.img_description_4 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.fourth_member:hover .img_description_4 
{
  visibility: visible;
}

.img_description_5 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.fifth_member:hover .img_description_5 
{
  visibility: visible;
}

.img_description_6 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.sixth_member:hover .img_description_6 
{
  visibility: visible;
}

.img_description_7 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.seventh_member:hover .img_description_7 
{
  visibility: visible;
}

.img_description_8 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.eight_member:hover .img_description_8 
{
  visibility: visible;
}

.img_description_9 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.nine_member:hover .img_description_9 
{
  visibility: visible;
}

.img_description_10 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.ten_member:hover .img_description_10 
{
  visibility: visible;
}

.img_description_11 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.eleven_member:hover .img_description_11 
{
  visibility: visible;
}

.img_description_12 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.twelve_member:hover .img_description_12 
{
  visibility: visible;
}

.img_description_13 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.thirteen_member:hover .img_description_13 
{
  visibility: visible;
}

.img_description_14 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.fourteen_member:hover .img_description_14 
{
  visibility: visible;
}

.img_description_15 
{
  border: 3px solid #78909C;
  color:white !important;
  visibility: hidden;
  padding: 2px;
  position: relative;
  z-index:9000;
}
.fifteen_member:hover .img_description_15 
{
  visibility: visible;
}

.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}


.blink_me {
  border: 5px solid red;
  border-bottom: 5px solid red !important;
}

.custom_box_shadow
{
  box-shadow: 7px 5px 5px -3px rgba(92,92,92,0.4), 0px 5px 10px rgba(92,92,92,0.6), -7px 5px 5px -3px rgba(92,92,92,0.4);
  border-bottom: 1px dashed #444;
  /* z-index: 1; */
}

.li_custom_animation
{
    /*transition: all 2s !important;
    transform: scale(1) !important;*/
}

.li_custom_animation:hover
{
   /* transform: scale(1.2) !important;*/
}

.table td, .table th {
   
    color: red;
    padding: 5px !important;
}
.players {
  height: 100px;
  width: 100px;
  background-color: rgb(109,110,130);
  display: inline-block;
  border-radius:50%;
}

.winners {
  height: 100px;
  width: 100px;
  background-color: rgb(164,124,3);
  display: inline-block;
  border-radius:50%;
}

.icon {
  position: absolute;
  top: 50%;
  left: 65%;
  transform: translate(-50%,-50%);
  width: 70px;
  height: 60px;
  cursor: pointer;
}

.arrow {
  position: absolute;
  top: 70px;
  width: 70%;
  height: 10px;
  background-color: red;
  box-shadow: 0 3px 5px rgba(0, 0, 0, .2);
  animation: arrow 700ms linear infinite;
}

.arrow::after, .arrow::before {
  content: '';
  position: absolute;
  width: 60%;
  height: 10px;
  right: -8px;
  background-color: red;
}

.arrow::after {
  top: -12px;
  transform: rotate(45deg);
}

.arrow::before {
  top: 12px;
  box-shadow: 0 3px 5px rgba(0, 0, 0, .2);
  transform: rotate(-45deg);
}

.arrow_up {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

 /* .sixth_member .fifth_member .fourth_member .third_member  .second_member {
      z-index: 100 !important;
  } */
  </style>
</head>
<body style="background-color:white;min-width: 750px;">
<?php //print_r("ssss");die; 
  get_instance()->load->helper('common_helper');
?>

<div class="container-fluid">
<div class="row" style="padding-top:10px;background-color: rgb(109,110,130);">
    <div class="col-md-12 col-xs-12">
        <p style="font-weight:bold;text-align:center;"><span style="color:white;padding:15px;font-size:20px;">Junior Education Certificate</span></p>
    </div>
</div>
<div class="row" style="padding-top:10px;background-color:rgb(249,249,251)">
    <div class="col-md-4 col-xs-6">
       <p style="color:red;font-weight:bold;font-size:16px;">Board:: #<?php echo $common_result[0]['board_status'];?></p>
       <p style="font-weight:bold;font-size:16px;"><span style="background-color: rgb(109,110,130);color:white;padding:10px;">Junior Exam</span></p>
        <!--<p style="font-weight:bold;font-size:16px;"><span style="background-color: rgb(109,110,130);color:white;padding:10px;">Players Board</span> &nbsp;&nbsp;&nbsp;&nbsp;<span style="background-color: rgb(164,124,3);color:white;padding:10px;">Winners Board</span></p>-->
    </div>
    
    <div class="col-md-4 col-xs-6">
        <div class="col-md-3 col-xs-5">
            <div class="players">
                <p style="text-align:center;color:white;padding-top:35px;">
                    <?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?>
                    &nbsp;
                </p>
            </div>
        </div>
        <div class="col-md-2 col-xs-2">
            <div class="icon" align="left">
              <div class="arrow"></div>
            </div>
        </div>
        <div class="col-md-5 col-xs-5">
            <div class="winners">
                <?php if(isset($next_board_following_user)){?><a target="_blank" href="<?php echo base_url();?>index.php/Dashboard/DashboardController/SearchClassroomByUserIDLink/<?php echo $next_board_following_user_child_id;?>">
                <p style="text-align:center;color:white;padding-top:35px;">
                   <?php if(isset($next_board_following_user)){echo $next_board_following_user;} ?>
                </p>
                </a><?php } ?>
        </div>
        </div>
    </div>
    
    <div class="col-md-4  col-xs-12">
        <p class="pull-right" style="color:red;font-weight:bold;font-size:16px;">
             <form action="<?php echo base_url('SearchClassroomByUserID');?>" method="post" target="_blank" enctype=multipart/form-data>
                    <div class="form-group row">
                        <div class="col-md-6 pull-right">
                            <input type="text" class="form-control form-txt-default" name="user_id" placeholder="Search By User ID">
                            <br/>
                            <button style="font-size:16px;color:white;border-radius:22px;padding:10px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
        </p>
    </div>
</div>
  <div class="row">
    <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-md-offset-2" style="padding-left:100px;">
      <ul class="list-group">
        <li class="first_member custom_box_shadow <?php if(isset($common_result[0]['user_name'])){if($common_result[0]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:-30px;left:-2%; width:175px; height:175px; border-radius: 50%;<?php if(isset($common_result[0]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">

          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:45px;">
            <b><span style="font-size:19px;"><?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?></span></b>
            <br/>
            
              <?php 
                if(isset($common_result[0]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[0]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[0]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;

                    $first_downward='';
                    $second_downward='';
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                    
                        if($next_formatted_common_result_downline[$common_result[0]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[0]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[0]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[0]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[0]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[0]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[0]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[0]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        // print_r($downward);
                        // echo 'second done';
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[0]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[0]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[0]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[0]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                       
 
                    // }
                }
            ?>
             
            <?= get_available_point($common_result[0]["child_id"]);?>
          </p>
          <?php
            if(isset($common_result[0]['user_name']))
            {
          ?>
          <div class="bs-example img_description_1 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?></div>
                  <div class="card-body">
                       <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[0]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <td><?= $common_result[0]['reference_user']; ?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            
                            <td>
                            <?= get_available_point($common_result[0]["child_id"]); ?>
                            <?php //if(isset($common_result[0]['user_name'])){echo $common_result[0]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[0]["child_id"]); ?>  
                            <?php //echo $formatted_common_result[$common_result[0]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[0]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <!--<a href="#" class="btn btn-primary">Know more</a>-->
                  </div>
              </div>
          </div>
          <?php } ?>
       <!--  <p style="color:#78909C;" class="img_description_1">
          
        </p> -->
        </li>
        <li class="second_member custom_box_shadow <?php if(isset($common_result[14]['user_name'])){if($common_result[14]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[14]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['user_name'];}?></b></span>
          <br/>
         
             <?php 
  
                if(isset($common_result[14]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[14]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[14]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;

                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                         if($next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                   
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[14]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['points'];}?>
        </p>

            <div class="bs-example img_description_2" style="width:300px; background: #d9edf7;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;"><?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[14]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[14]["child_id"]); ?>  
                            <?php //if(isset($common_result[14]['user_name'])){echo $common_result[14]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[14]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[14]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[14]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table
                  </div>
              </div>
          </div>
        </li>

        <li class="second_member custom_box_shadow <?php if(isset($common_result[14]['user_name'])){if($common_result[14]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%;   z-index: 6; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[14]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['user_name'];}?></b></span>
          <br/>
         
              <?php 
  
                if(isset($common_result[14]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[14]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[14]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;

                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                         if($next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[14]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[14]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                   
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[14]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[14]['second_board_entrance_t'])
                    //     {
                    //          if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                       
 
                    // }
                }
            ?>
            <?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['points'];}?>
        </p>

        <?php
          if(isset($common_result[14]['user_name']))
          {
        ?>
            <div class="bs-example img_description_2 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[14]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                              <!-- //</td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[14]["child_id"]); ?>  
                            <?php //if(isset($common_result[14]['user_name'])){echo $common_result[14]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[14]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[14]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[14]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>
        </li>

        

      <li class= "third_member  custom_box_shadow <?php if(isset($common_result[13]['user_name'])){if($common_result[13]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%;  z-index: 5; width:115px; height:115px;  border-radius: 50%;<?php if(isset($common_result[13]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[13]['user_name'])){echo $common_result[13]['user_name'];}?></b></span>
          <br/>
        
             <?php 
  
                if(isset($common_result[13]['user_name']))
                {
                    
                     $downward=array();
                     if(isset($next_formatted_common_result_downline[$common_result[13]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[13]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[13]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[13]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[13]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[13]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[13]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[13]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[13]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[13]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[13]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[13]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[13]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[13]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[13]['user_name'])){echo $common_result[13]['points'];}?>
        </p>

        <?php
          if(isset($common_result[13]['user_name']))
          {
        ?>
        <div class="bs-example img_description_3 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[13]['user_name'])){echo $common_result[13]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[13]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[13]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[13]["child_id"]); ?>  
                            <?php //if(isset($common_result[13]['user_name'])){echo $common_result[13]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[13]["child_id"]); ?>   
                            <?php //echo $formatted_common_result[$common_result[13]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[13]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>
      </li>


      <li class="fourth_member custom_box_shadow <?php if(isset($common_result[12]['user_name'])){if($common_result[12]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px;  height:115px; z-index: 4;border-radius: 50%;<?php if(isset($common_result[12]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[12]['user_name'])){echo $common_result[12]['user_name'];}?></b></span>
          <br/>
        
             <?php 
  
                if(isset($common_result[12]['user_name']))
                {
                    
                     $downward=array();
                     if(isset($next_formatted_common_result_downline[$common_result[12]['child_id']])):
                        foreach($next_formatted_common_result_downline[$common_result[12]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                        {
                            
                            $downward[]=$index;
                        }
                      endif;

                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[12]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[12]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[12]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[12]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[12]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[12]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[12]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[12]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                         if($next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[12]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[12]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[12]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     // if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[12]['second_board_entrance_t'])
                    //     // {
                            
                    //     // }
                        
                    //     if($row_next_formatted_common_result_downline['status']=='s')
                    //     {
                    //         echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //     }
                    //     else
                    //     {
                    //         echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //     }
                            
                    // }
                    }
                ?>
                <?php if(isset($common_result[12]['user_name'])){echo $common_result[12]['points'];}?>
            </p>

            <?php
              if(isset($common_result[12]['user_name']))
              {
            ?>
            <div class="bs-example img_description_4 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[12]['user_name'])){echo $common_result[12]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[12]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[12]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[12]["child_id"]); ?>  
                            <?php //if(isset($common_result[12]['user_name'])){echo $common_result[12]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[12]["child_id"]); ?>    
                            <?php // echo $formatted_common_result[$common_result[12]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[12]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>
      </li>

      <li class="fifth_member custom_box_shadow <?php if(isset($common_result[11]['user_name'])){if($common_result[11]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; z-index: 3;  height:115px;border-radius: 50%;<?php if(isset($common_result[11]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[11]['user_name'])){echo $common_result[11]['user_name'];}?></b></span>
          <br/>
        
             <?php 
  
                if(isset($common_result[11]['user_name']))
                {
                    
                     $downward=array();
                     if(isset($next_formatted_common_result_downline[$common_result[11]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[11]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[11]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[11]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[11]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[11]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[11]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[11]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[11]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[11]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[11]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[11]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[11]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[11]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
 
                    // }
                }
            ?>
            <?php if(isset($common_result[11]['user_name'])){echo $common_result[11]['points'];}?>
        </p>

        <?php
          if(isset($common_result[11]['user_name']))
          {
        ?>
        <div class="bs-example img_description_5 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[11]['user_name'])){echo $common_result[11]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[11]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[11]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[11]["child_id"]); ?>  
                            <?php //if(isset($common_result[11]['user_name'])){echo $common_result[11]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[11]["child_id"]); ?>  
                            <?php //echo $formatted_common_result[$common_result[11]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[11]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

      </li>

    <li class="sixth_member custom_box_shadow <?php if(isset($common_result[10]['user_name'])){if($common_result[10]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; z-index:2; height:115px;border-radius: 50%;<?php if(isset($common_result[10]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[10]['user_name'])){echo $common_result[10]['user_name'];}?></b></span>
          <br/>
         
             <?php 
  
                if(isset($common_result[10]['user_name']))
                {
                    
                     $downward=array();
                     if(isset($next_formatted_common_result_downline[$common_result[10]['child_id']])):
                    foreach($next_formatted_common_result_downline[$common_result[10]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                    {
                        
                        $downward[]=$index;
                    }
                  endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[10]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[10]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[10]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[10]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[10]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[10]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[10]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[10]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                         if($next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[10]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[10]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[10]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[10]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[10]['user_name'])){echo $common_result[10]['points'];}?>
        </p>


        <?php
          if(isset($common_result[10]['user_name']))
          {
        ?>
        <div class="bs-example img_description_6 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[10]['user_name'])){echo $common_result[10]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[10]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[10]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[10]["child_id"]); ?>  
                            <?php //if(isset($common_result[10]['user_name'])){echo $common_result[10]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[10]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[10]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[10]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>
      </li>

        <li class="i_am_9 seventh_member custom_box_shadow <?php if(isset($common_result[9]['user_name'])){if($common_result[9]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[9]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>" data-childId="">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[9]['user_name'])){echo $common_result[9]['user_name'];}?></b></span>
          <br/>
              <?php 
  
                if(isset($common_result[9]['user_name']))
                {
                     
                     $downward=array();
                    //  echo json_encode($next_formatted_common_result_downline);
                    if(isset($next_formatted_common_result_downline[$common_result[9]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[9]['child_id']] as $indexi=>$row_next_formatted_common_result_downline)
                      {
                        // echo $indexi;
                          $downward[]=$indexi;
                      }
                    endif;
                    // print_r($downward);
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                      // second_board_entrance_t = promotion date
                        if($next_formatted_common_result_downline[$common_result[9]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[9]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[9]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[9]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[9]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[9]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[9]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[9]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        // print_r($downward);
                         if($next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[9]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[9]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[9]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>

            <?php if(isset($common_result[9]['user_name'])){echo $common_result[9]['points'];}?>
            <?php  
            // echo "<pre>";
            // print_r($first_downward['user_name']);
            // print_r($next_formatted_common_result_downline[$common_result[9]['child_id']][$first_downward]['user_name'])
             ?>
        </p>

        <?php
          if(isset($common_result[9]['user_name']))
          {
        ?>
        <div class="bs-example img_description_7 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[9]['user_name'])){echo $common_result[9]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[9]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[9]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[9]["child_id"]); ?>  
                            <?php //if(isset($common_result[9]['user_name'])){echo $common_result[9]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[9]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[9]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[9]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        <li class="eight_member custom_box_shadow <?php if(isset($common_result[8]['user_name'])){if($common_result[8]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[8]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[8]['user_name'])){echo $common_result[8]['user_name'];}?></b></span>
          <br/>
          
             <?php 
  
                if(isset($common_result[8]['user_name']))
                {
                    
                     $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[8]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[8]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                         if($next_formatted_common_result_downline[$common_result[8]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[8]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[8]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[8]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[8]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[8]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[8]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[8]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[8]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[8]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                   
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[8]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[8]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[8]['user_name'])){echo $common_result[8]['points'];}?>
        </p>

        <?php
          if(isset($common_result[8]['user_name']))
          {
        ?>
        <div class="bs-example img_description_8 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[8]['user_name'])){echo $common_result[8]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[8]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[8]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[8]["child_id"]); ?>  
                            <?php //if(isset($common_result[8]['user_name'])){echo $common_result[8]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[8]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[8]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[8]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        
        <li class="nine_member custom_box_shadow <?php if(isset($common_result[7]['user_name'])){if($common_result[7]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[7]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">  
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['user_name'];}?></b></span>
          <br/>
          
              <?php 
  
                if(isset($common_result[7]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[7]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[7]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[7]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[7]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[7]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[7]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[7]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[7]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[7]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[7]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if(isset($first_downward)):
                          if(@$next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['second_board_entrance_t'] >= @$common_result[7]['second_board_entrance_t'])
                          {
                              if($next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['status']=='s')
                              {
                                  echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                              }
                              else
                              {
                                  echo $next_formatted_common_result_downline[$common_result[7]['child_id']][$first_downward]['user_name'].'<br/>';
                              }
                          }
                        endif;
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[7]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[7]['second_board_entrance_t'])
                    //     {
                    //          if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                       
 
                    // }
                }
            ?>
            <?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['points'];}?>
        </p>

        <?php
          if(isset($common_result[7]['user_name']))
          {
        ?>
        <div class="bs-example img_description_9 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[7]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[7]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[7]["child_id"]); ?>
                              <?php //if(isset($common_result[7]['user_name'])){echo $common_result[7]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[7]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[7]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[7]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>

        <li class="ten_member custom_box_shadow <?php if(isset($common_result[6]['user_name'])){if($common_result[6]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[6]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['user_name'];}?></b></span>
          <br/>
          
             <?php 
  
                if(isset($common_result[6]['user_name']))
                {
                  // echo "<pre>";
                  // var_dump($next_formatted_common_result_downline[$common_result[6]['child_id']]);die;
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[6]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[6]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[6]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[6]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[6]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[6]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[6]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[6]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[6]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[6]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                         if($next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['second_board_entrance_t'] >= $common_result[6]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[6]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[6]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[6]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['points'];}?>
        </p>

        <?php
          if(isset($common_result[6]['user_name']))
          {
        ?>
        <div class="bs-example img_description_10 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[6]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[6]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[6]["child_id"]); ?>  
                            <?php //if(isset($common_result[6]['user_name'])){echo $common_result[6]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[6]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[6]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[6]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>

        <li class="eleven_member custom_box_shadow <?php if(isset($common_result[5]['user_name'])){if($common_result[5]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[5]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['user_name'];}?></b></span>
          <br/>
         
             <?php 
  
                if(isset($common_result[5]['user_name']))
                {
                    
                    $downward=array();
                      if(isset($next_formatted_common_result_downline[$common_result[5]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[5]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;

                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[5]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[5]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[5]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[5]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[5]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[5]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[5]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[5]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[5]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[5]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[5]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[5]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['points'];}?>
        </p>


        <?php
          if(isset($common_result[5]['user_name']))
          {
        ?>
        <div class="bs-example img_description_11 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[5]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[5]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[5]["child_id"]); ?>  
                            <?php //if(isset($common_result[5]['user_name'])){echo $common_result[5]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[5]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[5]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[5]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="twelve_member custom_box_shadow <?php if(isset($common_result[4]['user_name'])){if($common_result[4]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:1; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[4]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['user_name'];}?></b></span>
          <br/>
          
             <?php 
  
                if(isset($common_result[4]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[4]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[4]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[4]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[4]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[4]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[4]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[4]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[4]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[4]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[4]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[4]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[4]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[4]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[4]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                        
 
                    // }
                }
            ?>
            <?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['points'];}?>
        </p>

        <?php
          if(isset($common_result[4]['user_name']))
          {
        ?>
        <div class="bs-example img_description_12 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[4]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[4]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[4]["child_id"]); ?>  
                            <?php //if(isset($common_result[4]['user_name'])){echo $common_result[4]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[4]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[4]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[4]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="thirteen_member custom_box_shadow <?php if(isset($common_result[3]['user_name'])){if($common_result[3]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; z-index:1; height:115px;border-radius: 50%;<?php if(isset($common_result[3]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['user_name'];}?></b></span>
          <br/>
          
            <?php 
  
                if(isset($common_result[3]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[3]['child_id']] )):
                      foreach($next_formatted_common_result_downline[$common_result[3]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                        if($next_formatted_common_result_downline[$common_result[3]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[3]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[3]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[3]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[3]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[3]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[3]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[3]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                        if($next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[3]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[3]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[3]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[3]['second_board_entrance_t'])
                    //     {
                    //          if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                        
                       
 
                    // }
                }
            ?>
            <?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['points'];}?>
        </p>

        <?php
          if(isset($common_result[3]['user_name']))
          {
        ?>
        <div class="bs-example img_description_13 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[3]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[3]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[3]["child_id"]); ?>  
                            <?php //if(isset($common_result[3]['user_name'])){echo $common_result[3]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[3]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[3]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[3]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fourteen_member custom_box_shadow <?php if(isset($common_result[2]['user_name'])){if($common_result[2]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; z-index:8; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[2]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['user_name'];}?></b></span>
          <br/>
          
             <?php 
  
                if(isset($common_result[2]['user_name']))
                {
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[2]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[2]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          
                          $downward[]=$index;
                      }
                    endif;
                    
                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                         if($next_formatted_common_result_downline[$common_result[2]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[2]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[2]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[2]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[2]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[2]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[2]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[2]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                         if($next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[2]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[2]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                   
                    
                    // foreach($next_formatted_common_result_downline[$common_result[2]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[2]['second_board_entrance_t'])
                    //     {
                    //          if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
                    // }
                }
            ?>
            <?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['points'];}?>
        </p>

        <?php
          if(isset($common_result[2]['user_name']))
          {
        ?>
        <div class="bs-example img_description_14 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[2]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[2]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                            <!-- </td> -->
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[2]["child_id"]); ?>  
                            <?php //if(isset($common_result[2]['user_name'])){echo $common_result[2]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[2]["child_id"]); ?>    
                            <?php //echo $formatted_common_result[$common_result[2]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[2]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fifteen_member custom_box_shadow <?php if(isset($common_result[1]['user_name'])){if($common_result[1]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%;width:115px; z-index:7;  height:115px;border-radius: 50%;<?php if(isset($common_result[1]['user_name'])){echo 'background-color:rgb(109,110,130)';} ?>" >
          
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
            <b><span style="font-size:19px;"><?php if(isset($common_result[1]['user_name'])){echo $common_result[1]['user_name'];}?></b></span>
            <br/>
         
         <?php 
                
                
                if(isset($common_result[1]['user_name']))
                {
                    
                    $downward=array();
                    if(isset($next_formatted_common_result_downline[$common_result[1]['child_id']])):
                      foreach($next_formatted_common_result_downline[$common_result[1]['child_id']] as $index=>$row_next_formatted_common_result_downline)
                      {
                          $downward[]=$index;
                      }
                    endif;

                    $first_downward='';
                    $second_downward='';
                    
                    if(isset($downward[0]) && isset($downward[1]))
                    {
                         if($next_formatted_common_result_downline[$common_result[1]['child_id']][$downward[0]]['second_board_entrance_t']>$next_formatted_common_result_downline[$common_result[1]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[0];
                            $first_downward=$downward[1];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[1]['child_id']][$downward[0]]['second_board_entrance_t']<$next_formatted_common_result_downline[$common_result[1]['child_id']][$downward[1]]['second_board_entrance_t'])
                        {
                            $second_downward=$downward[1];
                            $first_downward=$downward[0];
                        }
                        
                        if($next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[1]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                        // var_dump($next_formatted_common_result_downline);die;
                        if($next_formatted_common_result_downline[$common_result[1]['child_id']][$second_downward]['second_board_entrance_t']>=$common_result[1]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[1]['child_id']][$second_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$second_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$second_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    else if(isset($downward[0]))
                    {
                        $first_downward=$downward[0];
                         if($next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['second_board_entrance_t']>=$common_result[1]['second_board_entrance_t'])
                        {
                             if($next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['status']=='s')
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['user_name'].' *'.'<br/>';
                            }
                            else
                            {
                                echo $next_formatted_common_result_downline[$common_result[1]['child_id']][$first_downward]['user_name'].'<br/>';
                            }
                        }
                    }
                    
                   
                    
                    
                    
                    
                    // foreach($next_formatted_common_result_downline[$common_result[1]['child_id']] as $row_next_formatted_common_result_downline)
                    // {
                    //     if($row_next_formatted_common_result_downline['second_board_entrance_t']>=$common_result[1]['second_board_entrance_t'])
                    //     {
                    //         if($row_next_formatted_common_result_downline['status']=='s')
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].' *'.'<br/>';
                    //         }
                    //         else
                    //         {
                    //             echo $row_next_formatted_common_result_downline['user_name'].'<br/>';
                    //         }
                    //     }
 
                    // }
                }
            ?>
            <?= get_available_point($common_result[1]["child_id"]); ?>
          </p>

          <?php
          if(isset($common_result[1]['user_name']))
          {
        ?>
        <div class="bs-example img_description_15 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[1]['user_name'])){echo $common_result[1]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result[$common_result[1]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Reference User</td>
                            <!-- <td> -->
                            <td><?= $common_result[1]['reference_user']; ?></td>
                              <?php //echo $formatted_common_result[$common_result[14]['child_id']]['sponsors_name'];?>
                          <!-- </tr> -->
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td>Junior Associate</td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td>
                            <?= get_available_point($common_result[1]["child_id"]); ?>  
                            <?php //if(isset($common_result[1]['user_name'])){echo $common_result[1]['points'];}?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td>
                            <?= get_available_coin($common_result[1]["child_id"]); ?>  
                            <?php //echo $formatted_common_result[$common_result[1]['child_id']]['total_coins'];?></td>
                          </tr>
                          <tr>
                            <td>Entrance Time</td>
                            <td><?php echo $formatted_common_result[$common_result[1]['child_id']]['second_board_entrance_t'];?></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>



      </ul>
    </div>
 
  </div>

<div class="row" style="margin-top:700px;margin-bottom:20px;background-color:rgb(249,249,251)">

<p style="text-align:center;color:red;font-weight:bold;font-size:22px;padding-top:25px;">Boards Following</p>
<hr/>

<?php //var_dump($formatted_common_result_following_board);  ?>
<?php foreach($formatted_common_result_following_board as $index=>$row_formatted_common_result_following_board){?>
  <?php foreach($row_formatted_common_result_following_board as $row_row_row_formatted_common_result_following_board){?>
  <div class="col-md-2" style="padding-bottom:30px !important;">
    <div class="bs-example">
      <div class="card text-center">
          <div class="card-body"  style="width:150px; height:150px;border-radius: 50%;background-color:rgb(34, 73, 142);">
              <p style="text-align:center;padding-top:30px !important;color:white;" title="<?php echo $row_row_row_formatted_common_result_following_board['user_name'].' is Following '.$formatted_common_result[$index]['user_name'];?>">
                  
                  
                <?php echo '<span style="font-size:14px;">'.$formatted_common_result[$index]['user_name'].'<br/>'.'<i class="arrow_up up"></i>'.'</span>'.'<br/>';?>
                
                <a target="_blank" href="<?php echo base_url();?>index.php/Dashboard/DashboardController/SearchClassroomByUserIDLink/<?php echo $row_row_row_formatted_common_result_following_board['child_id'];?>"><?php echo ''.'<span style="padding:25px;font-size:18px;color:yellow;">'.$row_row_row_formatted_common_result_following_board['user_name'].'</span>';?></a>



              <br/>
              <?php
              if(isset($formatted_following_child_board_exp[$row_row_row_formatted_common_result_following_board['child_id']]))
              {
                  foreach($formatted_following_child_board_exp[$row_row_row_formatted_common_result_following_board['child_id']] as $exp_following_id)
                  {
                    if(isset($exp_following_id['user_name']))
                    {
                        echo '<span style="font-size:12px;">'.$exp_following_id['user_name'].'</span>';
                        echo '<br>';
                    }
                    
                  }
              }
              
              ?>
            </p>
          </div>
      </div>
    </div>
    

  </div>
<?php } } ?>

<!--<div class="col-md-12">-->
<!--    <p style="background-color: rgb(109,110,130);text-align:center;color:white;font-weight:bold;font-size:16px;padding-top:25px;padding-bottom:25px;">&copy; Copyright 2021 by PathshalaGlobal. All Rights reserved.</p>-->
<!--</div>-->
</div>



</div>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
var type = 1,
    radius = '19em',
    start = -90,
    $elements = $('li:not(:first-child)'),
    numberOfElements = (type !== 1) ?  $elements.length : $elements.length - 1,
    slice = 360 * type / numberOfElements;
    $elements.each(function(i) {
    var $self = $(this),
        rotate = slice * i + start,
        rotateReverse = rotate * -1;
    
    $self.css({
        'transform': 'rotate(' + rotate + 'deg) translate(' + radius + ') rotate(' + rotateReverse + 'deg)'
    });
});
</script>
