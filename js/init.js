// Når siden er færdig med indlæsningen af siden, kør scriptet nedenfor
document.addEventListener('DOMContentLoaded', function() {

  // Burger menu klik
  var Navtoggle = false;
  document.querySelector('#toggle-nav').addEventListener('click', function(){

    // Åben navigationen
    if(Navtoggle == false){
      document.querySelector('.main-nav').setAttribute("style","transform: translateY(0%);");
      Navtoggle = true;

    // Luk navigationen
    } else {
      document.querySelector('.main-nav').setAttribute("style","transform: translateY(-100%);");
      Navtoggle = false;
    }
  });

  // Luk nav klik
  document.querySelector('#close-nav').addEventListener('click', function(){
    document.querySelector('#toggle-nav').click();
  });
});
