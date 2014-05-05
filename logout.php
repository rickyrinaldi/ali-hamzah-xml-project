<?
session_start();
session_unset();
session_destroy();
ob_start();
header("location:index.php");
ob_end_flush(); 
include 'index.php';
//include 'index.php';
exit();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="slider/themes/default/default.css" />
    <link rel="stylesheet" href="slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
<form action="login.php" method="GET">
<center><div class="box">
<div class="header">
</div>
<div class="slideshow">
 <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="slider/demo/images/Perpus Soeman HS.jpg" data-thumb="slider/demo/images/Perpus Soeman HS.jpg" alt="" />
                <img src="slider/demo/images/perpustakaan.jpg" data-thumb="slider/demo/images/perpustakaan.jpg" alt="" title=""/>
                
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                
            </div>
        </div>

    <script type="text/javascript" src="slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</div>
<div class="column-left">
Username  <input type="text" name="nama" size="25" style="margin: 10px;"><BR>
Password  <input type="password" name="pass" size="25" style="margin-left: 9px;">
<input type="submit" name="login" value="Login" style="margin: 5px; margin-right:50px;">

</div>
</div></center>
