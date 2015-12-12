$('path').mouseover(function (e) {
  var region_data=$(this).attr('id');
  $('<div class="info_panel">Seccion: <br>' 
    + region_data 
    + '</div>').appendTo('body');
}).mouseleave(function () {
  $('.info_panel').remove();
}).mousemove(function(e) {
    var mouseX = e.pageX, // X coordinates of mouse
        mouseY = e.pageY; // Y coordinates of mouse

    $('.info_panel').css({
      top: mouseY-50,
      left: mouseX - ($('.info_panel').width() / 2)
    });
});