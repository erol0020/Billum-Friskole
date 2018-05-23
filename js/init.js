// Når siden er færdig med indlæsningen af siden, kør scriptet nedenfor
document.addEventListener('DOMContentLoaded', function() {

  // Function der kører hver eneste gang størrelsen på vinduet bliver ændret
  function resNav(width, bool){
    var navSubTitle = document.querySelectorAll('.nav-sub-title');

    // Responsive mode
    if(width <= 760 && bool == false){
      bool = true;

      // Skjul submenuerne på på mobil versionen
      var subMenues = document.getElementsByClassName('nav-sub-structure');
      for(var $i = 0; $i < subMenues.length; $i++){
        subMenues[$i].style.display = 'none';
      }

      // TIlføj < (chevron) pil på hovedmenuerne
      for(var $i = 0; $i < navSubTitle.length; $i++){
        var append = document.createElement('small');

        append.className = 'res-chevron-toggle';
        navSubTitle[$i].appendChild(append);
      }

      // Respnsive menu klik chevron drop down
      var resChevrons = document.querySelectorAll('.res-chevron-toggle');
      var navClickToggle = false;
      var navClickTarget = null;

      // Tilføj click events på alle chevron pile på hovedmenuerne
      for(var navInt = 0; navInt < resChevrons.length; navInt++){
        resChevrons[navInt].addEventListener('click', function(){

          // Hvis ingen undermenuer er åben
          if(navClickToggle == false && navClickTarget == null){
            navClickToggle = true;
            navClickTarget = this;

            this.style.transform = 'rotate(0deg)';
            this.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'inline-block';

          // Hvis en undermenu er åben men det er en anden der er klikket
          } else if(navClickToggle == true && navClickTarget != this){
            navClickTarget.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'none';
            navClickTarget.style.transform = 'rotate(90deg)';

            navClickTarget = this;

            this.style.transform = 'rotate(0deg)';
            this.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'inline-block';

          // Hvis man klikker på den samme undermenu
          } else {
            navClickToggle = false;
            navClickTarget.style.transform = 'rotate(90deg)';
            navClickTarget.parentNode.parentNode.getElementsByClassName('nav-sub-structure')[0].style.display = 'none';
            navClickTarget = null;
          }

        }); // Click event end
      } // For loop end

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


  // Arrow up

  // Hvis der bliver scrollet 40 px ned fra toppen af dokumentet vil pilen vise sig

  window.onscroll = function () {scrollFunction()};

  function scrollFunction () {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      document.getElementById ("arrow-up-id").style.display ="block";
    } else {
      document.getElementById ("arrow-up-id").style.display ="none";
    }
  }

// Når brugeren trykker på knappen vil der blive scrollet til toppen af dokumentet

document.querySelector('#arrow-up-id').addEventListener('click', function(){
  topFunction();
});

function topFunction() {
  document.body.scrollTop = 0 //For Safari
  document.documentElement.scrollTop = 0; //For chrome og firefox
}

document.querySelector('#scroll-click').addEventListener('click', function(){
  document.body.scrollTop = 458 //For Safari
  document.documentElement.scrollTop = 458; //For chrome og firefox
});


}); // js slut
