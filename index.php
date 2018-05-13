<?php require_once('code/nav.php') ?>
<!DOCTYPE html>
<html lang="da">
<head>
  <!-- Title -->
  <title> <?php echo navDir($nav, false) ?> | Billum Friskole</title>
</head>
<body>
  <div class="main-wrapper">
    <?php nav($nav) ?>
    <?php require_once('pages/page-' . navDir($nav, true) . '.php') ?>
  </div><!--/.main-wrapper-->
</body>


<script>
/*
  // Navigation struktur i object
  var nav = {
      'Skole'             : {
            'om-skolen'   : 'Om Skolen',
            '7-8-klasse'  : '7-8 Klassen',
            'dagligdagen' : 'Dagligdagen',
            'ansatte'     : 'Ansatte'
      },
      'SFO'               : {
        'om-sfo'          : 'Om SFO',
        'dagligdagen-sfo' : 'Dagligdagen SFO',
        'ansatte-sfo'     : 'Ansatte SFO'
      },
      'børnehave'         : 'Børnehave',
      'Praktisk Info'     : {
      'indmeldelse'                  : 'Indmeldense',
      'priser'                       : 'Priser',
      'kalender'                     : 'Kalender',
      'aktiviteter'                  : 'Aktiviteter',
      'vedtaegter'                   : 'Vedtægter',
      'vaerdigrundlag'               : 'Vaerdigrundlag',
      'undervisningsplaner'          : 'Undervisningplaner',
      'certificeret-tilsynsfoerelse' : 'Certificeret Tilsynsførelse',
      'udmeldelse'                   : 'Udmeldelse'
    },
    'kontakt'           : 'Kontakt'
  }

  // Få value fra 'page' get request
  function getPagevalue(parameterName, callback){
    var result = null,
        tmp    = [];

    // Fjern ? fra requests og foreach værdierne
    location.search.substr(1).split("&").forEach(function(item){
      tmp = item.split("=");
      if(tmp[0] === parameterName){
        result = decodeURIComponent(tmp[1]);
      }
    });

    callback(result);
  }

  // Kør script når Indholdet til DOM er færdig med indlæsningen
  document.addEventListener('DOMContentLoaded', function(){
    var output = '';

    Object.keys(nav).forEach(function(key){
      // Opret Hovedsiderne
      if(typeof nav[key] != 'object'){
        output += '<li><a href="' + location.protocol + '//' + location.host + location.pathname + '?page=' + key + '">' + nav[key] + '</a></li>';

      // Opret undersiderne
      } else {
        output += '<li><span>' + key + '</span><ul class="sub-nav">';
        Object.keys(nav[key]).forEach(function(subKey){
          output += '<li><a href="' + location.protocol + '//' + location.host + location.pathname + '?page=' + subKey + '">' + nav[key][subKey] + '</a></li>';
        });
      }
      output += '</ul></li>';
    });

    // Udskriv li listerne fra output variablen;
    document.getElementById('main-nav').innerHTML = output;




    getPagevalue('page', function(value){
      if(nav.hasOwnProperty(value)){
        alert(value);
      } else {
        Object.keys(nav).forEach(function(key){
          if(nav[key].hasOwnProperty(value)){
            alert(value);
          }
        });
      }
    });



  });
*/
</script>
</html>
