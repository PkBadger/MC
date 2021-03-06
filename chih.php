<?php

require_once('login.php');
?>
<html>
	<head>
        <meta charset="UTF-8">
      	<link rel="stylesheet" href="foundation/css/foundation.css" />
      	<link rel="stylesheet" href="css/VariosDis.css" />
        <script src="foundation/js/vendor/modernizr.js"></script>
        <script src="foundation/js/vendor/jquery.js"></script>
        <script src="foundation/js/foundation.min.js"></script>
         <script src="JS/GeneralVars.js"></script>
      	
         <script src="JS/getparam.js"></script>
    <script type="text/javascript">
        var mapa = getUrlParameter('mapa');
    </script>
	</head>
	<body>
    <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Chihuahua</h1>
      </section>
     

      
    </nav>


    <aside class="left-off-canvas-menu">
    <ul class="off-canvas-list">
        <li><label>Mapas</label></li>
        <li><a href="index.php" >Mapa distrital</a></li>
        <li><a href="index.php?mapa=2" style="background-color:#107896;">Estructura de votos</a></li>
        <li><a href="index.php?mapa=3" style = "background-color:#829356;">Mapa de colores</a></li>
        <li><a href="index.php?mapa=4" style = "background-color:#C2571A;:">Casillas</a></li>

    
    </ul>
      
    </aside>

 



    <section class="main-section">
   
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 3000 2000" style="enable-background:new 0 0 3000 2000;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#cff;stroke:#565656;stroke-width:7;}
</style>
<path class="st0 dis"id="dis12"onclick="chooseD(this.id);"  d="M1383.2,1235c-7.5,1.7-15.4,2.5-22.6,5.2c-17.5,6.6-31.1,19-44.1,32c-3.8,3.9-7.8,7.6-11.7,11.5
    c-0.5,0.5-1,1.5-1.3,1.4c-5.5-1.9-12.4-2.6-16.1-6.3c-4.6-4.7-6.2-12.2-9.7-18.2c-3.9-6.8-8.6-13.1-12.5-19.9
    c-2.9-5.2-7-6.4-12.4-5.6c-5,0.7-10.1,1.5-15.1,1.9c-11.1,1-22.2,1.9-34.2,2.9c0.5-6.7,1.1-13.2,1.4-19.7c0.2-5.9-1.5-7.5-7.3-8
    c-1.3-0.1-2.7,0.1-4-0.2c-7.6-1.8-8.4-4.1-6.6-14.1c2.3-12.7,4-25.5,6-38.2c1.2-7.7,2.8-15.4,3.7-23.2c0.4-3,0.3-6.5-0.9-9.1
    c-3.1-6.3-6.8-12.3-10.6-18.2c-2.4-3.7-6.3-4-10.6-1.4c-6.1-7.8-4.2-15.7-0.2-23.5c0.5-1,1.1-2,1.4-3.1c6.3-17.2,5.8-17-2.2-34.8
    c-3.7-8.3-8.7-14.6-17.5-15.8c-15-2-21.8-13.7-30.4-23.6c-3.4-4-5.4-8.1-5.3-13.4c0-1.7-0.6-4-1.8-5.1c-5.8-5.2-6.8-12.9-9.7-19.4
    c-3.5-8-5-9.1-13.3-7.2c-6.8,1.6-13.7,2.9-20.5,4.3c-0.5,0.1-1.1,0.2-1.5,0c-5.8-3-11.6-6.1-17.8-9.3c9.3-3.8,18.1-8,27.3-11.1
    c6.1-2,12.7-2.6,19.2-3.4c3.3-0.5,5-2.1,4.5-5.2c-1.2-6.9-2.6-13.8-4.3-20.6c-2-8.2-4.4-16.3-6.6-24.5c-1.6-6.3-2-6.7-8.6-7
    c6.6-5.5,13-9.4,21.9-7.3c4.3,1,9,0.6,13.4,0.4c4.1-0.2,5.8-4.3,3.4-9.2c-3.3-6.7-7.3-13.1-10.7-19.8c-0.7-1.3-0.7-4.1,0.1-4.8
    c1.9-1.5,5.1-3.5,6.7-2.8c6.2,2.6,11.9,6.1,17.8,9.3c4.3,2.3,8.1,1.8,12.3-1.3c13.3-10.3,26.9-20.2,40.5-30.2
    c5-3.7,5.6-7.9,1.8-12.9c-9.5-12.7-19.2-25.2-28-38.4c-2.6-3.9-2.8-9.6-3.6-14.5c-1-5.8-1.9-11.7-2-17.6c0-4.9,0.4-10.1,2.1-14.6
    c2.8-7.5,6.7-14.5,10.1-21.8c0.4-0.7,1.1-1.5,1.1-2.2c-0.2-3.1,0.4-7.5-1.4-8.9c-1.8-1.4-6.6-0.9-8.9,0.6
    c-8.2,5.1-15.9,10.9-23.8,16.4c-4.5,3.1-13,0-15.5-5.2c-0.6-1.3-2.6-2.9-3.6-2.7c-6.9,1.2-11.6-2.8-17.3-7.3
    c11.4-7.8,22.7-15.8,34.2-23.3c3.9-2.6,8.5-4.1,12.8-6c2.9-1.3,4.2-3.1,4.1-6.5c-0.2-11,0.6-22.1-0.3-33c-0.6-6.8-3.4-13.5-5.8-20
    c-5.2-14.4-10.8-28.6-15.9-43.1c-0.6-1.8-0.1-4.8,1-6.4c4.8-7,10.1-13.7,15.2-20.5c2.9-3.9,2.4-8.6-1.5-11.8
    c-6.5-5.2-13.1-10.4-19.8-15.3c-2.8-2-3.5-3.9-2.5-7.1c2.2-7.2,4.6-14.4,6.1-21.7c2.2-10.8,3.7-21.7,5.4-32.5
    c0.5-3.4,0.5-6.9,1.1-10.3c0.6-3.3,1.6-6.1,5.1-8.3c9.3-5.8,18.1-12.4,26.8-19c1.6-1.2,2.7-3.7,2.9-5.8c0.9-11.3,1.4-22.7,2.2-34.1
    c0.1-1.2,0.6-2.8,1.4-3.6c6.6-6.3,13.2-12.5,19.9-18.6c5.6-5.1,11.5-9.9,16.9-15.2c4.1-4,1.1-8.2-0.9-12.1c-0.4-0.7-1-1.3-2.1-2.7
    c2.2-0.5,3.8-1.1,5.4-1.2c7.6-0.4,15.2-0.5,22.8-1.2c1.6-0.2,3.8-2.7,4.3-4.5c0.8-2.8,0.2-5.5-3.6-6.4c-1.9-0.4-4-1.4-5.4-2.8
    c-26.3-26.5-52.5-53-78.6-79.5c-8.3-8.4-16.2-17.2-24.6-25.4c-3.4-3.3-4.3-6.3-2.5-10.5c0.9-2.1,1.6-4.3,2.5-6.6
    c8.2-0.7,16.5-1.5,24.8-2c1.3-0.1,2.8,1.5,3.9,2.6c10.8,11.4,21.7,22.8,32.4,34.4c3.3,3.6,6.9,3.7,10.6,1.7
    c12.4-6.6,24.9-13,37-20.2c2.9-1.7,4.9-5.7,6.4-9.1c6.5-14.8,12.6-29.7,18.9-44.5c1.8-4.2,4.7-4.3,7.8-0.3
    c4.3,5.7,8.6,11.5,12.8,17.4c1.9,2.6,3.9,4.3,7.4,3.8c8.1-1.2,16.2-2.1,24.3-3.4c11.3-1.8,22.5-3.8,33.8-5.5
    c1.1-0.2,2.7,0.9,3.5,1.9c5.2,7.1,10.3,14.3,15.3,21.6c2,3,4.8,3.9,8.2,3.3c3.1-0.5,3.5-2.8,3.7-5.5c0.8-9.1,1.9-18.3,2.9-27.4
    c1-9.5,2-18.9,3.1-28.4c0.1-1,0.9-2.1,1.7-2.9c4.8-4.2,9.4-8.6,14.5-12.5c6.5-5,7.9-12.5,10.4-19.9c11.4,1.9,22.6,3.7,33.7,5.7
    c14.1,2.5,28.2,5.2,42.3,7.8c12.3,2.3,24.9,3.9,36.9,7.3c7,2,13.3,6.7,19.7,10.5c8.3,4.9,16.3,10.2,24.6,15c2.3,1.3,5.2,1.8,7.9,2.1
    c16.5,1.4,32.3-1.2,47.7-7.6c8.2-3.4,17.1-5.1,25.6-8c4.6-1.6,6.7,1.9,9.4,3.9c3.2,2.3,5.8,5.5,8.1,7.8c-2,6.6-4.4,12.5-5.4,18.7
    c-0.9,5.6,4.9,8,8.4,10.8c1.6,1.3,6.1-0.6,9-1.7c2.5-0.9,4.6-2.8,7-4.3c0.5,5.7,1.4,11.1,1.3,16.5c0,3.9,1.8,5.9,5,6.9
    c16.8,5.4,27.9,17.7,39.2,31.6c-9.5,2-17.9,3.6-26.2,5.6c-1.9,0.5-3.9,1.7-5.4,3.1c-3.3,3-6.2,6.5-9.6,9.4
    c-3.7,3.2-3.6,6.8-1.7,10.6c4.1,8.4,8.3,16.7,12.6,25c1.7,3.3,1.8,6.4,1.5,10.2c-0.9,14.1-0.8,28.2-1.3,42.2
    c-0.1,3.9,2.3,5.3,5.1,6.2c5.9,1.9,11.7,3.9,17.7,5.4c3.8,0.9,4.4,3.1,4.2,6.4c-0.5,7.9-1.2,15.9-0.9,23.8c0.2,5.6-2.2,9.9-4.6,14.3
    c-3.5,6.5-7.1,12.9-11.1,19.1c-3.9,6-2.6,12-0.4,17.9c7.4,20.4,5.8,41.6,6.1,62.7c0,3.5,0.9,7.2,2.4,10.3
    c5.2,11,10.9,21.8,16.9,33.6c-7.5-5.5-14.1-10.5-20.8-15.3c-2.2-1.5-4.8-2.9-7.3-3.4c-13.5-2.8-27-4.7-40.9-2.9
    c-10.4,1.4-21,1.7-31.6,2.1c-7.4,0.3-14,1.4-19.2,7.8c-4.9,6.1-10.7,11.4-16.6,16.6c-3.3,3-3.6,6.3-2.8,9.9
    c4.1,18.2,8.2,36.5,13.1,54.6c1.3,4.7,5.7,8.6,8.8,12.8c2.8,3.7,5.8,7.1,8.7,10.7c3.4,4.3,6.6,4.7,12.3,2.6c1.5-0.5,2.8-1.3,5.3-2.5
    c-3,6.9-5.6,12.8-8,18.7c-6.5,15.6-12.9,31.3-19.4,47c-0.5,1.2-1.1,2.3-1.9,3.3c-4.1,5.1-8.3,10.2-12.3,15.4c-2.3,3-0.9,7.6,2.8,9.4
    c9.5,4.7,19.1,9.3,28.7,13.8c3.3,1.5,4.2,3.4,3.2,7c-4,14.1-7.1,28.3-6.6,43.1c0.1,2.2-0.8,4.4-1.4,7.5c-8.5-1.7-16.9-3.1-25.1-4.9
    c-10.3-2.4-20.5-5.1-30.8-7.6c-4.9-1.2-8.3,0.4-11.4,4.7c-4.7,6.6-7.2,13.3-6.4,21.6c0.6,5.6,0.1,11.3,0.1,17.7
    c-5.3,0-10.4,0.4-15.4-0.1c-7.3-0.8-13.4,1.7-19.4,5.5c-14.9,9.3-30,18.4-45,27.6c-4.1,2.5-5.6,6.3-3.6,11
    c9.8,23.3,19.7,46.5,29.4,69.8c2.1,5.2,4.8,8.5,11,7.3c1.2-0.2,2.6,0.1,4.2,0.2c-0.4,2.5-0.9,4.7-1.1,7c-0.3,7.2,0.6,8.3,7.3,10.8
    c2,0.8,5.5,3,5.3,3.5c-1,2.9-1.3,6.2-5.6,7.6c-12.8,4.2-25.4,9.2-38,13.8c-6.9,2.5-8.1,4.5-7,13c0.5,4.4,1,8.8,2.1,13
    c0.5,2.1,2,4.7,3.8,5.8c9.6,5.9,19,12.2,29.2,16.9c7.2,3.3,15.5,4.7,23.5,6.2c9.3,1.8,18.8,2.6,28.1,4.2c1.8,0.3,3.9,1.6,4.8,3.1
    c9,14.4,17.8,28.9,26.7,43.3c9,14.7,17.6,29.8,27.3,44.1c6,8.9,13.8,16.7,20.7,25.1c5.5,6.7,10.5,13.9,16.4,20.2
    c5.7,6.1,12.3,11.5,18.6,17.1c3.8,3.4,7.6,6.7,11.3,11.4c-10.8,0.8-21.6,2.1-32.4,2.4c-16.7,0.4-33.3,0-50,0.2
    c-6.8,0.1-13.6,0.9-21.1,1.4c2.5,10.1,4.8,19.1,7,28.1c1.9,7.6-3.4,13.3-11.3,12.1c-4.4-0.6-8.8-1.3-14-2
    c2.4,12.2,4.9,23.7,6.7,35.3c0.5,3.5-0.2,7.5-1.6,10.7c-1.5,3.5-5.9,3.3-9.3-0.2c-7.4-7.7-14.3-15.8-21.8-23.4
    c-8.2-8.4-10.6-19.7-14.9-30c-2-4.7-3-5.6-7.7-3.8c-13.4,5-26.7,10.3-40.2,15c-4.9,1.7-6.5,4.8-6.1,9.1c0.5,4.5-1.6,6.8-5.4,8.4
    c-3.4,1.4-6.9,2.6-10,4.5c-6.6,4-11.3,2.7-17.8-3.3c-5.1-4.7-10.3-9.4-15.4-14c0,0-0.3-0.3-0.3-0.3c-2.2-1.9-4.2-4.4-6.7-5.4
    c-8.2-3.2-16.6-1.6-24.8,0.4c-3.3,0.8-6.4,2-9.6,3C1386.3,1234.7,1384.8,1234.8,1383.2,1235z"/>
