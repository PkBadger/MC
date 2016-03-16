var jsonCasillas;
var jsonCasillas2;
var jsonAyuntamientos;
var mapita = getUrlParameter('mapa');

 if(mapita == 2){
   $(".tab-bar").css("background-color","#107896");
 }else if(mapita==3)
 {
   $(".tab-bar").css("background-color","#829356");
 }else if(mapita==4){
    $(".tab-bar").css("background-color","#C2571A");
    
    //window.setTimeout(casillas,2000);
 }

 if(mapita=="undefined"){
       ayuntamientos();
 }

function casillas(){
    //window.alert("casillista");
     $.getJSON("http://encuentro-sam23d.rhcloud.com/api/casillas",
        {
          action: "query",
          list: "search"
          
        },
        function(data) {
            jsonCasillas = data;
            
            casillasData(data);

        });
     $.getJSON("http://encuentro-sam23d.rhcloud.com/api/representantes",
        {
          action: "query",
          list: "search"
          
        },
        function(data) {
            jsonCasillas2 = data;
            
           
        });
}

function casillasData(data){
    
    for(keys in data){
      //  window.alert(data[keys].seccion);
        $("#"+data[keys].seccion).attr("fill","#f88d1e");
        $("#"+data[keys].seccion).css({ fill: "#fb881e" });
        
    }
}

function ayuntamientos()
{
     $.getJSON("http://encuentro-sam23d.rhcloud.com/api/ayuntamientos",
        {
          action: "query",
          list: "search"
          
        },
        function(data) {
            jsonAyuntamientos = data;
            ayuntamientosData(data);

        });
}

function ayuntamientosData(data)
{
    for(keys in data){
        var index = municipios.indexOf(data[keys].name);
       
        if(index > -1){
           
            colorAyuntamiento(data[keys]);
        }
    }
}

function colorAyuntamiento(data)
{
    if(data.presidente.sexo == "F"){
        $("#"+data.name).attr("fill","#fb98b0");
        $("#"+data.name).css({ fill: "#fb98b0" });
    }else{

        $("#" + data.name).attr("fill","#f88d1e");
        $('#'+data.name).css({ fill: "#fb881e" });
    }
}

function modal(clicked_id)
{
   
    if(window.location.pathname == '/movimiento/temp.html')
    {   

        if(map=="2"){     
            $("#table1").empty();
            $("#table2").empty();
            $("#name").text(clicked_id);
            
            $("#table1").append("<thead><th width='150'>Cargo</th><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Sexo</th><th width='150'>Domicilio</th></thead>");
            $("#table1").append("<tbody>");
            for(keys in json)
            {
                if(json[keys].seccion == clicked_id){
                    var texttype = "Subpromotor";
                    if(json[keys].tipo == "grl")
                    {
                        texttype = "Promotor";
                    }
                    $("#table1").append("<tr><th>"+ texttype+"</th><th>"+json[keys].name+"</th><th>"+json[keys].fLastname+"</th><th>"+json[keys].mLastname+"</th><th>"+json[keys].celular+"</th><th>"+json[keys].correo+"</th><th>"+json[keys].sexo+"</th><th>"+json[keys].domiciio+"</th></tr>");
                }
            }

            $("#table2").append("<thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Sexo</th><th width='150'>Domicilio</th></thead>");
            for(key in jsonS)
            {
          
                if(jsonS[key].seccion == clicked_id){
                    $("#table2").append("<tr><th>"+jsonS[key].name+"</th><th>"+jsonS[key].fLastname+"</th><th>"+jsonS[key].mLastname+"</th><th>"+jsonS[key].celular+"</th><th>"+jsonS[key].correo+"</th><th>"+jsonS[key].sexo+"</th><th>"+jsonS[key].domiciio+"</th></tr>");
                }
            }
            $('#myModal').foundation('reveal','open');
        } else if(map=="3"){
            $("#name2").text(clicked_id);
            $('#modalColor').foundation('reveal','open');

        }else{

              $("#tableCasilla").empty();
             $("#hCasilla").html(clicked_id);
             $("#pCasilla").html("No hay información disponible");
             $("#tableCasilla").append("<thead><th width='150'>Tipo</th><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Casilla</th></thead>");
             for(keys in jsonCasillas2){
                if(jsonCasillas2[keys].casilla.seccion == clicked_id){
                     
                    $("#tableCasilla").append("<tr><th>"+jsonCasillas2[keys].tipo+"</th><th>"+jsonCasillas2[keys].name+"</th><th>"+jsonCasillas2[keys].flastname+"</th><th>"+jsonCasillas2[keys].mlastname+"</th><th>"+jsonCasillas2[keys].cel+"</th><th>"+jsonCasillas2[keys].email+"</th><th>"+jsonCasillas2[keys].casilla.tipo+"</th></tr>");
                    $("#pCasilla").empty();
                }
             }
             $('#modalCasillas').foundation('reveal','open');
        }
    }
    else{

        var mapa = getUrlParameter('mapa');
        if(mapa == "2" || mapa == "3" || mapa == "4")
        {
            window.location.href = "temp.html?svg=" + clicked_id+"&mapa="+mapa;
        }else{ //Aqui mapa 1 
            $("#name").html(clicked_id);
            $("#ModalBorrable").empty();
            $("#tableRegidores").empty();
            $( "#CrearP" ).prop( "disabled", false );
            $( "#CrearR" ).prop( "disabled", true );

            $(".lead").html("No hay información disponible");
            for(keys in jsonAyuntamientos){
                if(jsonAyuntamientos[keys].name == clicked_id){
                    

                    $(".lead").html("");
                    $("#ModalBorrable").append("<h5>Presidente</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].presidente.name+"</th><th>"+jsonAyuntamientos[keys].presidente.fLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.mLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.celular+"</th><th>"+jsonAyuntamientos[keys].presidente.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Sindico</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].sindico.name+"</th><th>"+jsonAyuntamientos[keys].sindico.fLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.mLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.celular+"</th><th>"+jsonAyuntamientos[keys].sindico.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Regidores</h5>");
                    $("#tableRegidores").append("<thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th></thead>");
                    for(regidores in jsonAyuntamientos[keys].regidores){
                        $("#tableRegidores").append("<tr><th>" +  jsonAyuntamientos[keys].regidores[regidores].name + "</th><th>" +jsonAyuntamientos[keys].regidores[regidores].fLastname+"</th><th>"+jsonAyuntamientos[keys].regidores[regidores].mLastname+"</th></tr>")
                    
                    }
                    $( "#CrearP" ).prop( "disabled", true );
                    $( "#CrearR" ).prop( "disabled", false );
                }
            }
            $('#myModal').foundation('reveal','open');

        }
    }
}

