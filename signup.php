<?php
  $title = "Sign-up";
  require "template/header.php";
?>


<div class="container" style="width: 800px; margin-top: 60px;">
  <h2 class="mb-3">Sign Up</h2>
  <h5 class="">Welcome to our website. Please fill in the form below to complete your registration.</h5>
  <h5 class="mb-4">If you already have an account, login <a href="<?php echo $config['app_url'] ?>login.php">here</a></h5>
  <form class="form-control" id="form" action="" method="post" >
    <div class="mb-3 mt-2">
      <label for="first_name" class="form-label">First Name:</label>
      <input id="first_name" type="text" name="first_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name:</label>
      <input id="last_name" type="text" name="last_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username:</label>
      <input id="username" type="username" name="username" class="form-control"
      pattern=".{8,}" title="Eight or more characters">
    </div>
    <div class="mb-3">
      <label for="email1" class="form-label">Email address</label>
      <input id="email" type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input id="password" type="password" name="password" class="form-control" required
      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
      title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </div>
      <!-- 
        TODO:
        check if the password match 
      -->
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Password confirmation</label>
      <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
    </div>
    <button type="submit"  class="btn btn-success mb-3"> Register</button>
  </form>
</div>



<?php
  require "template/footer.php";
?>
