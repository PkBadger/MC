<?php

require_once('login.php');
?>
<html>
	<head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="foundation/css/foundation.css" />
		<link rel="stylesheet" href="css/distritos.css" />
		<link rel="stylesheet" href="css/styles.css" />
	    <script src="foundation/js/vendor/modernizr.js"></script>
	    <script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/foundation.min.js"></script>
		
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
        <h1 class="title" id="nom"></h1>
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
    	
<!-- GeneraCFFr: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<div id="container" style="width: 100vw; height: 90vh;">
	<img class="inject-me" >
</div>

 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>
<script src="JS/modal.js"></script>
<script type="text/javascript">
      isSeccion =true;
			var svg = getUrlParameter('svg');
      var map = getUrlParameter('mapa');

			
			document.getElementById("nom").innerHTML = svg;
			$(".inject-me").attr("src","Imagenes/"+svg+".svg");
		</script>
  <script src="JS/svg-pan-zoom.min.js"></script>
 
  <script src="JS/svg-injector.min.js"></script>
  <script type="text/javascript">
   var mySVGsToInject = document.querySelectorAll('img.inject-me');

  // Do the injection
 // SVGInjector(mySVGsToInject);
	SVGInjector(mySVGsToInject, null, function (count) {
	  // Callback after all SVGs are injected
	  	 
	     zoo();

       jsons();

		
	});
	

	function zoo(){
		 var panZoomTiger = svgPanZoom('#Layer1', {
		  controlIconsEnabled: true});
		 box();
	}
function jsons(){
  if(map == "2"){
       var json;
     var jsonS;
         json4(); 
  }else if(map == "3"){
    json3();

   
  }else if(map == "4"){
    casillas();

   
  }
}

   function json4(){
   

   $.getJSON("http://encuentro-sam23d.rhcloud.com/api/promotores?municipio=" + svg,
          {
            action: "query",
            list: "search"
            
          },
          function(data) {
             
              json=data;
              

          });
    $.getJSON("http://encuentro-sam23d.rhcloud.com/api/simpatizantes?municipio=" + svg,
          {
            action: "query",
            list: "search"
            
          },
          function(data) {
             
              jsonS=data;
              cambiarColor(data);
              
              

          });
   }
   function json3(){
    var json;
    $.getJSON("http://encuentro-sam23d.rhcloud.com/api/colores",
          {
            action: "query",
            list: "search"
            
          },
          function(data) {
              
              json=data;
              mapa3(data);
              

          });}
  </script>
  <script>
      $(document).foundation();
  </script>
     <script src="JS/box.js"></script>
    	<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  		  <h2>Seccion:</h2>
        <h2 id="name"></h2>
  		  
        <h5> Promotores </h5>
  		  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        <table id="table1"></table>
        <h5> Simpatizantes </h5>
        <table id="table2"></table>
        <div class="row">
          <div class="small-6 columns">
            <button onclick="agregar('promotor',$('#name').text())" style="width:100%;">Agregar Promotores</button>
          </div>
          <div class="small-6 columns">
            <button onclick="agregar('simpatizante',$('#name').text())" style="width:100%;">Agregar Simpatizantes</button>
          </div>
        </div>
		  </div>
      <div id="modalAgregar" class="reveal-modal" data-reveal aria-laballedby="Agregar" aria-hidden="true" role="dialog">
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        <h3 id="nameA"><h3>
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
                <label>Seccion
                  <input type="number" name="seccion" min="1" readonly id="secc">
                
                </label>
            </div>
              <div class="small-4 columns">
                <label>E-mail
                  <input type="email" name="correo">            
                </label>
            </div>
            <div class="small-4 columns">
                <label># de telefono
                  <input type="number" name="celular">            
                </label>
            </div>
           </div>
           <div class="row">
              <div class="small-6 columns">
                <label>Domicilio
                  <input type="text" name="domicilio"  />
                </label>
              </div>
              <div class="small-6 columns">
                <label>Municipio
                  <input type="text" name="municipio" id="mun" readonly />
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
            <input type="button" id="submit" value="Guardar" class="button"style="width:100%;" >
          </div>

          </form>
      </div>
      <div id="modalColor" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2>Seccion:</h2>
        <h2 id="name2"></h2>
        <h3 align="center">Cambiar color:</h3>
        <div class="row">
          <div class="small-2 columns">
                <a onclick="saveColor('#ff850A')"><div class="color-box" style="background-color: #FF850A;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>
        <div class="small-2 columns">
                <a onclick="saveColor('#ff3333')"><div class="color-box" style="background-color: #FF3333;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>
          <div class="small-2 columns">
               <a onclick="saveColor('#33cc33')"><div class="color-box" style="background-color: #33cc33;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>          <div class="small-2 columns">
               <a onclick="saveColor('#0000ff')"> <div class="color-box" style="background-color: #0000ff;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>
          <div class="small-2 columns">
                <a onclick="saveColor('#cc6699')"><div class="color-box" style="background-color: #cc6699;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>
          <div class="small-2 columns">
                <a onclick="saveColor('#333333')"><div class="color-box" style="background-color: #333333;"></div></a>
                <!-- Replace "#FF850A" to change the color -->
          </div>
        </div>
      </div>
       <div id="modalCasillas" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2>Seccion:</h2>
          <h2 id="hCasilla"></h2>
          <p id="pCasilla"></p>
          <table id="tableCasilla"></table>
          <div class="small-6 columns small-offset-3 columns">
            <a onclick="modalCasilla1($('#hCasilla').html())" id="mapa" class="button"style="width:100%;" >Nuevo representante</a>
          </div>  
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>

       </div>
       <div id="modalCasillas2" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2>Seccion:</h2>
          <h2 id="hCasilla2"></h2>
          
            <form id="formaC" method="post">
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
                    <label>Tipo
                      <select name="tipo">
                        <option value="propietario 1">Propietario 1</option>
                        <option value="propietario 2">Propietario 2</option>
                        <option value="suplente">Suplente</option>
                      </select>          
                    </label>
                </div>
               
               <div class="row">
                <div class="small-4 columns">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label>
                    <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label>
                </div>
                
                  <input type="hidden" id="hiddenC" name="casilla">
                    
              
              

            </form>
            <div class="small-4 columns">
                    <label>Casilla
                      <select id="selectC">
                        <option value="basica">Basica</option>
                        <option value="contigua">Contigua</option>
                        <option value="especial">Especial</option>
                        <option value="extraordinaria">Extraordinaria</option>
                      </select>
                    </label>
                </div>
              </div>
              </div>
            <div class="small-6 columns small-offset-3 columns">
                <input type="button" onclick="saveRepresentante();" id="submit" value="Guardar" class="button"style="width:100%;" >
              </div>

          
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>

       </div>
	</body>
	


</html>
