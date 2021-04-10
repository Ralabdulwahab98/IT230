<?php
  $title = "Services";
  require "template/header.php";
  $services = $mysqli->query("select * from services")->fetch_all(MYSQLI_ASSOC);
?>
<div class="container" style="padding: 5em;">
  <div class="row">
    <?php foreach ($services as $service){ ?>
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-header"><b>Service name: </b><?php echo $service['name'] ?></div>
          <div class="card-body">
            <img class="img-fluid mb-3" src="<?php echo $config['app_url'].$service['image'] ?>" alt="">
            <div><b>Description: </b><?php echo $service['description'] ?></div>
            <div></div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
  require "template/footer.php";
?>
