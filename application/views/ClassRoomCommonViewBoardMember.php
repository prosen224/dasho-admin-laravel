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
  /* z-index: 3 !important; */
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
  height: 90px;
  width: 90px;
  background-color: rgb(34,73,142);
  display: inline-block;
  border-radius:50%;
}

.winners {
  height: 90px;
  width: 90px;
  background-color: rgb(109,110,130);
  display: inline-block;
  border-radius:50%;
}

.icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 80px;
  height: 60px;
  cursor: pointer;
}

.arrow {
  position: absolute;
  top: 70px;
  width: 90%;
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


  </style>
</head>
<body style="background-color:white;min-width: 900px;">
<?php //print_r("ssss");die; ?>
<div class="container-fluid">
<div class="row" style="padding-top:10px;background-color:rgb(249,249,251)">
    <div class="col-md-4 col-xs-6">
       <p style="color:red;font-weight:bold;font-size:16px;">Board:: #<?php echo $common_result[0]['board_status'];?></p>
        <p style="font-weight:bold;font-size:16px;"><span style="background-color: rgb(34, 73, 142);color:white;padding:10px;">Players Board</span> &nbsp;&nbsp;&nbsp;&nbsp;<span style="background-color: rgb(109,110,130);color:white;padding:10px;">Winners Board</span></p>
    </div>
    
    <div class="col-md-4 col-xs-6">
        <div class="col-md-3 col-xs-5">
            <div class="players">
                <p style="text-align:center;color:white;padding-top:35px;">
                <?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?>
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
        <li class="first_member custom_box_shadow <?php if(isset($board_member[0]['user_name'])){if($board_member[0]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:-30px;left:-2%; width:175px; height:175px; border-radius: 50%;<?php if(isset($board_member[0]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">

          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:45px;">
            <b><span style="font-size:19px;"><?php if(isset($board_member[0]['user_name'])){echo $board_member[0]['user_name'];}?></span></b>
            <br/>         
            <?php
            if(isset($board_member[0]['user_name']))
            {
              if(isset($formatted_common_result_downline_board_member[$board_member[0]['child_id']][0]))
              {

                echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[0]['child_id']][0]['user_name'].'</span>';

              }
              echo '<br/>';
              if(isset($formatted_common_result_downline_board_member[$board_member[0]['child_id']][1]))
              {
                echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[0]['child_id']][1]['user_name'].'</span>';
              }
            } 
            
            ?>
          </p>
          <?php
            if(isset($board_member[0]['user_name']))
            {
          ?>
          <div class="bs-example img_description_1 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[0]['user_name'])){echo $board_member[0]['user_name'];}?></div>
                  <div class="card-body">
                       <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[0]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[0]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[0]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[0]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
          <?php } ?>
       <!--  <p style="color:#78909C;" class="img_description_1">
          
        </p> -->
        </li>
        <li class="second_member custom_box_shadow <?php if(isset($board_member[14]['user_name'])){if($board_member[14]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px; border-radius: 50%;<?php if(isset($board_member[14]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[14]['user_name'])){echo $board_member[14]['user_name'];}?></b></span>
          <br/>
         
         <?php
          if(isset($common_result[7]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[7]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[7]['child_id']][0]['user_name'].'</span>';
            }
            echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[7]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[7]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <div class="bs-example img_description_2" style="width:300px;background: #d9edf7;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;"><?php if(isset($board_member[14]['user_name'])){echo $board_member[14]['user_name'];}?></div>
                  <div class="card-body">
                        <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        </li>

        <li class="second_member custom_box_shadow <?php if(isset($common_result[7]['user_name'])){if($common_result[7]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px; border-radius: 50%;<?php if(isset($common_result[7]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['user_name'];}?></b></span>
          <br/>
         
          <?php
          if(isset($common_result[7]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[7]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[7]['child_id']][0]['user_name'].'</span>';
            }
            echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[7]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[7]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[7]['user_name']))
          {
        ?>
        <div class="bs-example img_description_2 bg-info" style="width:300px; background: #d9edf7;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[7]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>
        </li>

        

        <li class= "third_member  custom_box_shadow <?php if(isset($common_result[6]['user_name'])){if($common_result[6]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%;width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[6]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['user_name'];}?></b></span>
          <br/>
        
          <?php
          if(isset($common_result[6]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[6]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[6]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[6]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[6]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[6]['user_name']))
          {
        ?>
        <div class="bs-example img_description_3 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[6]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[6]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[6]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[6]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fourth_member custom_box_shadow <?php if(isset($common_result[5]['user_name'])){if($common_result[5]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[5]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['user_name'];}?></b></span>
          <br/>
        
          <?php
          if(isset($common_result[5]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[5]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[5]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[5]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[5]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[5]['user_name']))
          {
        ?>
        <div class="bs-example img_description_4 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[5]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[5]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[5]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[5]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fifth_member custom_box_shadow <?php if(isset($common_result[4]['user_name'])){if($common_result[4]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[4]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['user_name'];}?></b></span>
          <br/>
        
          <?php
          if(isset($common_result[4]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[4]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[4]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[4]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[4]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[4]['user_name']))
          {
        ?>
        <div class="bs-example img_description_5 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[4]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[4]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[4]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[4]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        <li class="sixth_member custom_box_shadow <?php if(isset($common_result[3]['user_name'])){if($common_result[3]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[3]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['user_name'];}?></b></span>
          <br/>
         
          <?php
          if(isset($common_result[3]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[3]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[3]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[3]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[3]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>


        <?php
          if(isset($common_result[3]['user_name']))
          {
        ?>
        <div class="bs-example img_description_6 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[3]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[3]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[3]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[3]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        <li class="seventh_member custom_box_shadow <?php if(isset($common_result[2]['user_name'])){if($common_result[2]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[2]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['user_name'];}?></b></span>
          <br/>
         
          <?php
          if(isset($common_result[2]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[2]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[2]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[2]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[2]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[2]['user_name']))
          {
        ?>
        <div class="bs-example img_description_7 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[2]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[2]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[2]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[2]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        <li class="eight_member custom_box_shadow <?php if(isset($common_result[1]['user_name'])){if($common_result[1]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[1]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[1]['user_name'])){echo $common_result[1]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($common_result[1]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[1]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[1]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[1]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[1]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[1]['user_name']))
          {
        ?>
        <div class="bs-example img_description_8 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[1]['user_name'])){echo $common_result[1]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[1]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[1]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[1]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[1]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
        
        <li class="nine_member custom_box_shadow <?php if(isset($common_result[0]['user_name'])){if($common_result[0]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($common_result[0]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">  
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($common_result[0]['user_name']))
          {
            if(isset($formatted_common_result_downline[$common_result[0]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[0]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline[$common_result[0]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline[$common_result[0]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($common_result[0]['user_name']))
          {
        ?>
        <div class="bs-example img_description_9 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                       <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_common_result_details[$common_result[0]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_common_result_details[$common_result[0]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_common_result_details[$common_result[0]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_common_result_details[$common_result[0]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>

        <li class="ten_member custom_box_shadow <?php if(isset($board_member[6]['user_name'])){if($board_member[6]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[6]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[6]['user_name'])){echo $board_member[6]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($board_member[6]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[6]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[6]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[6]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[6]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($board_member[6]['user_name']))
          {
        ?>
        <div class="bs-example img_description_10 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[6]['user_name'])){echo $board_member[6]['user_name'];}?></div>
                  <div class="card-body">
                     <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[6]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[6]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[6]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[6]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>

        <li class="eleven_member custom_box_shadow <?php if(isset($board_member[5]['user_name'])){if($board_member[5]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[5]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[5]['user_name'])){echo $board_member[5]['user_name'];}?></b></span>
          <br/>
         
          <?php
          if(isset($board_member[5]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[5]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[5]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[5]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[5]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>


        <?php
          if(isset($board_member[5]['user_name']))
          {
        ?>
        <div class="bs-example img_description_11 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[5]['user_name'])){echo $board_member[5]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[5]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[5]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[5]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[5]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="twelve_member custom_box_shadow <?php if(isset($board_member[4]['user_name'])){if($board_member[4]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[4]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[4]['user_name'])){echo $board_member[4]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($board_member[4]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[4]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[4]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[4]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[4]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($board_member[4]['user_name']))
          {
        ?>
        <div class="bs-example img_description_12 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[4]['user_name'])){echo $board_member[4]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[4]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[4]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[4]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[4]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="thirteen_member custom_box_shadow <?php if(isset($board_member[3]['user_name'])){if($board_member[3]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[3]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[3]['user_name'])){echo $board_member[3]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($board_member[3]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[3]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[3]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[3]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[3]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($board_member[3]['user_name']))
          {
        ?>
        <div class="bs-example img_description_13 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[3]['user_name'])){echo $board_member[3]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[3]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[3]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[3]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[3]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fourteen_member custom_box_shadow <?php if(isset($board_member[2]['user_name'])){if($board_member[2]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%; width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[2]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>">
        <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
          <b><span style="font-size:19px;"><?php if(isset($board_member[2]['user_name'])){echo $board_member[2]['user_name'];}?></b></span>
          <br/>
          
          <?php
          if(isset($board_member[2]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[2]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[2]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[2]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[2]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
        </p>

        <?php
          if(isset($board_member[2]['user_name']))
          {
        ?>
        <div class="bs-example img_description_14 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[2]['user_name'])){echo $board_member[2]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[2]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[2]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[2]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[2]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>


        </li>
        <li class="fifteen_member custom_box_shadow <?php if(isset($board_member[1]['user_name'])){if($board_member[1]['user_name']==$own_user_name['user_name']){echo 'blink_me';} }?>" style="top:5px;left:3%;width:115px; height:115px;border-radius: 50%;<?php if(isset($board_member[1]['user_name'])){echo 'background-color:rgb(34,73,142)';} ?>" >
          
          <p class="li_custom_animation" style="text-align:center;color:white;padding-top:22px;">
            <b><span style="font-size:19px;"><?php if(isset($board_member[1]['user_name'])){echo $board_member[1]['user_name'];}?></b></span>
            <br/>
         
          <?php
          if(isset($board_member[1]['user_name']))
          {
            if(isset($formatted_common_result_downline_board_member[$board_member[1]['child_id']][0]))
            {

              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[1]['child_id']][0]['user_name'].'</span>';
            }
             echo '<br/>';
            if(isset($formatted_common_result_downline_board_member[$board_member[1]['child_id']][1]))
            {
              echo '<span style="font-size:14px;">'.$formatted_common_result_downline_board_member[$board_member[1]['child_id']][1]['user_name'].'</span>';
            }
          } 
          
          ?>
          </p>

          <?php
          if(isset($board_member[1]['user_name']))
          {
        ?>
        <div class="bs-example img_description_15 bg-info" style="width:300px;">
              <div class="card text-center">
                  <div class="card-header bg-primary" style="padding:15px;font-weight:bold;font-size:18px;"><?php if(isset($board_member[1]['user_name'])){echo $board_member[1]['user_name'];}?></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Direct Sponsor</td>
                            <td><?php echo $formatted_board_member_details[$board_member[1]['child_id']]['sponsors_name'];?></td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>Bangladesh</td>
                          </tr>
                          <tr>
                            <td>Rank</td>
                            <td><?php echo $formatted_board_member_details[$board_member[1]['child_id']]['rank'];?></td>
                          </tr>
                          <tr>
                            <td>Total Points</td>
                            <td><?php echo $formatted_board_member_details[$board_member[1]['child_id']]['total_points'];?></td>
                          </tr>
                          <tr>
                            <td>Total Coins</td>
                            <td><?php echo $formatted_board_member_details[$board_member[1]['child_id']]['total_coins'];?></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="#" class="btn btn-primary">Know more</a>
                  </div>
              </div>
          </div>
        <?php } ?>

        </li>
      </ul>
    </div>
 
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