<path class="st0 dis"id="dis18"onclick="chooseD(this.id);"  d="M1647.5,1337c9.6,1,19.9,1.2,29.7,3.4c8.4,1.9,16.4,6.1,24.4,9.7c1.6,0.7,2.8,3.4,3.1,5.3
    c1.9,12.3,4.1,24.6,5.1,36.9c1.4,16.8,7.7,32.3,10.5,48.7c1.5,8.5,6.9,13.2,12.9,18.1c6.7,5.4,13.1,11,19.8,16.4
    c3.5,2.9,7.1,5.9,10.9,8.4c4.4,3,9.4,1.3,13-3.3c4.3-5.5,9-10.8,13.5-16.3c7.8,20.9,11.1,24.1,28.4,27.3
    c-4.7,11.1,1.8,23.6,11.7,28.2c12.3,5.7,24.9,10.9,37.4,16.3c1.7,0.7,3.8,1,5.7,1c13.8-0.2,27.5-0.5,41.3-1c3.1-0.1,4.7,1,6.1,3.7
    c7,13.7,14,27.4,21.2,40.9c1.5,2.7,1.8,4.8,0.3,7.7c-7.5,14.3-16.6,28.2-21.7,43.4c-5.3,15.7-13.3,29.8-20.1,44.6
    c-1.9,4,0.7,7.3,4.2,9.2c4.7,2.5,9.7,4.6,14.6,6.8c3.1,1.4,4.7,3.4,4.7,7.2c0,6.7,0.9,13.4,1.5,20.9c-7.5-3.2-15-5.6-21.8-9.5
    c-9.8-5.5-19.4-5.6-29.9-2.5c-6.7,2-13.8,2.6-20.7,4c-3.2,0.7-6.9,1.1-9.2,3.1c-4.3,3.7-9.6,3.7-14.4,5.3c-4.3,1.4-8.2,2.7-10.4,7.2
    c-0.6,1.2-3.1,2-4.7,2c-20.9-0.2-41.9-0.6-62.8-0.9c-2.1,0-4.4,0.3-6.2,1.2c-3.9,2-6,5.3-3.6,9.6c4.5,8.1,2.4,15.9-0.3,24
    c-4.2,12.5-7.9,25.1-11.8,37.7c-8.9,1.2-17.6,2.3-26.4,3.5c-5.6,0.8-8.5,3.9-8.5,9.4c-0.1,10-0.1,20,0,30c0,6.8,2.9,9.5,9.7,9.6
    c4.9,0.1,9.8,0,16.1,0c-7.9,10.9-14.8,20.3-22.5,30.9c-9.8-2.8-20.3-5.7-30.8-8.7c-3.9-1.1-7.8-1.7-11-5.1
    c-3.3-3.6-8.4-1.9-10.8,2.6c-2.7,5.2-5.4,10.4-7.9,15.4c-2.1-3.9-3.7-8-6.2-11.5c-2.4-3.4-10.5-3.4-14.6-0.5
    c-9,6.1-18.1,12-26.7,18.5c-3.2,2.4-5.1,6.5-7.8,10.2c-24.9,2.6-50.6,5.3-76.3,8c-20.8,2.2-41.7,4.5-62.5,6.5
    c-2.4,0.2-5.6-1-7.5-2.7c-11.7-10.2-23-20.6-34.4-30.9c6.6,0.5,13.3,0.9,20.1,1.4c1.5,0.1,3.2-0.4,4.4,0.2c4.4,2,8.2,0.3,10.5-2.9
    c2.7-3.7,4.8-7.9,2.1-13.2c-5.2-10.3-13.3-15.3-24.6-16.2c-4.3-0.3-8.6-1.4-13.5-2.3c1.1-9.4,2.2-18.5,3.4-28.1
    c9.9,3.5,19,6.8,28.2,10.1c3.4,1.2,6.7,2.8,10.2,3.3c2.3,0.4,5.3,0,7-1.4c4.2-3.1,6.2-18.5,3.5-22.9c-0.7-1.1-1.7-2-2.5-3.1
    c0.8-0.7,1.9-1.2,2.5-2.1c2.6-3.5,5.2-4,9.2-1.7c4.5,2.7,10.1-1.8,9.9-8c-0.3-7.7-1.2-15.4-2-23.1c-0.9-8.5-1.9-16.9-2.9-25.4
    c-0.7-6.7-1.1-13.4-2.1-20.1c-0.8-5.2-5.7-8-10.9-6.8c-1.7,0.4-3.5,0.4-5.8,0.7c-1.1-8.6-2.1-16.8-3.2-25.1
    c-1.3-10.4-2.8-20.8-3.9-31.2c-1.1-11.2-1.7-22.4-2.6-33.5c-0.3-3.5-1-7-1.4-10.6c-0.1-0.9,0-2,0.5-2.8
    c6.3-11.1,12.5-22.2,19.1-33.1c4.2-6.9,3.9-14.4,3.7-21.9c0-3,0.1-6.4,1.4-8.9c3.3-6.3,7.4-12.2,11.2-18.3c0.7-1.1,1.3-2.4,1.5-3.6
    c3.6-19.1,7-38.3,10.7-57.4c0.4-2,1.5-4.1,2.6-5.9c9.9-15.4,19.3-31.2,30.1-45.9c4.6-6.3,4.8-11,2-17.4c-2.7-6.3-1.6-6.9,5.2-7.7
    c11.7-1.3,23.3-3,34.9-5.2c2.5-0.5,5.2-2.9,6.6-5.2c6.9-11.5,13.4-23.2,20-34.8c1.3-2.2,2.7-4.4,4.2-6.5c2.8-4,7-4.8,11.9-1.7
    c9.2,5.9,19,10.1,29.8,12.1c3.6,0.7,5.3,0.2,6.6-3.6C1641.6,1350.2,1644.7,1343.6,1647.5,1337z"/>
