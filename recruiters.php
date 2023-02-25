<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<title>Basic of HTML</title>
<style>
img
{
height:auto;
width:100%;
}

</style>


</head>
<body>
    

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><script language="javascript">'use strict';$(function() {var width = 720; var animationSpeed = 2500; var pause = 3000; var currentSlide = 1;var $sdr1235 = $('#sdr1235'); var $slideContainer = $('.sld', $sdr1235); var $sld = $('.slide', $sdr1235); var interval; function startsdr1235() { interval = setInterval(function() { $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {if (++currentSlide === $sld.length) {currentSlide = 1; $slideContainer.css('margin-left', 0); }});}, pause);} function pausesdr1235() {clearInterval(interval);}$slideContainer.on('mouseenter', pausesdr1235).on('mouseleave', startsdr1235);startsdr1235();});</script><div style="width: 720px; margin: 0 auto;"><div style="position: relative; width: 720px; "><style type="text/css">#gpoy {position: absolute; right:-168px; top:5px; padding: 8px 0px 3px; z-index:99; opacity: 0.9; transition: 1s;  line-height: 12px;}.repper {width: 730px; margin: 0 auto; position: relative; overflow: hidden; border-radius: 20px; box-shadow: 7px 7px 9px #888888 ;}.repper:hover #gpoy {transition: 2s; right:25px; }</style><div class="repper"><div id="gpoy"><A style="font-weight: normal;  text-shadow: 1px 1px #555555; color: #FFFFFF; text-decoration:none; font-size: 8pt; line-height:10px; font-family: arial;" HREF="http://www.123-banner.com" TARGET="_blank">&#127817; Voucher Maker</A></div><style type="text/css">#sdr1235 {width: 720px; height: 400px; border: 5px solid #FFFFFF; border-radius: 20px; overflow: hidden; position: relative; cursor: pointer; }#sdr1235 .sld {width: 2880px; height: 400px;  display: block; margin: 0; padding: 0;}#sdr1235 .slide {width: 720px; height: 400px; float: left; list-style-type: none;}.DOT211230 {position: absolute; max-width: 720px; margin: 0px;}.c180263  {position: absolute; bottom: 0px; width:100%;  padding: 12px; background-color: rgba(0, 0, 0, 0.5); color: #FFFFFF; font-size:24pt; font-family:Tahoma; text-align:center; line-height:48px; z-index:33; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}</style>

<div id="sdr1235">
<ul class="sld">

<li class="slide slide1">
 <figure class="DOT211230">
  <IMG SRC="New folder/logo-godrej.png"> 
 </figure>
 </li>

<li class="slide slide2">
 <figure class="DOT211230">
  <IMG SRC="New folder/logo-godrej.png"> 
 </figure>
 </li>

<li class="slide slide3">
 <figure class="DOT211230">
  <IMG SRC="New folder/logo-godrej.png"> 
 </figure>
 </li>

<li class="slide slide1">
 <figure class="DOT211230">
  <IMG SRC="New folder/logo-godrej.png"> 
 </figure>
 </li>

</ul></div></div></div>
</div>


<hr>

</body>

</html>