function cambiarColor(data){
    var array = [];
    
    for(keys in jsonS){
        var flag=true;
        for(key in array){
            if(array[key] == jsonS[keys].seccion)
            {
                flag=false;
            }
        }
        if(flag){
            array.push(jsonS[keys].seccion);

        }
    }
    console.log(array);
    for(key in array){
        getNumber(array[key]);
    }
}

function getNumber(seccion){
     $.getJSON("http://encuentro-sam23d.rhcloud.com/api/simpatizantes?count=" + seccion,
        {
          action: "query",
          list: "search"
          
        },
        function(data) {     
                changeColor(data.total, seccion);
        });
}

//usar con RGBA de  .05
function changeColor(cuenta, seccion){
   

    $("#" + seccion).attr("fill","#cc7000");
    $("#" + seccion).attr("fill-opacity",cuenta*.05);
    $('#'+ seccion).css({ fill: "#cc7000"});


}

function modals(clicked_id)
{
    if(map=="2"){
        $("#table1").empty();
            $("#table2").empty();
            $("#name").text(clicked_id);
            
            $("#table1").append("<thead><th width='150'>Cargo</th><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Sexo</th><th width='150'>Domicilio</th></thead>");
            $("#table1").append("<tbody>");
            for(keys in json)
            {
                if(json[keys].seccion == clicked_id){
                    var texttype = "Subpromotor";
                    if(json[keys].tipo == "grl")
                    {
                        texttype = "Promotor"
                    }
                    $("#table1").append("<tr><th>"+ texttype+"</th><th>"+json[keys].name+"</th><th>"+json[keys].fLastname+"</th><th>"+json[keys].mLastname+"</th><th>"+json[keys].celular+"</th><th>"+json[keys].correo+"</th><th>"+json[keys].sexo+"</th><th>"+json[keys].domiciio+"</th></tr>");
                }
            }
            $("#table2").append("<thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Sexo</th><th width='150'>Domicilio</th></thead>");
            for(key in jsonS)
            {
           
                if(jsonS[key].seccion == clicked_id){
                    $("#table2").append("<tr><th>"+jsonS[key].name+"</th><th>"+jsonS[key].fLastname+"</th><th>"+jsonS[key].mLastname+"</th><th>"+jsonS[key].celular+"</th><th>"+jsonS[key].correo+"</th><th>"+jsonS[key].sexo+"</th><th>"+jsonS[key].domiciio+"</th></tr>");
                }
            }
            $('#myModal').foundation('reveal','open'); 
        } else if(map=="3"){
            $("#name2").text(clicked_id);
            $('#modalColor').foundation('reveal','open');

        }else{
             $("#tableCasilla").empty();
             $("#hCasilla").html(clicked_id);
             $("#pCasilla").html("No hay información disponible");
             $("#tableCasilla").append("<thead><th width='150'>Tipo</th><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Telefono</th><th width='150'>Correo</th><th width='150'>Casilla</th></thead>");
             for(keys in jsonCasillas2){
                if(jsonCasillas2[keys].casilla.seccion == clicked_id){
                     
                    $("#tableCasilla").append("<tr><th>"+jsonCasillas2[keys].tipo+"</th><th>"+jsonCasillas2[keys].name+"</th><th>"+jsonCasillas2[keys].flastname+"</th><th>"+jsonCasillas2[keys].mlastname+"</th><th>"+jsonCasillas2[keys].cel+"</th><th>"+jsonCasillas2[keys].email+"</th><th>"+jsonCasillas2[keys].casilla.tipo+"</th></tr>");
                    $("#pCasilla").empty();
                }
             }
             $('#modalCasillas').foundation('reveal','open');
        }
}

