// Når siden er færdig med indlæsningen af siden, kør scriptet nedenfor
document.addEventListener('DOMContentLoaded', function() {

  // Responsiv script
  function resNav(width, bool){
    var navSubTitle = document.querySelectorAll('.nav-sub-title');

    // Responsive ON
    if(width <= 760 && bool == false){
      bool = true;

      // Gem alle submenuer på mobilenheden
      var subMenues = document.getElementsByClassName('nav-sub-structure');
      for(var $i = 0; $i < subMenues.length; $i++){
        subMenues[$i].style.display = 'none';
      }

      for(var $i = 0; $i < navSubTitle.length; $i++){
        var append = document.createElement('small');

        append.className = 'res-chevron-toggle';
        navSubTitle[$i].appendChild(append);
      }

      // Respnsive menu klik chevron drop down
      var resChevrons = document.querySelectorAll('.res-chevron-toggle');
      var navClickToggle = false;
      var navClickTarget = null;

      for(var navInt = 0; navInt < resChevrons.length; navInt++){
        resChevrons[navInt].addEventListener('click', function(){

          if(navClickToggle == false && navClickTarget == null){
            navClickToggle = true;
            navClickTarget = this;

            this.style.transform = 'rotate(0deg)';
            this.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'block';

          } else if(navClickToggle == true && navClickTarget != this){
            navClickTarget.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'none';
            navClickTarget.style.transform = 'rotate(90deg)';

            navClickTarget = this;

            this.style.transform = 'rotate(0deg)';
            this.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'block';

          } else {
            navClickToggle = false;
            navClickTarget.style.transform = 'rotate(90deg)';
            navClickTarget.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'none';
            navClickTarget = null;
          }

        });
      }

    // Responsive OFF
    }
    if(width > 760 && bool == true){
      bool = false;

      // Vis alle submenuer på computer
      var subMenues = document.getElementsByClassName('nav-sub-structure');
      for(var $i = 0; $i < subMenues.length; $i++){
        subMenues[$i].style.display = 'block';
      }

      for(var $i = 0; $i < navSubTitle.length; $i++){
        var target = navSubTitle[$i].getElementsByClassName('res-chevron-toggle')[0];
        navSubTitle[$i].removeChild(target);
      }
    }
    return bool;
  }

  // Burger menu klik
  var Navtoggle = false;
  document.querySelector('#toggle-nav').addEventListener('click', function(){

    // Åben navigationen
    if(Navtoggle == false){
      document.querySelector('.main-nav').style.transform = 'translateY(0%)';
      Navtoggle = true;

    // Luk navigationen
    } else {
      document.querySelector('.main-nav').style.transform = 'translateY(-100%)';
      Navtoggle = false;
    }
  });

  // Luk nav klik
  document.querySelector('#close-nav').addEventListener('click', function(){
    document.querySelector('#toggle-nav').click();
  });

  // Responsive menu
  var bool = false;
  bool = resNav(window.innerWidth, bool); // Kør script når siden er loadet og når winduet bliver mindre
  window.addEventListener('resize', function(){
    bool = resNav(window.innerWidth, bool);
  });


}); // js slut
