<?php require_once('code/nav.php') ?>
<!DOCTYPE html>
<html lang="da">
<head>
  <!-- Title -->
  <title> <?php echo navDir($nav, false) ?> | Billum Friskole</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css">

  <!-- JS -->
  <script src="js/init.js"></script>

  <!-- favicon -->
  <link rel="shortcut icon" href="img/gfx/icon.png">
</head>
<body>
  <div class="main-container">
    <header class="main-header drop-shadow">
      <a class="main-logo" href="./">
        <img src="img/gfx/logo.svg" alt="Billum Friskole Logo" title="Tilbage til forsiden">
      </a>

      <button id="toggle-nav" class="main-nav-toggle" title="Klik for at åbne hovedmenuen"><span class="menu-text">Menu</span><span class="menu-icon fas fa-bars"></span></button>

      <nav class="main-nav">
        <div class="nav-header">
          <button id="close-nav" class="nav-close fas fa-times"></button>
        </div>

        <?php nav($nav) ?>
      </nav>
    </header>

    <?php require_once('pages/page-' . navDir($nav, true) . '.html'); ?>

    <footer class="main-footer">
      <div class="main-footer-content">

        <div class="footer-col-adress">
          <h3 class="footer-title">Kontakt Billum Friskole</h3>
          <ul>
            <li>Telefon: <a href="tel:+4551889596">+45 51 88 95 96</a></li>
            <li>Mail: <a href="mailto:gimo@billumfriskole.dk">gimo@BillumFriskole.dk</a></li>
            <li><address>Adresse: <a target="_blank" href="https://www.google.dk/maps?q=Kildegårsvej-20-6852-Billum">Kildegårsvej 20, 6852 Billum</a></address></li>
          </ul>
        </div>

        <div class="footer-col-intranet">
          <h3 class="footer-title">Intranet</h3>
          <p>Log ind på intranettet her: <a href="https://billumfriskole.viggo.dk" target="_blank">Viggo.dk</a></p>
        </div>

        <div class="footer-col-social">
          <h3 class="footer-title">Sociale Medier</h3>
          <ul>
            <li><a href="https://www.facebook.com/billumfriskole/" target="_blank"><img src="img/gfx/facebook.png" alt="Facebook Ikon">Facebook</a></li>
          </ul>
        </div>

      </div>

      <div class="main-footer-credentials"><p>Billum Friskole © 2017-2018 All Rights Reserved</p></div>
    </footer>
  </div>
</body>
</html>