function agregar(tipo,seccion){

    $("#secc").val(seccion);
    $("#mun").val(svg);
    if(tipo == "simpatizante"){
        $("#tipo").empty();
        $("#nameA").html("Agregar Simpatizante");
        $("#submit").attr("onclick","saveS()");

    }else if(tipo=="promotor"){
        $("#nameA").html("Agregar Promotor");
        $("#tipo").html('<label>Tipo</label><input type="radio" name="tipo" value="grl" id="gral"><label for="gral">Promotor</label><input type="radio" name="tipo" value="sub" id="subpromotor"><label for="subpromotor">Subpromotor</label>');
        $("#submit").attr("onclick","saveP()");
    }
    $('#modalAgregar').foundation('reveal','open');   
}

function saveS(){

  
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/simpatizantes',
              type: 'post',
              data: $('form#forma').serialize(),
              success: function(data) {
                        location.reload();
                       }
          });

}
function saveP(){
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/promotores',
              type: 'post',
              data: $('form#forma').serialize(),
              success: function(data) {
                        location.reload();
                       }
          });
}

function saveColor(color,id){
    var id = $('#name2').text();
 
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/colores',
              type: 'post',
              data: "seccion="+id+"&color=" + color +"&municipio="+svg,
              success: function(data) {
                        location.reload();
                       }
          });
}

function mapa3(data){
    for(key in data){

      
        $("#" + data[key].seccion).attr("fill",data[key].color);
        $('#'+data[key].seccion).css({ fill: data[key].color });
    }
}

//Mapa 1 regidores
function modalRegidores(clicked_id){
    
     $('#mun').val(clicked_id);
     $('#modalCrearR').foundation('reveal','open');   
}

function modalAyuntamientos(clicked_id){
    
     $('#muni').val(clicked_id);
     $('#Ayuntamiento').html(clicked_id);
     $('#modalCrearA').foundation('reveal','open');   
}


function saveRegidor(){
    
     for(keys in jsonAyuntamientos){
        if(jsonAyuntamientos[keys].name == $("#mun").val()){
            
            $('#mun').val(jsonAyuntamientos[keys].id);
        }
     }
     $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/regidores',
              type: 'post',
              data: $('form#forma').serialize(),
              success: function(data) {
                        location.reload();
                       }
          });
}

function savePresident(){
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/presidentes',
              type: 'post',
              data: $('form#forma1').serialize(),
              success: function(data) {
                console.log(data);
                        saveSindico(data);
                       }
          });
}

function saveSindico(presidente){
    
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/sindicos',
              type: 'post',
              data: $('form#forma2').serialize(),
              success: function(data) {
                        saveAyun(data,presidente);
                       }
          });
}

function saveAyun(sindico,presidente){
    
    var values = {
            'presidente': presidente,
            'sindico': sindico,
            'nombre' : $("#Ayuntamiento").html()
    };
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/ayuntamientos',
              type: 'post',
              data: values,
              success: function(data) {
                        location.reload();
                       }
          });

}

function modalCasilla1(clicked_id){
    $('#hCasilla2').html(clicked_id);
    $('#modalCasillas2').foundation('reveal','open');   

}