<path class="st0 dis" onclick="chooseD(this.id);" id="dis15"d="M1429,1236.6c0,0,0.3,0.3,0.3,0.3c7.4,8.1,14.8,16.2,22,24.1c7.7-2.6,15.1-5,22.4-7.7
    c10.4-3.9,8.1-3.3,7.7-13.1c-0.2-4.1,1.7-5.4,4.5-6.4c7.9-2.7,16-5,23.9-7.8c5.2-1.8,10.3-4,15.9-6.2c1.4,3.2,3.3,6.2,4,9.4
    c2.4,10.8,9.8,18.6,16.4,26.6c6.7,8.1,14.4,15.4,22.2,22.5c3.1,2.8,7.8,3.6,11.4,5.9c3.4,2.2,6.7,4.8,9.4,7.8
    c2.3,2.6,1.1,5.4-1.5,7.8c-1.3,1.2-2.8,3.3-2.6,4.9c1.3,13-0.2,26.3,4.5,39c0.6,1.5,0.2,3.8-0.6,5.2c-7.8,12.9-15.8,25.7-23.7,38.6
    c-2.8,4.6-6.5,7-12.1,7.6c-8.7,1-17.4,2.9-26.1,4.2c-4.6,0.7-9.2,0.9-14.2,1.4c0.3,0.8,0.3,2,0.9,2.9c7,10.6,4.5,20.3-2.6,29.7
    c-7.1,9.5-13.1,19.9-20.9,28.6c-6.8,7.5-7.1,16.6-9.2,25.2c-3.2,13.1-5.4,26.5-8.2,39.8c-2.5,11.7-9.3,21.1-16.6,30.1
    c-0.8,1-3.3,1.8-4.5,1.3c-11.9-4.5-23.5-9.5-35.4-14c-3.3-1.2-4-3.2-4.6-6.1c-0.5-2.3-1.7-4.5-3-6.5c-2.6-3.9-5.7-7.5-8.1-11.5
    c-2.1-3.6-4.5-5.6-9-5.4c-4.5,0.2-9-1.2-13.6-1.2c-4.7,0-9.4,0.8-14.2,1.4c-3.1,0.4-4.9-0.8-6.1-3.7c-3.7-8.7-8.1-17.2-11-26.1
    c-1.1-3.3,0.8-7.8,1.8-11.6c3-11.2,5.5-22.5,9.5-33.3c2.5-6.6,7.2-12.3,11.2-18.2c2.2-3.1,5.4-5.5,7.6-8.7c2-2.8,3-6.4,4.9-9.3
    c10.1-15.5,10.2-13.8-2.7-26.3c-11.1-10.7-22.2-21.3-33.7-31.6c-6.6-5.9-7.2-13.9-9.9-21.3c9-2.8,17.6-5.2,26.1-8.1
    c2.1-0.7,4.4-3,5.2-5.1c4.7-13.1,9-26.4,13.4-39.6c1.9-5.7,0.1-5.9-4.4-9.6c-5.5-4.5-8.3-2.5-12.1,1.3c-0.6,0.6-2.6,0.5-3.4,0
    c-9.3-6.2-11.2-1.8-16.5,4.2c-8.5,9.6-17.2,19.1-25.5,28.2c-2.1-0.8-3.6-1.6-5.1-1.8c-5.2-0.7-8-5.7-4.4-9.3
    c13.3-13.2,23.2-30.2,41.8-37.8c9.2-3.8,17.5-9.6,28-9.6c1.5,0,2.9-1.8,4.4-2.8c1.6-0.1,3.2-0.3,4.8-0.4c2.1-0.3,4.3-0.5,6.3-0.9
    C1406.2,1231.1,1418,1229.6,1429,1236.6z"/>
