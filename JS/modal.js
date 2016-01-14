function modal(clicked_id)
{
    var mapa = getUrlParameter('mapa');
    if(mapa == "2")
    {
        window.location.href = "temp.html?svg="+clicked_id;
    }else{
    $('#myModal').foundation('reveal','open');}

}
function modals(clicked_id)
{
    
    document.getElementById("name").innerHTML = "Seccion: " +clicked_id;
    $('#myModal').foundation('reveal','open');

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