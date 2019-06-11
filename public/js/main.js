/*
  Slidemenu
*/



function menuClick(element) {
  $body = document.body;
	$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
}


/*
  Jquery
*/

function is_safari(){
  return (navigator.userAgent.indexOf("Safari") > -1) || doc.compatMode == 'BackCompat'
}


$(document).ready(function () {
  $("a").click(function () {
      var elementClick = $(this).attr("href");
      var destination = $(elementClick).offset().top;
      if (is_safari()) {
          $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость
      } else {
          $('html').animate({ scrollTop: destination }, 1100);
      }
      return false; 
  });
});