function saveRepresentante(){
    var seccion = $('#hCasilla2').html();
    var tipo = $('#selectC').val();
    var flag = false;
    for(keys in jsonCasillas){
        if(jsonCasillas[keys].seccion == seccion && jsonCasillas[keys].tipo == tipo ){
            $('#hiddenC').val(jsonCasillas[keys].id);
            flag = true;
        }
    }
    if(flag){
        ajaxRepresentante();
    }else if(!flag){
       
        var values ={
            "seccion":seccion,
            "tipo":tipo
        }
        $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/casillas',
              type: 'post',
              data: values,
              success: function(data) {
                        $('#hiddenC').val(data);
                        
                        ajaxRepresentante();
                       }
          }); 
    }
}

function ajaxRepresentante(){
    $.ajax({
              url: 'http://encuentro-sam23d.rhcloud.com/api/representantes',
              type: 'post',
              data: $('form#formaC').serialize(),
              success: function(data) {
                        location.reload();
                       }
          });   
}

function planillaJuarez(){
     var clicked_id = "Juarez" 
     $("#nameA").html(clicked_id);
            $("#ModalBorrable").empty();
            $("#tableRegidores").empty();
            $( "#CrearP" ).prop( "disabled", false );
            $( "#CrearR" ).prop( "disabled", true );
            console.log(jsonAyuntamientos);
            $(".lead").html("No hay información disponible");
            for(keys in jsonAyuntamientos){

                if(jsonAyuntamientos[keys].name == clicked_id){
                    $(".lead").html("");
                    $("#ModalBorrable").append("<h5>Presidente</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].presidente.name+"</th><th>"+jsonAyuntamientos[keys].presidente.fLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.mLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.celular+"</th><th>"+jsonAyuntamientos[keys].presidente.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Sindico</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].sindico.name+"</th><th>"+jsonAyuntamientos[keys].sindico.fLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.mLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.celular+"</th><th>"+jsonAyuntamientos[keys].sindico.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Regidores</h5>");
                    $("#tableRegidores").append("<thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th></thead>");
                    for(regidores in jsonAyuntamientos[keys].regidores){
                        $("#tableRegidores").append("<tr><th>" +  jsonAyuntamientos[keys].regidores[regidores].name + "</th><th>" +jsonAyuntamientos[keys].regidores[regidores].fLastname+"</th><th>"+jsonAyuntamientos[keys].regidores[regidores].mLastname+"</th></tr>")
                    
                    }
                    $( "#CrearP" ).prop( "disabled", true );
                    $( "#CrearR" ).prop( "disabled", false );
                }
            }
            $('#myModalA').foundation('reveal','open');
    
}

function planillaChihuahua(){
    var clicked_id = "Chihuahua" 
     $("#nameA").html(clicked_id);
            $("#ModalBorrable").empty();
            $("#tableRegidores").empty();
            $( "#CrearP" ).prop( "disabled", false );
            $( "#CrearR" ).prop( "disabled", true );

            $(".lead").html("No hay información disponible");
            for(keys in jsonAyuntamientos){
                if(jsonAyuntamientos[keys].name == clicked_id){
                    $(".lead").html("");
                    $("#ModalBorrable").append("<h5>Presidente</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].presidente.name+"</th><th>"+jsonAyuntamientos[keys].presidente.fLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.mLastname+"</th><th>"+jsonAyuntamientos[keys].presidente.celular+"</th><th>"+jsonAyuntamientos[keys].presidente.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Sindico</h5>");
                    $("#ModalBorrable").append("<table><thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th><th width='150'>Celular</th><th width='150'>Correo</th></thead><tr><th>"+jsonAyuntamientos[keys].sindico.name+"</th><th>"+jsonAyuntamientos[keys].sindico.fLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.mLastname+"</th><th>"+jsonAyuntamientos[keys].sindico.celular+"</th><th>"+jsonAyuntamientos[keys].sindico.correo+"</th></table>");
                    $("#ModalBorrable").append("<h5>Regidores</h5>");
                    $("#tableRegidores").append("<thead><th width='150'>Nombre</th><th width='150'>Apellido Paterno</th><th width='150'>Apellido materno</th></thead>");
                    for(regidores in jsonAyuntamientos[keys].regidores){
                        $("#tableRegidores").append("<tr><th>" +  jsonAyuntamientos[keys].regidores[regidores].name + "</th><th>" +jsonAyuntamientos[keys].regidores[regidores].fLastname+"</th><th>"+jsonAyuntamientos[keys].regidores[regidores].mLastname+"</th></tr>")
                    
                    }
                    $( "#CrearP" ).prop( "disabled", true );
                    $( "#CrearR" ).prop( "disabled", false );
                }
            }
            $('#myModalA').foundation('reveal','open');
    

}
var district=[
    {
        "nombre": "distrito 12",
        "region_code": "dis12"
    },
    {
       "nombre": "distrito 19",
       "region_code": "dis19"

    }

  

];
