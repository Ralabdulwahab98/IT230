<?php
  $title = "login";
  require "template/header.php";
?>
<div class="container" style="width: 500px; margin-top: 200px;">
  <h2 class="mb-3">Login</h2>
  <form class="form-control" action="" method="post">
    <div class="mb-3">
      <label for="email1" class="form-label">Email address</label>
      <input type="email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Login</button>
    <p class="mt-2">Don't have an account? <a href="<?php echo $config['app_url'] ?>signup.php"> Sign Up </a></p>
  </form>
</div>
<?php
  require "template/footer.php";
?>
