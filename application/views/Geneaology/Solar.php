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
    background: #080e24 url(http://neography.com/experiment/circles/solarsystem/bg.jpg) repeat;
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
    width: 30px;
    height: 30px;
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
    width: 70px;
    height: 70px;
    -webkit-border-radius: 52px;
    -moz-border-radius: 52px;
    border-radius: 52px;
    top: 285px;
    left: 445px;
    z-index: 99;
}
ul.solarsystem li.mercury span {
    background: #b6bac5;
    top: -2px;
    left: 6px;
}
ul.solarsystem li.venus {
    width: 110px;
    height: 110px;
    -webkit-border-radius: 82px;
    -moz-border-radius: 82px;
    border-radius: 82px;
    top: 262px;
    left: 425px;
    z-index: 98;
}
ul.solarsystem li.venus span {
    background: #bf8639;
    top: 86px;
    left: 5px;
}
ul.solarsystem li.earth {
    width: 150px;
    height: 150px;
    -webkit-border-radius: 112px;
    -moz-border-radius: 112px;
    border-radius: 112px;
    top: 242px;
    left: 405px;
    z-index: 97;
}
ul.solarsystem li.earth span {
    background: #06c;
    top: 17px;
    left: 5px;
}
ul.solarsystem li.earth span.moon {
    width: 4px;
    height: 4px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background: #ccc;
    top: 12px;
    left: 12px;
}
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
/*ul.solarsystem li.asteroids_meteorids {
    top: 155px;
    left: 315px;
    z-index: 1;
    background: url(http://neography.com/experiment/circles/solarsystem/asteroids_meteorids.png) no-repeat 0 0;
    width: 330px;
    height: 330px;
    -webkit-border-radius: 165px;
    -moz-border-radius: 165px;
    border-radius: 165px;
    border: none;
}*/
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
    color: #386077;
    -webkit-transition: all 0.15s ease-in;
    -moz-transition: all 0.15s ease-in;
    -o-transition: all 0.15s ease-in;
    transition: all 0.15s ease-in;
    font-size: 17px;
    position: relative;
    z-index: 101;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    margin-bottom: -10px;
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
ul.solarsystem li.mercury {-webkit-animation-duration:5s; -moz-animation-duration:5s;}
ul.solarsystem li.venus {-webkit-animation-duration:8s; -moz-animation-duration:8s;}
ul.solarsystem li.earth {-webkit-animation-duration:12s; -moz-animation-duration:12s;}
ul.solarsystem li.earth span {-webkit-animation-duration:2s; -moz-animation-duration:2s;}
ul.solarsystem li.mars {-webkit-animation-duration:20s; -moz-animation-duration:20s;}
ul.solarsystem li.asteroids_meteorids {-webkit-animation-duration:50s; -moz-animation-duration:50s;}
ul.solarsystem li.jupiter {-webkit-animation-duration:30s; -moz-animation-duration:30s;}
ul.solarsystem li.saturn {-webkit-animation-duration:60s; -moz-animation-duration:60s;}
ul.solarsystem li.uranus {-webkit-animation-duration:70s; -moz-animation-duration:70s;}
ul.solarsystem li.neptune {-webkit-animation-duration:100s; -moz-animation-duration:100s;}
ul.solarsystem li.pluto {-webkit-animation-duration:120s; -moz-animation-duration:120s;}
ul.solarsystem li.pluto1 {-webkit-animation-duration:130s; -moz-animation-duration:130s;}
ul.solarsystem li.pluto2 {-webkit-animation-duration:150s; -moz-animation-duration:150s;}

ul.solarsystem li.pluto3 {-webkit-animation-duration:160s; -moz-animation-duration:160s;}
ul.solarsystem li.pluto4 {-webkit-animation-duration:170s; -moz-animation-duration:170s;}
ul.solarsystem li.pluto5 {-webkit-animation-duration:180s; -moz-animation-duration:180s;}

