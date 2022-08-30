<html>
<head>

<style>
.table td, .table th {
    padding: .25rem;
}
.table td, .table tr {
    padding: .15rem;
}
.btn {
    padding: 2px 5px;
}



.card {
    font: 14px/1.5 "PT Sans Narrow", sans-serif;
    background: #080e24 url(https://bkshop.minagazi.com/PathShala/images/MIT-Dwarf-Halo-01-press_0.jpg) repeat;
    color: #626668;
    font: 14px/1.5 "PT Sans Narrow", sans-serif;
    color: #626668;
}

/* Solar System Styles */
ul.solarsystem {
    position: relative;
    height: 640px;
    list-style: none;
    -webkit-transition: all 0.09s ease-in;
    -moz-transition: all 0.09s ease-in;
    -o-transition: all 0.09s ease-in;
    transition: all 0.09s ease-in;
    overflow: hidden;
}
ul.solarsystem li {
    text-indent: -9999px;
    display: block;
    position: absolute;
    border: 2px solid #394057;
/*    opacity: 0.7;*/
}
ul.solarsystem li span {
    display: block;
    position: absolute;
    width: 40px;
    height: 40px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
ul.solarsystem li.active {
    border-color: #aa4200;
}
ul.solarsystem li.active.sun,
ul.solarsystem li.active span {
    -webkit-transform: scale(1.3);
    -moz-transform: scale(1.3);
    -o-transform: scale(1.3);
    transform: scale(1.3);
}
ul.solarsystem li.active.sun span,
ul.solarsystem li.active.earth .moon {
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
ul.solarsystem li.sun {
    width: 40px;
    height: 40px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    background: #fc3;
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.22, rgb(204,153,0)),
        color-stop(1, rgb(255,219,112))
    );
    background-image: -moz-linear-gradient(
        center bottom,
        rgb(204,153,0) 22%,
        rgb(255,219,112) 100%
    );
    top: 302px;
    left: 462px;
    border: none;
    -webkit-box-shadow: 0 0 50px #c90;
    -moz-box-shadow: 0 0 50px #c90;
    box-shadow: 0 0 50px #c90;
    z-index: 100;
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
}
ul.solarsystem li.sun span {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;  
}
ul.solarsystem li.mercury {
    width: 200px;
    height: 200px;
    -webkit-border-radius: 102px;
    -moz-border-radius: 102px;
    border-radius: 102px;
    top: 220px;
    left: 385px;
    z-index: 99;
}
ul.solarsystem li.mercury1 {
    width: 200px;
    height: 200px;
    -webkit-border-radius: 102px;
    -moz-border-radius: 102px;
    border-radius: 102px;
    top: 220px;
    left: 385px;
    z-index: 999;
}


ul.solarsystem li.mercury span {
    background: #f04941;
    top: 23px;
    left: 6px;
}

ul.solarsystem li.mercury1 span {
    background: #e52d91;
    top: 23px;
    left: 6px;
}
ul.solarsystem li.venus {
    width: 340px;
    height: 340px;
    -webkit-border-radius: 180px;
    -moz-border-radius: 180px;
    border-radius: 180px;
    top: 150px;
    left: 315px;
    z-index: 98;
}

ul.solarsystem li.venus1 {
    width: 340px;
    height: 340px;
    -webkit-border-radius: 180px;
    -moz-border-radius: 180px;
    border-radius: 180px;
    top: 150px;
    left: 315px;
    z-index: 98;
}

ul.solarsystem li.venus2 {
    width: 340px;
    height: 340px;
    -webkit-border-radius: 180px;
    -moz-border-radius: 180px;
    border-radius: 180px;
    top: 150px;
    left: 315px;
    z-index: 98;
}

ul.solarsystem li.venus3 {
    width: 340px;
    height: 340px;
    -webkit-border-radius: 180px;
    -moz-border-radius: 180px;
    border-radius: 180px;
    top: 150px;
    left: 315px;
    z-index: 98;
}


ul.solarsystem li.venus span {
    background: #69bf3a;
    top: 86px;
    left: 5px;
}

ul.solarsystem li.venus1 span {
    background: #36b871;
    top: 86px;
    left: 5px;
}
ul.solarsystem li.venus2 span {
    background: #2ab7c0;
    top: 86px;
    left: 5px;
}
ul.solarsystem li.venus3 span {
    background: #45aad3;
    top: 86px;
    left: 5px;
}


ul.solarsystem li.earth {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}

ul.solarsystem li.earth1 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth2 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth3 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth4 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth5 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth6 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}
ul.solarsystem li.earth7 {
    width: 480px;
    height: 480px;
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px;
    top: 80px;
    left: 245px;
    z-index: 97;
}


ul.solarsystem li.earth span {
    background: #9c34a6;
    top: 115px;
    left: 5px;
}

