function modal(clicked_id)
{
    
    document.getElementById("name").innerHTML = clicked_id;
    $('#myModal').foundation('reveal','open');

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