@-webkit-keyframes orbit { from { -webkit-transform:rotate(0deg) } to { -webkit-transform:rotate(360deg) } }
@-webkit-keyframes moon { from { -webkit-transform:rotate(0deg) } to { -webkit-transform:rotate(360deg) } }

@-moz-keyframes orbit { from { -moz-transform:rotate(0deg) } to { -moz-transform:rotate(360deg) } }
@-moz-keyframes moon { from { -moz-transform:rotate(0deg) } to { -moz-transform:rotate(360deg) } }




</style>
</head>
<body>
<div class="row" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
    <div class="col-sm-12" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
        <div class="card" style="padding-left:0px !important;padding-right:0px !important;margin-left:0px !important;margin-right:0px !important;">
            <section class="clearfix">

    <ul class="solarsystem">
      <li class="sun"><a href="#sun"><span>Sun</span></a></li>
      <li class="mercury"><a href="#mercury"><span>Mercury</span></a></li>
      <li class="venus"><a href="#venus"><span>Venus</span></a></li>
      <li class="earth"><a href="#earth"><span>Earth<span class="moon"> &amp; Moon</span></span></a></li>
      <li class="mars"><a href="#mars"><span>Mars</span></a></li>

<!--      <li class="asteroids_meteorids"><span>Asteroids &amp; Meteorids</span></li>
 -->      
      <li class="jupiter"><a href="#jupiter"><span>Jupiter</span></a></li>
      <li class="saturn"><a href="#saturn"><span>Saturn &amp; <span class="ring">Ring</span></span></a></li>
      <li class="uranus"><a href="#uranus"><span>Uranus</span></a></li>
      <li class="neptune"><a href="#neptune"><span>Neptune</span></a></li>
      <li class="pluto"><a href="#pluto"><span>Pluto</span></a></li>
      <li class="pluto1"><a href="#pluto1"><span>Pluto1</span></a></li>
      <li class="pluto2"><a href="#pluto2"><span>Pluto2</span></a></li>
      <li class="pluto3"><a href="#pluto3"><span>Pluto3</span></a></li>
      <li class="pluto4"><a href="#pluto4"><span>Pluto4</span></a></li>
      <li class="pluto5"><a href="#pluto5"><span>Pluto5</span></a></li>
    </ul>
   
    <ul id="descriptions">
        <li>
        <h2 id="sun">First Person</h2>
        <p>First Person</p>
        </li>
       
        <li>
        <h2 id="mercury">Second Person</h2>
        <p>Second Person</p>
        </li>
       
        <li>
        <h2 id="venus">Third Person</h2>
        <p>Third Person</p>
        </li>
       
        <li>
        <h2 id="earth">Fourth Person</h2>
        <p>Fourth Person</p>
        </li>
       
        <li>
        <h2 id="mars">Fifth Person</h2>
        <p>Fifth Person</p>
        </li>
       
        <li>
        <h2 id="jupiter">Sixth Person</h2>
        <p>Sixth Person</p>
        </li>
       
        <li>
        <h2 id="saturn">Seventh Person</h2>
        <p>Seventh Person</p>
        </li>
       
        <li>
        <h2 id="uranus">Eighth Person</h2>
        <p>Eighth Person</p>
        </li>
       
        <li>
        <h2 id="neptune">Ninth Person</h2>
        <p>Ninth Person</p>
        </li>
       
        <li>
        <h2 id="pluto">Tenth Person</h2>
        <p>Tenth Person</p>
        </li>

        <li>
        <h2 id="pluto">Eleventh Person</h2>
        <p>Eleventh Person</p>
        </li>

        <li>
        <h2 id="pluto">Twelvth Person</h2>
        <p>Twelvth Person</p>
        </li>

        <li>
        <h2 id="pluto">Thirteenth Person</h2>
        <p>Thirteenth Person</p>
        </li>

        <li>
        <h2 id="pluto">Fourteenth Person</h2>
        <p>Fourteenth Person</p>
        </li>

        <li>
        <h2 id="pluto">Fifteenth Person</h2>
        <p>Fifteenth Person</p>
        </li>
    </ul>
</section>
        </div>
    </div>
</div>
</body>
</html>