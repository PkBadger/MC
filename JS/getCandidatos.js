 var json;

 if(mapa == 2){
   $(".tab-bar").css("background-color","#107896");
 }else if(mapa==3)
 {
   $(".tab-bar").css("background-color","#829356");
 }else if(mapa==4){
    $(".tab-bar").css("background-color","#C2571A");
 }else{
  jsonDiputados()
 }

function modalDiputados(){
  var distrito = $("#nombre").html();
  distrito = distrito.replace('dis','');

  $("#disCambiar").val(distrito);
  $('#myModal').foundation('reveal','open');
}

function jsonDiputados(){
 $.getJSON(backEndUrl+"/api/candidatos",
        {
          action: "query",
          list: "search"
          
        },
        function(data) {
           for(key in data)
            {
              if(data[key].cargo =="propietario")
              {
                changeColor(data[key]);
              }
            }
            json=data;

        });
  
} 
function changeColor(diputado)
{
  var distrito = "dis" + diputado.district;
  
  if(diputado.sexo == "F")
  {  
    $("#" + distrito).attr("fill","#fb98b0");
    $('#'+distrito).css({ fill: "#fb98b0" });
  }
  if(diputado.sexo == "M")
  {  
    $("#" + distrito).attr("fill","#f88d1e");
    $('#'+distrito).css({ fill: "#fb881e" });
    
  }
}
function subir(){
        var flag = false;
        var cargo = $("input[name=cargo]:checked","#myForm").val();
        var distrito = $("input[name=distrito]").val();
        for(keys in json){

          if(cargo == json[keys].cargo && distrito == json[keys].district)
          {
            flag =true;
          }
        }
        if(!flag)
        {
          $.ajax({
              url: backEndUrl + '/api/candidatos',
              type: 'post',
              data: $('form#myForm').serialize(),
              success: function(data) {
                        location.reload();
                       }
          });
        }else{
          window.alert("Ya existe un diputado con ese cargo y ese distrito");
        }
      }


function choose(id,link){
   if(mapa == 2 || mapa == 3 || mapa == 4){
     window.location.href = link+"?mapa="+ mapa;
   }else{
    
   
  $("#mapa").attr("onclick","window.location.href = '" + link+"?mapa="+ mapa +"'" );
  show(id);
  }
}

function chooseD(id){
   if(mapa == 2 || mapa == 3 || mapa == 4){
     window.location.href = "temp.php?svg="+id +"&mapa="+ mapa 
   }else{
    $("#mapa").attr("onclick","window.location.href ='temp.php?svg="+id +"&mapa="+ mapa +"'");
    show(id);
  }

}

function broadcastMail(){
    var mailto = "mailto:";
    $.getJSON(backEndUrl+"/api/simpatizantes",
        {
          action: "query",
          list: "search"
          
        },
        function(data) {
           for(key in data)
            {
              mailto = mailto.concat(data[key].correo + ",")
            }
            window.location.href = mailto;

        });   
}

function show(id){

  
    $("#nombre").html(id);
    $("#suplentem").html("");
    $("#propietariom").html("");
    id = id.replace('dis','');
    
    for(keys in json)
    {
        if(json[keys].district == id)
        {
          var string = "<td>" + json[keys].name +"</td><td> " +json[keys].flastname + " </td><td>" +json[keys].mlastname +"</td><td>"+json[keys].cargo+"</td><td>"+json[keys].cel+"</td><td>"+json[keys].email+"<td>"
          if(json[keys].cargo =="propietario")
          {
            $("#propietariom").html(string);
          }else{
            $("#suplentem").html(string);
          }
        }
    }
    $('#Modal').foundation('reveal','open');
    
}
function statics(){
    var numM=0;
    var numF=0;
    for(keys in json)
    {
      if(json[keys].sexo =="F")
      {
        numF++;
      }else{
        numM++;
      }
    }
    var chart;
            var legend;

            var chartData = [{
                country: "Hombres",
                litres: numM
            }, {
                country: "Mujeres",
                litres: numF
            }];
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                
                // WRITE
                chart.write("chartdiv");
             $('#staticModal').foundation('reveal','open');   
        
  
}