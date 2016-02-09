function modal(clicked_id)
{
    if(window.location.pathname == '/temp.html')
    {
        
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
        $('#myModal').foundation('reveal','open'); 
    }
    else{

        var mapa = getUrlParameter('mapa');
        if(mapa == "2")
        {
            window.location.href = "/temp.html?svg=" + clicked_id;
        }else{
        $('#myModal').foundation('reveal','open');}
    }
}
function modals(clicked_id)
{
    
    document.getElementById("name").innerHTML = "Seccion: " +clicked_id;
    $('#myModal').foundation('reveal','open');

}

function agregar(tipo){
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
    window.alert("yes");
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