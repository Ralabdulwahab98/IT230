<?php
require_once __DIR__.'/../config/app.php';
require_once __DIR__.'/../config/database.php';
?>
<!DOCTYPE html>
<html lang= "<?php echo $config['lang'] ?>" dir="<?php echo $config['dir'] ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $config['app_name']."  |  ".$title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css\master.css">
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <h4 class="appName">College_Partners</h4>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $config['app_url']?>index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $config['app_url']?>about.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $config['app_url']?>services.php">Services</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav mr-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $config['app_url']?>login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $config['app_url']?>signup.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
