<?php

require_once('login.php');
?>
<html>
	<head>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="foundation/css/foundation.css" />
    	<link rel="stylesheet" href="css/distritos.css" />
        <script src="foundation/js/vendor/modernizr.js"></script>
        <script src="foundation/js/vendor/jquery.js"></script>
        <script src="foundation/js/foundation.min.js"></script>
         <script src="JS/GeneralVars.js"></script>
    	<script src="JS/getparam.js"></script>
	</head>
	<body>
	<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
  
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Distrito 20</h1>
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
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 960 560" style="enable-background:new 0 0 960 560;" xml:space="preserve">
<style type="text/css">
  .st0{fill:#8FD4EB;stroke:#565656;stroke-width:0.7;}
</style>
<g id="dis20">
  <path id="Saucillo" onclick="modal(this.id);" class="st0" d="M329.8,220.5l2,5.6l-2,4l-0.4,3l-6.7,3.7v7l5.7,5.4l3-1.7l2.7,4v6h3l3-4.7l15,6.7l6.7-7.4l28-2
    l0.3-6.4l3-4l5,3.3l3.3-4l-8-11.7l8.7-8l5.4,2l1-3.3l-2-3.3l8-4.7l8.7-1.7l5-1.3l-2.7-5.4l18.3,3.7l1.7-3.7l8.4,5.4l6.7,2.3l4-4.3
    l-11-6.3l-4.7-6.4l-7.3-14l2.7-1.7l3,3l6.7-4.3l1.2-3.8l-0.3-0.2l-5.3-9l-9.7-2.3l2.3,5.7l-17,1.4l-2.7-7.7l-4.7-0.7l-5.7-3.6
    l-1.7,1.7l0.7,3.3l-8.3-2l-5.4,3l-3.6,7l-6.7,3.7l-0.2-0.1c0.2,1.6,0.9,2.4,0.9,4.1c0,0.6,0.1,1.6,0.2,2.6c0.1,1,0.1,1.9-0.2,2.4
    c-0.3,0.6-0.6,1.1-1,1.6s-0.9,0.9-1.7,1.1c-1.2,0.3-1.9,0.5-2.2,1s-0.1,1.2,0.2,2.7c0.2,0.7,0.5,1.5,0.9,2.2s1,1.3,1.7,1.4
    c0.6,0.1,1.1,0.2,1.7,0.4l-1,8l-3.7-1.7l-3.3,6.4l-2-3.3h-5.3l-1,4l-5,3h-6.4l-4.7,8.3l-8.6-9.2l-9.8,6.2L329.8,220.5z"/>
  <path id="LaCruz" onclick="modal(this.id);" class="st0" d="M398.8,242.3l0.4,0.7l3.6,3.3l4-3l6.7-1.4l7,1.4l10.7-2.7l6.4-0.7l0.7,2.3l-3,3.3l2.7,2.3
    l7.3-5.7l7.7-2l7-5.3l3,0.3l4.3-4l6.7,1l-6-5.7l-4-1l-1.4-7.3l-4.3-3.7l-0.7-6.4l0,0l-3.6-1.3l-8.4-5.4l-1.7,3.7l-18.3-3.7l2.7,5.4
    l-5,1.3l-8.7,1.7l-8,4.7l2,3.3l-1,3.3l-5.4-2l-8.7,8l8,11.7L398.8,242.3z"/>
  <path id="SanFranciscoDeConchos" onclick="modal(this.id);" class="st0" d="M380,304.1h0.6l4.7,2.3l3-2l6,5l6-4l-2-5.7l1.7-4.3l4.7-7l8.7,0.7l0.3-8.6l-9-0.7v-3.7l-6.3-9.7
    l2-4.3l-2.7-4l6.7-1l-6.7-5.7l5.7-4.7l0.2-0.7l-0.5,0.4l-3.6-3.3l-0.4-0.7l-0.6,0.7l-5-3.3l-3,4l-0.3,6.4l-28,2l-6.5,7.1l12.1,5.9
    l7,8.7c-0.2,0.5-0.7,1.6-1.4,2c-0.2,0.1-3.1,2-3,2c1,0.5,1.6,0.9,2.2,1.4c0.5,0.5,1,1.2,1.5,2.3c0.3,0.5,1,0.4,1.8,0.3
    c0.4,0,0.7-0.1,1,0c0.3,0,0.5,0.2,0.6,0.4c0.2,0.9,0.4,5.5,1,6c0.8,0.8,1.3,2.2,1.7,3.6c0.3,1.3,0.7,1.8,1.1,2
    c0.4,0.3,0.9,0.3,1.6,1c0.7,0.7,0.9,1.1,0.9,1.4s-0.4,0.3-0.8,0.4c-0.4,0-0.9,0-1.2,0.1s-0.6,0.2-0.5,0.5c0.3,1,0.5,1.7,0.3,2.1
    c-0.2,0.4-0.6,0.6-1.6,0.9c-1.2,0.3-1.7,0.6-1.9,0.9s0.1,0.7,0.4,1c0.4,0.3,0.9,0.7,1.3,1.1C379.7,303.5,379.8,303.8,380,304.1z"/>
  <path id="Camargo" onclick="modal(this.id);" class="st0" d="M400.2,295.1L400.2,295.1c0.3,0.2,0.8,0.5,1.2,0.7c0.4,0.3,0.8,0.6,0.9,1c0,0.2,0.2,1.3,0.5,2.2
    c0.2,0.4,0.4,0.8,0.6,1c0.2,0.2,0.5,0.2,0.9-0.1c0.1-0.1,0.5-0.9,1-1.6c0.5-0.7,1-1.3,1.3-1.1c0.5,0.5,0.8,0.7,0.7,1
    c0,0.3-0.4,0.7-1.1,1.7c-0.4,0.5-0.8,1.7-1.1,2.7c-0.1,0.5-0.1,0.9-0.1,1.1c0.1,0.3,0.2,0.3,0.5,0.2c0.6-0.3,1.1-0.7,1.7-1l8.3,9
    l0.7-9.7l7.7,3l6-1l2,2.3l6.7,1.7l9.7-11.7l7.7,0.7l-1-3.7l3.3-1l5.7,6.7l3.6-1.7l-3.3-6l6.4-3.7l7.7,4.3l3.3-2l9,7l7.3-2l-0.3-3.6
    l2.3-2.4l7,5.4l10.4-9.7l5.7-2l9.7-10.7l1.7,3h3l0.4,4l6-0.3l5.4-4.7l7.6,5l4-3.3h37c0-0.3,0.1-1.2,0-1.5c-0.5-1-2.3-1.6-2.1-2.7
    c0.5-1.8-2.1-1.1-2.1-1.4c0.6-2.4,0.5-2.7-0.6-5c-1-1.9,0.6-0.9,1.8-2.1c1-1,0.9-1.5-0.6-3c-0.6-0.6-2.6-1.3-2.1-2.4
    c0.5-1,1-3,1.8-4.4c0.6-1.3-0.7-4.5-0.6-4.7l-5.9-6.2c0.4-0.4,2.2-1.8,2.4-2.1c0.3-0.6,2.3-2.1,2.1-2.6c-0.5-0.9-1.9-2.7-0.9-3
    c1.5-0.4,1.8-0.8,0.6-2.1c-1.5-1.5-1-1.9-1.4-2.7c-0.5-1-2.1-2.4-2.1-3.2c0-0.9,0.6-3.7,0.6-3.9c-0.4-1.8-1.2-2.4-2.1-3.6
    c-0.7-0.9-2.4-2.2-0.6-2.7c1-0.2,2.3-0.9,3.6-1.2c2.8-0.7,1-1-0.3-2.3l4.5-13.3l5.6-7.7l-3.2-1.4l14.5-29.1l16.6-25.5
    c-0.2,0-0.4,0.1-0.6,0c-0.8-0.8-3.2-1.1-2.7-2.1s0.9-2,1.2-3.2c0.3-1.1,1.1-2.1,1.5-3.6c0.3-1,1.2-1.9,1.4-3
    c0.4-1.4,1.2-1.4,1.8-2.6c0.3-0.5,1-3.2,1.8-3c1.8,0.5,2.5,2.4,3.2,0.9c0.2-0.5,1.7-3,0.9-3.6c-0.3-0.2-1.2-0.5-1.8-1l-5.9,2.3
    v-3.8l-2.4-0.5l-2.3,4.3l-2.9-1.4l-5.1,4.7l-13.7-7.1l-13.7,5.7v-8.5l-6.1,0.9l-6.1,11.3l-5.2-8.9l3.3-5.2l-12.2-11.8l-2.3,6.1
    l-4.7-5.1l-0.9,3.7l-6.1-4.2h-0.5c0,0.2-0.1,0.3,0,0.5l-5.2,8.9l3.3,4.3l-8.9,6.6l-3.8-6.1l-3.8,4.3l-10.4-5.2l7.1-9.4l-8-1
    l0.5-6.1l-4.7-0.5v-3.3l-8.5-0.9l-4.7,1.9l-8.3,5l-0.6,5l6.4,3.3v4.3l-5.4-0.4l-4.7,6.7l-11,2.3l0.7,7l6.3-1l0.4,4.3l-3.3,2.3
    l-1.7,8l1.7,7l2.3,3l-6,3.3l1.4,6.7h-7.7l-2.4,3.7v5.7l-7.3,6.7c-0.4,0-0.9,0-1.3,0c-0.8,0-1.7-0.9-2-1l-2.4-1.8l-1.2,3.8l-6.7,4.3
    l-3-3l-2.7,1.7l7.3,14l4.7,6.4l11,6.3l-4,4.3l-3-1.1l0,0l0.7,6.4l4.3,3.7l1.4,7.3l4,1l6,5.7l-6.7-1l-4.3,4l-3-0.3l-7,5.3l-7.7,2
    l-7.3,5.7l-2.7-2.3l3-3.3l-0.7-2.3l-6.4,0.7l-10.7,2.7l-7-1.4l-6.7,1.4l-3.5,2.6l-0.2,0.7l-5.7,4.7l6.7,5.7l-6.7,1l2.7,4l-2,4.3
    l6.3,9.7v3.7l9,0.7l-0.3,8.6l-8.7-0.7L400.2,295.1z"/>
  <path id="Jimenez" onclick="modal(this.id);" class="st0" d="M424.3,305.1l-0.1,0.7l10.2,16.7l-4.5,1.7l5.4,4.8l-4,4.8l5.4,9.9l-0.3,4l-5.4,2.2l-0.3,3.4
    l7.9,6l-2.5,2.2l4,4.3l7.4,6.2l7.4,0.9l1.1,7.4l5.7,3.1l11.1-0.6l0.3,4.8l3.7,7.9l0.6,8.8l1.4,4.5l1.7,1.4l-3.1,4.5l-0.3,2.5
    l4.3,1.7v2.3l-2.5,0.6l-6.8,7.6l-0.6,4.8l-3.4,0.8l-6.5,4.8l-1.7,4v0.4c0.2-0.1,0.3-0.4,0.5-0.3c1.5,0.7,2.5,2,3,0
    c0.3-1.4,1.3-2.2,3.2-1.2c1.3,0.6,1.3,2.1,2.4,2.7c1.7,0.8,1.6,0,3-0.3c0.9-0.2,3.8-0.5,3.8,0.9c0,1.9-0.6,2.1,0.6,3.3
    c0.6,0.6,1.1,1.9,2.1,2.4c1.3,0.6,1.5,1.5,2.7,2.6c0.1,0.1,3.6,1.8,3.6,1.8c-0.3,1.4-0.7,1.9,0,3.2c0.5,1.1,1.4,2.1,2.6,2.4
    c2.3,0.6,2.5,0.3,3,2.4c0.4,1.4,1.7,1.4,2.1,0c0.1-0.5,3-3,3-1.8c0,0.8-0.8,2.5,0.6,3.2c1.4,0.7,4.1,5,3,3.9l11.5-14.5
    c-0.4-0.4-0.6-0.6-1.2-1.2c-1.3-1.3,0.1-3.2-0.9-4.2l4.7-10.6l0.6-6.5l12.7-12.2l5-0.6l2.9-6.8l4.5-4.2c0-0.2,0.8,0,0-0.9
    c-1.2-1.2-1.9-2.5-3.3-3.2c-1.1-0.5-4.1-0.6-3.2-1.5c0.3-0.3,2.5-1.7,2.7-2.4c0.4-1.6,0.8-2.1-0.3-3.2c-1.2-1.2-2.2-1.3,0.3-1.8
    c1.2-0.2,3.2-0.3,2.9-1.8c-0.3-1.4-1.1-3.7,1.2-3.2c1.1,0.2,3.9,0.6,3.9,2.1c0,1.3-0.3,3.2,1.2,3.6c1.4,0.3,2.7,4.9,2.4,3.6
    l6.8,0.9l19,5.9l2.1-5.9l4.4-1.5l4.5,5.4l16.3-1.5l21.9,6.2c-0.5-1.1-1.9-2.5-2.1-3.2c-0.3-1.3-1.8-2-1.8-3.3
    c0-2.1-0.1-2.1-1.2-3.2c-1-1-1.6-1.6-2.9-2.9c-0.9-0.9-3-1.5-2.1-3.3c0.7-1.4,0.4-1.6-1.2-2.4c-1.1-0.6-1.8-1.3-3.3-2.1
    c-1.8-0.9-1-2.2-2.1-2.9c-1.3-1-4.7,0.2-4.7-1.5c0-0.5,0-1,0-1.5c0-1.3-0.8-3.4,0-3.6c3.6-0.9-0.9-2-0.3-3.2l7.7-7.7
    c0.5-0.3,1.2-0.3,1.5-0.9c0.1-0.3,0.4-3.1,0.9-3.6c0.9-0.9,1.6-1.1,2.9-1.8c0.4-0.2,3.3-1.4,2.4-2.4c-0.4-0.4-1.9-1.6-2.1-2.4
    c-0.1-0.4-0.7-4.9-1.5-5l-5.3-5v-15.1l-3.2-10.4l-3.9-2.6c-0.4-0.1-0.8-0.2-1.2-0.3c-0.8-0.2-5.5-1.1-5.3-1.8c0.2-1,1.4-1,1.4-2.4
    c0-3.1,3.4-0.1,3-0.9l-4.7-14.5l5.3-3l0.3-21H561l-4,3.3l-7.6-5l-5.4,4.7l-6,0.3l-0.4-4h-3l-1.7-3l-9.7,10.7l-5.7,2l-10.4,9.7
    l-7-5.4l-2.3,2.4l0.3,3.6l-7.3,2l-9-7l-3.3,2l-7.7-4.3l-6.4,3.7l3.3,6l-3.6,1.7l-5.7-6.7l-3.3,1l1,3.7l-7.7-0.7l-9.7,11.7l-6.8-1.4
    l-2-2.3L424.3,305.1z"/>
  <path id="Lopez" onclick="modal(this.id);" class="st0" d="M431.4,334.1h-0.2l-21.5,10.5c-0.1,0.7-0.3,1.3-0.4,2c-0.3,1.5-0.8,2.3-1,3
    c-0.1,0.3-0.1,0.7,0,1.1s0.4,0.7,0.9,1.2c0.4,0.4,0.6,0.6,0.7,0.8c0,0.2-0.1,0.2-0.2,0.4c-0.2,0.1-0.4,0.3-0.5,0.6
    c-0.2,0.3-0.3,0.8-0.3,1.5c0,1.2-0.2,2-0.6,2.5c-0.4,0.5-1.2,0.9-2.2,1.1c-0.7,0.2-1.1,0.4-1.5,0.7c-0.3,0.3-0.5,0.6-0.6,0.9
    c-0.1,0.7,0.2,1.4,0.9,2.1c0.5,0.5,0.8,1.4,1.1,2.2c0.2,0.9,0.5,1.7,1,2.2c0.8,0.8,1.1,1.4,1.1,2.1c0,0.6-0.3,1.2-0.7,2
    c-0.2,0.5-0.2,0.9-0.1,1.3c0.1,0.4,0.3,0.8,0.6,1.2c0.6,0.7,1.3,1.4,1.5,2c0.5,1.1,0.7,1.7,1.1,2.2c0.3,0.5,0.9,0.7,2.2,1.1
    c1.3,0.3,2.1,0.6,2.6,1s0.9,0.9,1.4,1.9c0.2,0.5,0.7,0.6,1.2,0.7s1.1-0.1,1.8-0.4c1.2-0.4,2.4-1.1,2.7-1.1c0.4-0.1,0.8,0,1.1,0.3
    s0.7,0.7,1,1.1c0.6,0.9,1,2,1.1,2.6c0.1,0.5,0,0.8-0.1,1s-0.3,0.4-0.4,0.6c-0.1,0.3,0.2,0.7,2.1,1.6c0.4,0.2,0.7,0.5,0.7,0.9
    c0.1,0.3,0,0.7-0.1,1.1c-0.2,0.8-0.7,1.7-0.7,2.5c0,0.5,0.2,0.8,0.6,1c0.4,0.2,0.9,0.3,1.5,0.4c1.2,0.1,2.6,0.2,3.5,0.6
    c0.5,0.2,0.7,0.6,0.8,1.1s0.1,1,0,1.6c-0.2,1.1-0.7,2.2-0.7,2.6c-0.1,0.4-0.4,0.4-0.7,0.4s-0.7-0.1-0.9,0l3.2,17.4l8.1-6.5l0.8-4.5
    l10.1-2.8L453,410l18.6-5.3l2.9,1.2v3.6l3.8-1.4l-1.1-3.4l-0.6-8.8l-3.7-7.9l-0.3-4.8l-11.1,0.6l-5.7-3.1l-1.1-7.4l-7.4-0.9
    l-7.4-6.2l-4-4.3l2.5-2.2l-7.9-6l0.3-3.4l5.4-2.2l0.3-4L431.4,334.1z"/>
  <path id="Coronado"  onclick="modal(this.id);" class="st0" d="M411.5,378L411.5,378c-0.1,0.5-0.3,1.6-0.2,2.7c0,0.6,0.2,1.1,0.5,1.6s0.8,0.9,1.6,1.1
    c1.2,0.3,2,0.9,2.5,1.6c0.5,0.7,0.8,1.6,1.2,2.4c0.1,0.3,0,0.5-0.3,0.8s-0.7,0.5-1.2,0.7c-0.9,0.4-1.9,0.8-2.2,0.9
    c-0.3,0.2-0.4,0.5-0.3,0.8s0.3,0.7,0.6,1.1c0.5,0.8,1.2,1.8,1,2.5c-0.2,0.8-0.5,1-0.8,1.1c-0.3,0-0.8-0.3-1.1-0.7
    c-0.8-0.8-1.5-2.1-1.7-2.4c-0.2-0.4-0.4-0.5-0.7-0.3c-0.2,0.2-0.4,0.6-0.6,1.1c-0.4,0.9-0.7,2.2-0.7,2.5c-0.3,1.3-1,2-1.5,2.8
    c-0.3,0.4-0.5,0.7-0.6,1.2s-0.1,1,0.1,1.7c0.3,1.4,0.1,2-0.1,2.5s-0.5,0.9-0.3,2c0.1,0.5,0.3,0.7,0.6,0.9c0.2,0.2,0.5,0.3,0.8,0.5
    s0.6,0.3,0.7,0.7c0.2,0.3,0.3,0.9,0.3,1.6V424l-13.8-3.2c0,1.1-0.2,0-0.4-1.8c-0.2-1.7-0.3-4,0-5.1c0.1-0.5,1-0.9,2.1-1.2
    c1-0.3,2.2-0.6,2.8-0.8c0.5-0.1,1.2-0.9,1.7-1.8c0.6-0.9,1-1.8,1.1-2.3c0.5-2.1,0.4-4.1,0.8-6.1c0.1-0.5,0-0.9-0.2-1.2
    s-0.6-0.4-1.1-0.5c-0.8-0.2-1.9-0.1-2.4,0c-0.6,0.2-1,0.4-1.1,0.6c-0.2,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.3-0.5,0.3
    s-0.8,0-1.7-0.3c-1.2-0.3-1.9-0.3-2.4,0s-0.8,0.8-1.2,1.7c-0.7,1.5-1.7,2.3-2.4,3.6c-0.5,0.9-0.8,1.5-1,2.3c-0.2,0.7-0.3,1.6-0.3,3
    c0,0.6,0.5,1.4,1,2.1c0.5,0.7,1.1,1.4,1.4,1.9c0.4,0.8,0.3,2,0.1,3c-0.3,1-0.7,1.9-0.9,2.3c-0.3,0.6-1.1,0.8-1.6,1.2l-11.7,14.6
    l7.7,3.2l-0.1,0.7c0.1-0.3,0-0.5,0.4-0.9c0.6-0.6,2.4-1.2,2.4,0.6c0,2.5,0.5,1.7,1.8,2.9c1.4,1.4,0.3,0.9-0.9,2.1
    c-0.6,0.6-0.5,3.2,0.6,2.7c0.8-0.4,4.1-1.5,4.5,0.3c0.6,2.9,0.1,2.3,1.4,0.9c0.5-0.5,2.2-1.6,2.4-2.4c0.3-1.2,2.3-1.9,2.7-0.3
    c0.4,1.5-1.2,5.1,0.3,4.7l23.1-9.7l7.7,15.1c0.2-0.7-0.2-1.2,1.2-1.5c1.7-0.4,0.9-1.6,2.4-2.4c1.1-0.5,1.7-0.9,3.6-0.9
    c0.7,0,3.9,0.8,4.2,0.6c0.9-0.9,0.7-1.2,0.3-2.9c-0.4-1.6,0.7-1.3,2.4-0.9c2.2,0.5,1.9,0.1,2.6-1.4c0.6-1.2,1.1-1.8,1.8-3.3
    c0.7-1.4,1-1.4,3.2-1.4c1.5,0,3.2-0.3,4.2,0.6c0.9,0.9,0.3,4.4,1.2,3.6c0.6-0.6,1.2-1.8,1.8-2.1v-0.4l1.7-4l6.5-4.8l3.4-0.8
    l0.6-4.8l6.8-7.6l2.5-0.6v-2.3l-4.3-1.7l0.3-2.5l3.1-4.5l-1.7-1.4l-0.4-1.1l-3.8,1.4v-3.6l-2.9-1.2l-18.6,5.3l0.4-6.1l-10.1,2.8
    l-0.8,4.5l-8.1,6.5l-3.2-17.4c0.2-0.1,0.6,0,0.9,0s0.6,0,0.7-0.4c0.1-0.4,0.5-1.5,0.7-2.6c0.1-0.6,0.1-1.1,0-1.6s-0.3-0.9-0.8-1.1
    c-0.9-0.4-2.3-0.5-3.5-0.6c-0.6-0.1-1.1-0.2-1.5-0.4s-0.6-0.5-0.6-1c0-0.8,0.4-1.7,0.7-2.5c0.1-0.4,0.2-0.8,0.1-1.1
    c-0.1-0.3-0.3-0.7-0.7-0.9c-1.9-1-2.2-1.3-2.1-1.6c0.1-0.2,0.2-0.3,0.4-0.6c0.1-0.2,0.2-0.5,0.1-1c-0.1-0.6-0.6-1.7-1.1-2.6
    c-0.3-0.5-0.6-0.9-1-1.1s-0.7-0.4-1.1-0.3c-0.3,0.1-1.5,0.7-2.7,1.1c-0.6,0.2-1.2,0.4-1.8,0.4s-1-0.2-1.2-0.7
    c-0.5-0.9-0.8-1.5-1.4-1.9s-1.4-0.6-2.6-1C412,378.4,411.9,378.2,411.5,378z"/>
  <path id="Allende"  onclick="modal(this.id);" class="st0" d="M375.8,309.9c0.2,0.2,2.4,2.2,2.4,2.4c0,2.3,0.1,4.7-0.4,6.9c-0.2,0.9-0.1,1.3,0,1.7
    c0.2,0.3,0.5,0.4,0.9,0.5s0.8,0.1,1.1,0.2c0.4,0.1,0.7,0.3,0.8,0.8c0.1,0.6,0,1.6-0.1,2.7s0,2.1,0.5,2.6c0.7,0.7,1.4,1.2,1.8,1.8
    s0.4,1.2-0.1,2.2s-0.7,2.7-1.6,4.5c-0.1,0.2-0.7,1.3-1.3,2.3c-0.3,0.5-0.7,0.9-1.1,1.2c-0.3,0.3-0.6,0.4-0.9,0.1
    c-0.5-0.5-1.5-1.4-2.3-2c-0.4-0.3-0.8-0.5-1.1-0.5s-0.6,0.1-0.7,0.4c-0.2,0.8,0.2,2.2,0.4,3.3c0.1,0.6,0.2,1.1,0.2,1.4
    s-0.2,0.4-0.6,0.2c-0.2-0.1-1.2-0.9-2.3-1.7s-2.1-1.4-2.2-1.1c-0.2,0.9-0.1,2.1-0.3,2.9c-0.1,0.4-0.2,0.8-0.5,1s-0.6,0.3-1.3,0.1
    s-1.2-0.2-1.7-0.1c-0.4,0.1-0.8,0.3-1.1,0.5c-0.6,0.5-1.1,1.1-2.2,1.7c-0.7,0.4-1.1,0.7-1.3,1.1s-0.2,0.7-0.1,1
    c0.1,0.6,0.5,1.2,0.1,1.6c-0.5,0.5-1.2,0.7-1.8,1.1c-0.6,0.3-1.2,0.7-1.4,1.4c-0.1,0.5-0.4,0.8-0.4,1.3c0,0.4,0.2,1,1.2,2
    c0.7,0.7,1.5,4.6,2,4.8c0.6,0.3,1,0.3,1.4,0.3c0.4-0.1,0.8-0.3,1.1-0.5c0.6-0.5,0.9-1,1.1-1c0.2,0,0.7-0.1,1.3,0
    c0.3,0.1,0.6,0.3,0.8,0.6s0.5,0.7,0.7,1.4c0.3,1.2,0.5,1.7,0.4,2.2c0,0.5-0.3,1-0.9,2.2c-0.2,0.3-0.6,1.2-0.8,2.2
    c-0.1,0.5-0.2,1-0.1,1.4c0.1,0.5,0.2,0.9,0.6,1.3c0.5,0.5,1,1.1,1.1,1.7c0,0.3,0,0.6-0.3,0.9c-0.2,0.3-0.6,0.5-1.3,0.7
    c-1,0.2-1.4,0.4-1.5,0.7s0.1,0.5,0.3,0.8s0.6,0.6,0.7,0.9c0.1,0.3,0.1,0.7-0.3,1.1c-0.6,0.6-1.6,0.9-2.3,1.3
    c-0.4,0.2-0.7,0.4-1,0.7c-0.2,0.3-0.3,0.7-0.3,1.2v0.1c0.3,0,0.5,0,0.8,0c0.7,0.1,1.5,0.3,2.3,0.7c1.2,0.6,2.8,1.6,4.5,2.4
    c0.5,0.2,1.4,0.6,2.4,1.1c0.9,0.4,1.8,0.9,2.1,1.4c0.5,1,0.6,1.9,0.9,2.5c0.2,0.3,0.3,0.5,0.7,0.5c0.4,0.1,0.9,0.1,1.7-0.1
    c0.9-0.2,1.8-0.4,2.8-0.4c0.9,0,1.9,0.3,2.9,0.7c0.8,0.4,3.8,2.6,4.4,2.4c0.8-0.2,1.6-0.7,2.3-0.7c0.4,0,0.7,0,1,0.3
    s0.5,0.6,0.7,1.3c0.1,0.3,0.5,1.6,0.7,2.9c0.1,0.6,0.1,1.2,0,1.7c-0.1,0.4-0.3,0.7-0.8,0.7c-0.9,0-1.6,0.4-2.1,1s-0.9,1.4-1.1,2.2
    c-0.2,0.6-0.2,1.1,0,1.4c0.1,0.4,0.3,0.6,0.7,0.8c0.6,0.4,1.6,0.6,2.6,1l0.1,0.4c0.4-0.5,0.8-1,1.1-1.7c0.4-0.9,0.7-1.4,1.2-1.7
    s1.2-0.3,2.4,0c0.9,0.2,1.4,0.3,1.7,0.3s0.4-0.1,0.5-0.3s0.1-0.4,0.3-0.6c0.2-0.2,0.5-0.4,1.1-0.6c0.5-0.1,1.5-0.2,2.4,0
    c0.4,0.1,0.8,0.2,1.1,0.5c0.2,0.3,0.3,0.7,0.2,1.2c-0.5,1.9-0.3,4-0.8,6.1c-0.1,0.5-0.5,1.4-1.1,2.3c-0.6,0.9-1.2,1.6-1.7,1.8
    c-0.6,0.2-1.8,0.4-2.8,0.8c-1,0.3-1.9,0.8-2.1,1.2c-0.3,1.1-0.2,3.4,0,5.1c0.2,1.7,0.4,2.9,0.4,1.8l13.8,3.2v-14.6
    c0-0.8-0.1-1.3-0.3-1.6s-0.5-0.5-0.7-0.7c-0.3-0.2-0.5-0.3-0.8-0.5c-0.2-0.2-0.5-0.4-0.6-0.9c-0.3-1,0-1.5,0.3-2s0.5-1.1,0.1-2.5
    c-0.2-0.7-0.2-1.3-0.1-1.7c0.1-0.5,0.3-0.8,0.6-1.2c0.5-0.7,1.2-1.4,1.5-2.8c0.1-0.3,0.4-1.5,0.7-2.5c0.2-0.5,0.4-0.9,0.6-1.1
    c0.2-0.2,0.4-0.1,0.7,0.3c0.2,0.4,0.9,1.6,1.7,2.4c0.4,0.4,0.8,0.7,1.1,0.7s0.6-0.3,0.8-1.1c0.2-0.7-0.4-1.7-1-2.5
    c-0.3-0.4-0.5-0.8-0.6-1.1s0-0.6,0.3-0.8c0.2-0.1,1.3-0.4,2.2-0.9c0.5-0.2,0.9-0.5,1.2-0.7c0.3-0.3,0.4-0.5,0.3-0.8
    c-0.4-0.8-0.7-1.7-1.2-2.4s-1.2-1.3-2.5-1.6c-0.8-0.2-1.3-0.6-1.6-1.1s-0.5-1-0.5-1.6c-0.1-1.1,0.2-2.2,0.1-2.6l0.1-0.1
    c-0.3-0.2-0.9-0.3-1.1-0.5c-0.3-0.5-0.5-1.1-1.1-2.2c-0.3-0.5-1-1.2-1.5-2c-0.3-0.4-0.5-0.8-0.6-1.2s-0.1-0.9,0.1-1.3
    c0.4-0.8,0.7-1.4,0.7-2s-0.3-1.3-1.1-2.1c-0.5-0.5-0.7-1.3-1-2.2c-0.2-0.9-0.5-1.7-1.1-2.2c-0.7-0.7-1.1-1.5-0.9-2.1
    c0.1-0.3,0.3-0.6,0.6-0.9c0.3-0.3,0.8-0.5,1.5-0.7c1.1-0.3,1.8-0.6,2.2-1.1s0.6-1.3,0.6-2.5c0-0.7,0.1-1.2,0.3-1.5s0.4-0.5,0.5-0.6
    c0.2-0.1,0.3-0.2,0.2-0.4c0-0.2-0.2-0.4-0.7-0.8c-0.5-0.5-0.8-0.9-0.9-1.2s-0.1-0.7,0-1.1c0.2-0.7,0.7-1.5,1-3
    c0.1-0.7,0.3-1.3,0.4-2l21.5-10.5h0.2l-0.1-0.2l4-4.8l-5.4-4.8l4.5-1.7l-10.2-16.7l0.1-0.7l-0.4,0.1l-7.7-3l-0.7,9.7l-8.3-9
    c-0.6,0.3-1.1,0.7-1.7,1c-0.3,0.2-0.4,0.1-0.5-0.2s0-0.7,0.1-1.1c0.2-1,0.6-2.1,1.1-2.7c0.7-1,1.1-1.4,1.1-1.7s-0.2-0.5-0.7-1
    c-0.3-0.3-0.8,0.3-1.3,1.1c-0.5,0.7-0.9,1.5-1,1.6c-0.3,0.3-0.6,0.3-0.9,0.1c-0.2-0.2-0.5-0.6-0.6-1c-0.3-0.9-0.5-2-0.5-2.2
    c-0.1-0.4-0.5-0.7-0.9-1s-0.9-0.5-1.1-0.7v-0.1l0.4,0.6l-1.7,4.3l2,5.7l-6,4l-6-5l-3,2l-4.7-2.3h-0.6c0,0.1,0.2,0.2,0.2,0.4
    L375.8,309.9z"/>
</g>
<text x="480" y="220" fill="black" class="text">Camargo</text>
<text x="345" y="230" fill="black" class="textch">Saucillo</text>
<text x="345" y="280" fill="black" class="textxs">San Fco</text>
<text x="345" y="290" fill="black" class="textxs">de Conchos</text>
<text x="383" y="340" fill="black" class="textxs">Allende</text>
<text x="415" y="375" fill="black" class="textxs">Lopez</text>
<text x="415" y="430" fill="black" class="textxs">Coronado</text>
<text x="410" y="230" fill="black" class="textch">La cruz</text>
<text x="480" y="350" fill="black" class="text">Jimenez</text>
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
      var municipios = ["Camargo","Saucillo","SanFranciscoDeConchos","Allende","Lopez","Coronado","LaCruz","Jimenez"];
    </script>
    <script src="JS/modal.js"></script>
	</body>
         <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="name"></h2>
      <p class="lead">Información</p>
      <div id="ModalBorrable">

      </div>
      <div>
        <table id ="tableRegidores">
        </table>
        <div class="row">
          <div class="small-6 columns" >
            <button class="button" id="CrearP"style="width:100%;" onclick="modalAyuntamientos($('#name').html())">Crear Planilla</button>
          </div>
          <div class="small-6 columns">
            <button style="width:100%;"id="CrearR" class="button" onclick="modalRegidores($('#name').html())">Agregar Regidores</button>
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



</html>