<path class="st0 dis"id="dis17"onclick="chooseD(this.id);"  d="M1574.9,1233c7.3,0,13.6-0.4,19.9,0.1c6.7,0.5,9.2-3.5,8.1-9.7c-1-5.8-2.5-11.4-3.9-17.1c-0.3-1-1.2-1.9-1.4-3
    c-0.6-2.3-1.9-5-1.1-6.7c0.9-1.7,3.8-3.1,6-3.4c5.4-0.7,10.9-0.9,16.4-1.1c19.8-0.7,39.6-1.4,59.3-2.1c4.2-0.2,8.3-0.7,12.4-0.9
    c4-0.2,7.1,1.5,7.2,5.8c0.1,4.3-3,6.2-7,6c-3-0.1-5.2,1-5.5,3.7c-0.2,1.7,1,4.7,2.4,5.4c9.3,4.4,15.5,12,22.2,19.3
    c1.4,1.6,4.2,2.5,6.4,2.6c6.6,0.3,13.3,0.1,20.2,0.1c2.7,16.7,5.4,33.3,7.9,48.4c-3.9,5.3-7.3,9.7-10.2,14.2
    c-3.9,6-7.3,12.4-11.3,18.3c-1.1,1.6-3.6,2.6-5.7,3c-6.2,1.2-7.2,2.2-7.2,8.3c0,3.8,0,7.7,0,11.5c0,7.5-5,10.8-12.4,8.9
    c-12.5-3.3-25-6.2-37.6-9.2c-3.2-0.7-6.4-1.2-9.7-1.4c-2.7-0.2-3.5-1.3-3-3.9c0.6-2.8,1-5.6,1.6-9c-8.7-5-17.6-10.1-26.4-15.3
    c-6.9-4.1-13.5-8.2-22.2-7.2c-3.8,0.5-6.5-1.8-6.9-6.3c-0.1-1.3-1.1-2.7-2-3.6c-1.4-1.4-3.2-2.3-4.9-3.5c-7.7-5.6-7.7-7.1-4.1-15.8
    c1.3-3.1,1-7.5,0.2-10.9C1580.5,1250.2,1577.7,1241.9,1574.9,1233z"/>