ul.solarsystem li.earth1 span {
    background: #18FFFF;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth2 span {
    background: #00E676;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth3 span {
    background: #F9A825;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth4 span {
    background: #FF7043;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth5 span {
    background: #FF7043;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth6 span {
    background: #de288e;
    top: 115px;
    left: 5px;
}
ul.solarsystem li.earth7 span {
    background: #007d2d;
    top: 115px;
    left: 5px;
}

/*ul.solarsystem li.earth span.moon {
    width: 4px;
    height: 4px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background: #ccc;
    top: 12px;
    left: 12px;
}*/
ul.solarsystem li.mars {
    width: 190px;
    height: 190px;
    -webkit-border-radius: 142px;
    -moz-border-radius: 142px;
    border-radius: 142px;
    top: 220px;
    left: 385px;
    z-index: 96;
}
ul.solarsystem li.mars span {
    background: #aa4200;
    top: 48px;
    left: 175px;
}

ul.solarsystem li.jupiter {
    width: 230px;
    height: 230px;
    -webkit-border-radius: 172px;
    -moz-border-radius: 172px;
    border-radius: 172px;
    top: 200px;
    left: 365px;
    z-index: 95;
}
ul.solarsystem li.jupiter span {
    background: #e0ae6f;
    top: 17px;
    left: 24px;
}
ul.solarsystem li.saturn {
    width: 260px;
    height: 260px;
    -webkit-border-radius: 202px;
    -moz-border-radius: 202px;
    border-radius: 202px;
    top: 185px;
    left: 350px;
    z-index: 94;
}
ul.solarsystem li.saturn span {
    background: #dfd3a9;
    top: 20px;
    left: 200px;
}
ul.solarsystem li.saturn span.ring {
    width: 12px;
    height: 12px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    background: none;
    border: 2px solid #5a4e34;
    left: -3px;
    top: -3px;
    -webkit-transform: skewY(50deg);
    -moz-transform: skewY(50deg);
    -o-transform: skewY(50deg);
    transform: skewY(50deg);
}
ul.solarsystem li.uranus {
    width: 300px;
    height: 300px;
    -webkit-border-radius: 232px;
    -moz-border-radius: 232px;
    border-radius: 232px;
    top: 165px;
    left: 330px;
    z-index: 93;
}
ul.solarsystem li.uranus span {
    background: #82b3d1;
    top: 30px;
    left: 250px;
}
ul.solarsystem li.neptune {
    width: 340px;
    height: 340px;
    -webkit-border-radius: 262px;
    -moz-border-radius: 262px;
    border-radius: 262px;
    top: 145px;
    left: 310px;
    z-index: 92;
}
ul.solarsystem li.neptune span {
    background: #77c2ec;
    top: -5px;
    left: 200px;
}
ul.solarsystem li.pluto {
    width: 380px;
    height: 380px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 125px;
    left: 290px;
    z-index: 91;
}

ul.solarsystem li.pluto span {
    background: #7c6a5c;
    top: -10px;
    left: 150px;
}

ul.solarsystem li.pluto1 {
    width: 420px;
    height: 420px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 105px;
    left: 270px;
    z-index: 91;
}

ul.solarsystem li.pluto1 span {
    background: #7c6a5c;
    top: 0px;
    left: 100px;
}

ul.solarsystem li.pluto2 {
    width: 460px;
    height: 460px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 85px;
    left: 250px;
    z-index: 90;
}

ul.solarsystem li.pluto2 span {
    background: #7c6a5c;
    top: 45px;
    left: 50px;
}

ul.solarsystem li.pluto3 {
    width: 500px;
    height: 500px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 65px;
    left: 230px;
    z-index: 89;
}

ul.solarsystem li.pluto3 span {
    background: #7c6a5c;
    top: 85px;
    left: 30px;
}


ul.solarsystem li.pluto4 {
    width: 540px;
    height: 540px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 45px;
    left: 210px;
    z-index: 88;
}

ul.solarsystem li.pluto4 span {
    background: #7c6a5c;
    top: 58px;
    left: 68px;
}

ul.solarsystem li.pluto5 {
    width: 580px;
    height: 580px;
    -webkit-border-radius: 292px;
    -moz-border-radius: 292px;
    border-radius: 292px;
    top: 25px;
    left: 190px;
    z-index: 87;
}

ul.solarsystem li.pluto5 span {
    background: #7c6a5c;
    top: 66px;
    left: 66px;
}

