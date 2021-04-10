<?php
  $title = "Home";
  require "template/header.php";
?>
<div class="container">
  <div class="row align-items-center my-5">
    <div class="col-lg-7">
      <img class="img-fluid rounded mb-4 mb-lg-0" src="images/Riyadh.jpg" alt="">
    </div>
    <div class="col-lg-5">
      <h1 class="font-weight-light">What is College_Partners?</h1>
      <p>College Partners is a software development team established at Saudi Electronic University by classmates.
      The team develop web, mobile, and stand-alone applications that help business to improve their IT infrastructions.
      What makes College Partners your best choice is their enthusiasm to code. Moreover, the team have a huge history working for Big companies in Saudi Arabia.
      If you want to learn more about the team, click the button below.</p>
      <a class="btn btn-primary" href="<?php echo $config['app_url'] ?>about.php">About us</a>
    </div>
  </div>
  <div class="py-5 bg-light px-3">
    <h1>Our Partners</h1>
    <p class="lead">These are some of our partners whom we proud to work with.</p>
    <img style="width: 150px" src="images\Jarir.png" alt="">
    <img style="width: 150px" src="images\Hungerstation.png" alt="">
    <img style="width: 150px" src="images\noon.png" alt="">
    <img style="width: 150px" src="images\Aramco.png" alt="">
    <img style="width: 150px" src="images\berain.png" alt="">
  </div>
</div>
<?php
  require "template/footer.php";
?>