<path class="st0 dis"id="dis16"onclick="chooseD(this.id);" d="M1646.6,1321.8c-2.4,11.1-3.9,22.1-10.2,31.8c-2.5,3.8-4.5,5.6-8.8,3.5c-6.4-3.2-12.8-6.3-19.3-9.2
    c-3.8-1.7-8-2.7-11.5-4.8c-2.4-1.4-5.3-4.1-5.6-6.5c-1-7.5-0.8-15.1-1.1-22.7c-0.1-3.3-0.3-6.5-0.5-10.7c10.2,1.2,20.8-2.7,31,4.5
    C1628.5,1313.2,1637.8,1317.1,1646.6,1321.8z"/>
    <text x="1215" y="567" fill="black" class="textxg">Distrito 12</text>
    <text x="1515" y="1667" fill="black" class="textg"x>Distrito 18</text>
    <text x="1375" y="1367" fill="black" class="textmg"x>Distrito 15</text>
    <text x="1585" y="1267" fill="black" class="textmg"x>Distrito 17</text>
    <text x="1595" y="1337" fill="black" class="textmg"x>Distrito 16</text>
    <rect x="1000" y="100" width="20" height="20" style="fill:#f88d1e;stroke:#000000;stroke-width:1;stroke-opacity:0.9" />
    <text x="1030" y="115" fill="black" class="text">Diputado Masculino</text>
    <rect x="1000" y="130" width="20" height="20" style="fill:#fb98b0;stroke:#000000;stroke-width:1;stroke-opacity:0.9" />
    <text x="1030" y="145" fill="black" class="text">Diputada Femenina</text>
    <rect x="1000" y="160" width="20" height="20" style="fill:#ccffff;stroke:#000000;stroke-width:1;stroke-opacity:0.9" />
    <text x="1030" y="175" fill="black" class="text">Faltan Datos</text>