ul#descriptions {
    position: absolute;
    top: 60px;
    right: 100px;
    list-style: none;
}
ul#descriptions h2 {
    cursor: pointer;
    color: white;
    -webkit-transition: all 0.15s ease-in;
    -moz-transition: all 0.15s ease-in;
    -o-transition: all 0.15s ease-in;
    transition: all 0.15s ease-in;
    font-size: 26px;
    padding-bottom:0px;
    position: relative;
    z-index: 101;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    margin-bottom: -30px;
}
ul#descriptions h2:hover {
   color: #aa4200;
    -webkit-transform: scale(1.08);
    -moz-transform: scale(1.08);
    -o-transform: scale(1.08);
    transform: scale(1.08);
}
ul#descriptions li p {
    position: absolute;
    left: -250px;
    top: 0;
    width: 200px;
    display: inline;
    opacity: 0;
    visibility: hidden;
    font-size: 13px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    background: #0f132c;
    padding: 30px;
    color: #767892;
    line-height: 1.7;
    z-index: 100;
    border: 1px solid #1c203c;
}
ul#descriptions h2:hover+p {
    visibility: visible;
    opacity: 0.9;
    left: -280px;
}

/* CSS3 Animations */
ul.solarsystem li {
    -webkit-animation-iteration-count:infinite;
    -webkit-animation-timing-function:linear;
    -webkit-animation-name:orbit;
   
    -moz-animation-iteration-count:infinite;
    -moz-animation-timing-function:linear;
    -moz-animation-name:orbit;
}
ul.solarsystem li.earth span {
    -webkit-animation-iteration-count:infinite;
    -webkit-animation-timing-function:linear;
    -webkit-animation-name:moon;
   
    -moz-animation-iteration-count:infinite;
    -moz-animation-timing-function:linear;
    -moz-animation-name:moon;
}


ul.solarsystem li.mercury {-webkit-animation-duration:10s; -moz-animation-duration:10s;}
ul.solarsystem li.mercury1 {-webkit-animation-duration:5s; -moz-animation-duration:5s;}

ul.solarsystem li.venus {-webkit-animation-duration:35s; -moz-animation-duration:35s;}
ul.solarsystem li.venus1 {-webkit-animation-duration:30s; -moz-animation-duration:20s;}
ul.solarsystem li.venus2 {-webkit-animation-duration:25s; -moz-animation-duration:15s;}
ul.solarsystem li.venus3 {-webkit-animation-duration:20s; -moz-animation-duration:8s;}


ul.solarsystem li.earth {-webkit-animation-duration:55s; -moz-animation-duration:10s;}
ul.solarsystem li.earth1 {-webkit-animation-duration:50s; -moz-animation-duration:5s;}
ul.solarsystem li.earth2 {-webkit-animation-duration:45s; -moz-animation-duration:8s;}
ul.solarsystem li.earth3 {-webkit-animation-duration:40s; -moz-animation-duration:11s;}
ul.solarsystem li.earth4 {-webkit-animation-duration:35s; -moz-animation-duration:14s;}
ul.solarsystem li.earth5 {-webkit-animation-duration:30s; -moz-animation-duration:17s;}
ul.solarsystem li.earth6 {-webkit-animation-duration:25s; -moz-animation-duration:20s;}
ul.solarsystem li.earth7 {-webkit-animation-duration:20s; -moz-animation-duration:23s;}


@-webkit-keyframes orbit { from { -webkit-transform:rotate(0deg) } to { -webkit-transform:rotate(360deg) } }
@-webkit-keyframes moon { from { -webkit-transform:rotate(0deg) } to { -webkit-transform:rotate(360deg) } }

@-moz-keyframes orbit { from { -moz-transform:rotate(0deg) } to { -moz-transform:rotate(360deg) } }
@-moz-keyframes moon { from { -moz-transform:rotate(0deg) } to { -moz-transform:rotate(360deg) } }

/*ul.solarsystem li {*/
/*    text-indent: 0px;*/
/*    font-size:5px;*/
/*    padding-left:2px;*/
/*    padding-top:15px;*/
    
/*}*/

/*ul.solarsystem li a{*/
/*    color:white !important;*/
    
/*}*/


