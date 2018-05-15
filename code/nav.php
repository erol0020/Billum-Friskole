<?php
$nav = array(
  'Skole' => array(
    'om-skolen'      => 'Om Skolen',
    'sfo'            => 'SFO',
    'ansatte-skolen' => 'Ansatte'
  ),
  'Børnehave' => array(
    'om-boernehaven'     => 'Om Børnehaven',
    'ansatte-boernehaven' => 'Ansatte'
  ),
  'Praktisk Info' => array(
    'kontakt'     => 'Kontakt',
    'indmeldelse' => 'Indmeldelse',
    'priser'      => 'Priser',
    'kalender'    => 'Kalender',
    'udmeldelse'  => 'Udmeldelse'
  ),
  'Om Os' => array(
    'vaerdigrundlag' => 'Værdiggrundlag',
    'vedtaegter'     => 'Vedtægter',
    'ugebrev'        => 'Ugebrev'
  )
);

function nav($nav){
  echo '<ul class="nav-main-structure">';

  foreach($nav as $key => $val){

    if(is_array($val)){

      echo '<li><span class="nav-sub-title">' . $key . '</span>';
      echo '<ul class="nav-sub-structure">';

      foreach($val as $subK => $subV){
        if(isset($_GET['page']) && $_GET['page'] == $subK){
          echo '<li><a class="nav-active" href="?page=' . $subK . '">' . $subV . '</a></li>';
        } else {
          echo '<li><a href="?page=' . $subK . '">' . $subV . '</a></li>';
        }
      }
      echo '</li></ul>';

    } else {
      if(isset($_GET['page']) && $_GET['page'] == $key){
        echo '<li><a class="nav-active" href="?page=' . $key . '">' . $val . '</a></li>';
      } else {
        echo '<li><a href="?page=' . $key . '">' . $val . '</a></li>';
      }

    }
  }
  echo '</ul>';
}

function navDir($nav, $bool){
  if(isset($_GET['page'])){

    if(array_key_exists($_GET['page'], $nav)){
      if($bool == true){
        return $_GET['page'];
      } else {
        return $nav[$_GET['page']];
      }


    } else {

      foreach($nav as $key => $array){
        if(is_array($array)){
          if(array_key_exists($_GET['page'], $array)){
            if($bool == true){
              return $_GET['page'];
            } else {
              return $array[$_GET['page']];
            }

          }
        }
      }

      if($bool == true){
        return '404';
      } else {
        return 'Siden findes ikke';
      }
    }

  } else {
    if($bool == true){
      return 'forside';
    } else {
      return 'Forside';
    }
  }
}