</svg>



	

	
      <!-- content goes here -->


    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>
  <script>
      $(document).foundation();
    </script>
    <script type="text/javascript">
        var municipios = ["Chihuahua"];
    </script>
    <script src="JS/modal.js"></script>
        <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2 id="name">Agregar Diputado</h2>
          <form id="myForm" method="post" >
           <div class="row">
                <div class="small-4 columns">
                  <label>Nombre
                    <input type="text" name="name"  />
                  </label>
                </div>
                <div class="small-4 columns">
                  <label>Apellido Paterno
                    <input type="text" name="fLastname"/>
                  </label>
                </div>
                <div class="small-4 columns">
                  <label>Apellido Materno
                    <input type="text" name="mLastname" />
                  </label>
                </div>
            </div>
            <div class="row">
                <div class="small-4 columns">
                  <label>Distrito
                    <input type="number" readonly id="disCambiar" name="distrito" min="1" max="22">
                    
                  </label>
                </div>
                <div class="small-4 columns">
                  <label>E-mail
                    <input type="email" name="mail">                    
                  </label>
                </div>
                <div class="small-4 columns">
                  <label># de telefono
                    <input type="number" name="cel">                    
                  </label>
                </div>
             </div>
             <div class="row">
                <div class="small-6 columns">
                  <label>Cargo</label>
                  <input type="radio" name="cargo" value="propietario" id="propietario"><label for="Propietario">Propietario</label>
                  <input type="radio" name="cargo" value="suplente" id="suplente"><label for="Suplente">Suplente</label>
                </div>
                <div class="small-6 columns">
                  <label>Sexo</label>
                  <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                  <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                </div>
            </div>
                
            
            <div class="small-6 columns small-offset-3 columns">
                <input type="button" onclick="subir();" id="submit" value="Guardar" class="button"style="width:100%;" >
            </div>
        </form>
        
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
         
        </div>
        <div id="modalSuplente" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2>Crear suplente</h2>
          
          <div class="row">
                <form id="formaSu" method="post">
                <div class="row">
                  <div class="small-4 columns">
                    <label>Nombre
                      <input type="text" name="name"  />
                    </label>
                  </div>
                  <div class="small-4 columns">
                    <label>Apellido Paterno
                      <input type="text" name="fLastname"/>
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Apellido Materno
                      <input type="text" name="mLastname" />
                    </label>
                </div>
              </div>
              <div class="row">
                  <div class="small-4 columns">
                    <label>ID
                      <input type="number" name="id_suplido" readonly id="idS">
                    
                    </label>
                </div>
                  <div class="small-4 columns">
                    <label>E-mail
                      <input type="email" name="mail">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label># de telefono
                      <input type="number" name="cel">            
                    </label>
                </div>
               </div>
               
              <div class="row">
                  
                  <div class="small-6 columns">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                    <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                  </div>
                  <div class="small-6 columns" id="tipoSu">
                    <label>Tipo
                      <input type="text" name="tipo" readonly id="tipoS">
                    
                    </label>
                  </div>
              </div>
              <div class="small-6 columns small-offset-3 columns">
                <input type="button" onclick="saveSuplente();" id="submit" value="Guardar" class="button"style="width:100%;" >
              </div>

              </form>

          </div>

        <div id="Modal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2 id="nombre"></h2>
            <table>
              <thead>
                <tr>
                  <th width="150">Nombre</th>
                  <th width="150">Apellido Paterno</th>
                  <th width="150">Apellido Materno</th>
                  <th width="150">Cargo</th>
                  <th width="150">Telefono</th>
                  <th width="150">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr id="propietariom">   
                </tr>
                <tr id="suplentem">
                </tr>
              </tbody>
            </table>

          <div class="small-6 columns">
                <a onclick="" id="mapa" class="button"style="width:100%;" >Ir a Mapa seccional</a>
            </div>  
            <div class="small-6 columns">
                <a onclick="planillaChihuahua()" class="button"style="width:100%;" >Planilla de Chihuahua</a>
            </div>  
            <div class="small-6 columns small-offset-3 columns">
                    <a onclick="modalDiputados()" class="button"style="width:100%;" >Agregar Diputado</a>
                </div> 
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
         
        </div>

        <script src="JS/getCandidatos.js"></script>
        <div id="myModalA" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2 id="nameA"></h2>
          <p class="lead">Información</p>
          <div id="ModalBorrable">

          </div>
          <div>
            <table id ="tableRegidores">
            </table>
            <div class="row">
                <div class="small-6 columns" >
                    <button class="button" id="CrearP"style="width:100%;" onclick="modalAyuntamientos('Chihuahua')">Crear Planilla</button>
                </div>
                <div class="small-6 columns">
                    <button style="width:100%;"id="CrearR" class="button" onclick="modalRegidores('Chihuahua')">Agregar Regidores</button>
                </div>
                 
            </div>
          </div>
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>

        <div id="modalCrearR" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2>Crear Regidor</h2>
          <div class="row">
                <form id="forma" method="post">
                <div class="row">
                  <div class="small-4 columns">
                    <label>Nombre
                      <input type="text" name="name"  />
                    </label>
                  </div>
                  <div class="small-4 columns">
                    <label>Apellido Paterno
                      <input type="text" name="fLastname"/>
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Apellido Materno
                      <input type="text" name="mLastname" />
                    </label>
                </div>
              </div>
              <div class="row">
                  <div class="small-4 columns">
                    <label>Municipio
                      <input type="text" name="ayuntamiento_id" readonly id="mun">
                    
                    </label>
                </div>
                  <div class="small-4 columns">
                    <label>E-mail
                      <input type="email" name="mail">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label># de telefono
                      <input type="number" name="cel">            
                    </label>
                </div>
               </div>
               
              <div class="row">
                  
                  <div class="small-6 columns">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                    <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                  </div>
                  <div class="small-6 columns" id="tipo">
                    
                  </div>
              </div>
              <div class="small-6 columns small-offset-3 columns">
                <input type="button" onclick="saveRegidor();" id="submit" value="Guardar" class="button"style="width:100%;" >
              </div>

              </form>

          </div>
          
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
        <div id="modalCrearA" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2 id="Ayuntamiento"></h2>
          <h2>Crear Planilla</h2>
          <h4>Presidente</h4>
          <div class="row">
                <form id="forma1" method="post">
                <div class="row">
                  <div class="small-4 columns">
                    <label>Nombre
                      <input type="text" name="name"  />
                    </label>
                  </div>
                  <div class="small-4 columns">
                    <label>Apellido Paterno
                      <input type="text" name="fLastname"/>
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Apellido Materno
                      <input type="text" name="mLastname" />
                    </label>
                </div>
              </div>
              <div class="row">
                  
                  <div class="small-4 columns">
                    <label>E-mail
                      <input type="email" name="mail">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label># de telefono
                      <input type="number" name="cel">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                    <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                  </div>
               </div>
           </form>
                <h4>Sindico</h4>
          
                <form id="forma2" method="post">
                <div class="row">
                  <div class="small-4 columns">
                    <label>Nombre
                      <input type="text" name="name"  />
                    </label>
                  </div>
                  <div class="small-4 columns">
                    <label>Apellido Paterno
                      <input type="text" name="fLastname"/>
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Apellido Materno
                      <input type="text" name="mLastname" />
                    </label>
                </div>
              </div>
              <div class="row">
                  
                  <div class="small-4 columns">
                    <label>E-mail
                      <input type="email" name="mail">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label># de telefono
                      <input type="number" name="cel">            
                    </label>
                </div>
                <div class="small-4 columns">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                    <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                  </div>
               </div>
               
              <div class="row">
                  
                  
                  <div class="small-6 columns" id="tipo">
                    
                  </div>
              </div>
              

              </form>
              <div class="small-6 columns small-offset-3 columns">
                <input type="button" onclick="savePresident();" id="submit" value="Guardar" class="button"style="width:100%;" >
              </div>

          </div>
          
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
	</body>


</html>