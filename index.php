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
</head>
<body>
  <div class="main-container">
    <header class="main-header drop-shadow">
      <a class="main-logo" href="./">
        <img src="img/gfx/logo.svg" alt="Billum Friskole Logo" title="Tilbage til forsiden">
      </a>

      <button id="toggle-nav" class="main-nav-toggle fas fa-bars"></button>

      <nav class="main-nav">
        <div class="nav-header">
          <button id="close-nav" class="nav-close fas fa-times"></button>
        </div>

        <?php nav($nav) ?>
      </nav>
    </header>

    <?php require_once('pages/page-' . navDir($nav, true) . '.html'); ?>
  </div>
</body>
</html>