</style>
</head>
<body>
<div class="row" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
    <div class="col-sm-12" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
        <div class="card" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
            <section class="clearfix">

    <ul class="solarsystem">
    <?php if(isset($common_result[0]['user_name'])){ ?>
      <li class="sun"><a href="#sun"><span><?php if(isset($common_result[0]['user_name'])){echo $common_result[0]['user_name'];} ?></span></a></li>
    <? } ?>  
    <?php if(isset($common_result[1]['user_name'])){ ?>
      <li class="mercury"><a href="#mercury"><span><?php if(isset($common_result[1]['user_name'])){echo $common_result[1]['user_name'];} ?></span></a></li>
    <? } ?>
     <?php if(isset($common_result[2]['user_name'])){ ?>
      <li class="mercury1"><a href="#mercury1"><span><?php if(isset($common_result[2]['user_name'])){echo $common_result[2]['user_name'];} ?></span></a></li>
    <? } ?>
    <?php if(isset($common_result[3]['user_name'])){ ?>
      <li class="venus"><a href="#venus"><span><?php if(isset($common_result[3]['user_name'])){echo $common_result[3]['user_name'];} ?></span></a></li>
     <? } ?>
    <?php if(isset($common_result[4]['user_name'])){ ?>
      <li class="venus1"><a href="#venus1"><span><?php if(isset($common_result[4]['user_name'])){echo $common_result[4]['user_name'];} ?></span></a></li>
     <? } ?>
     <?php if(isset($common_result[5]['user_name'])){ ?>
      <li class="venus2"><a href="#venus2"><span><?php if(isset($common_result[5]['user_name'])){echo $common_result[5]['user_name'];} ?></span></a></li>
     <? } ?>
    <?php if(isset($common_result[6]['user_name'])){ ?>
      <li class="venus3"><a href="#venus3"><span><?php if(isset($common_result[6]['user_name'])){echo $common_result[6]['user_name'];} ?></span></a></li>
    <? } ?>
    <?php if(isset($common_result[7]['user_name'])){ ?>
      <li class="earth"><a href="#earth"><span><?php if(isset($common_result[7]['user_name'])){echo $common_result[7]['user_name'];} ?></span></a></li>
    <?php } ?>
    <?php if(isset($common_result[8]['user_name'])){ ?>
      <li class="earth1"><a href="#earth1"><span><?php if(isset($common_result[8]['user_name'])){echo $common_result[8]['user_name'];} ?></span></a></li>
     <?php } ?>
     <?php if(isset($common_result[9]['user_name'])){ ?> 
      <li class="earth2"><a href="#earth2"><span><?php if(isset($common_result[9]['user_name'])){echo $common_result[9]['user_name'];} ?></span></a></li>
     <?php } ?>
     <?php if(isset($common_result[10]['user_name'])){ ?>
      <li class="earth3"><a href="#earth3"><span><?php if(isset($common_result[10]['user_name'])){echo $common_result[10]['user_name'];} ?></span></a></li>
    <?php } ?>
      <?php if(isset($common_result[11]['user_name'])){ ?>
      <li class="earth4"><a href="#earth4"><span><?php if(isset($common_result[11]['user_name'])){echo $common_result[11]['user_name'];} ?></span></a></li>
      <?php } ?>
      <?php if(isset($common_result[12]['user_name'])){ ?>
      <li class="earth5"><a href="#earth5"><span><?php if(isset($common_result[12]['user_name'])){echo $common_result[12]['user_name'];} ?></span></a></li>
      <?php } ?>
      <?php if(isset($common_result[13]['user_name'])){ ?>
      <li class="earth6"><a href="#earth6"><span><?php if(isset($common_result[13]['user_name'])){echo $common_result[13]['user_name'];} ?></span></a></li>
      <?php } ?>
      <?php if(isset($common_result[14]['user_name'])){ ?>
      <li class="earth7"><a href="#earth7"><span><?php if(isset($common_result[14]['user_name'])){echo $common_result[14]['user_name'];} ?></span></a></li>
    <?php } ?>
    </ul>
   
  
   
    <ul id="descriptions">
  
       
        
        <?php 
        foreach($common_result as $index=>$row_common_result)
        {
            if(isset($index)==0)
            {
                $color_code='#f04941';
            }
            else if(isset($index)==1)
            {
                $color_code='#e52d91';
            }
            else if(isset($index)==2)
            {
                $color_code='#69bf3a';
            }
            else if(isset($index)==3)
            {
                $color_code='#36b871';
            }
             else if(isset($index)==4)
            {
                $color_code='#2ab7c0';
            }
              else if(isset($index)==5)
            {
                $color_code='#45aad3';
            }
              else if(isset($index)==6)
            {
                $color_code='#9c34a6';
            }
            else if(isset($index)==7)
            {
                $color_code='#18FFFF';
            }
            else if(isset($index)==8)
            {
                $color_code='#00E676';
            }
            else if(isset($index)==9)
            {
                $color_code='#F9A825';
            }
            else if(isset($index)==10)
            {
                $color_code='#FF7043';
            }
             else if(isset($index)==11)
            {
                $color_code='#FF7043';
            }
              else if(isset($index)==12)
            {
                $color_code='#de288e';
            }
              else if(isset($index)==13)
            {
                $color_code='#007d2d';
            }
            else{$color_code='#007d2d';}
        ?>
        <li>
        <h2 style="color:<?php echo $color_code;?>" id="<?php echo $row_common_result['child_id'];?>"><?php echo $row_common_result['user_name']; ?></h2>
        <p style="color:<?php echo $color_code;?>"><?php echo $row_common_result['user_name']; ?></p>
        </li>
        <?php } ?>
    </ul>
</section>
        </div>
    </div>
</div>
</body>
</html>