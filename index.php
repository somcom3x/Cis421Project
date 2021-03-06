<?php
/*
@package CIS421 project
@authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

First Page to Our Website (home page)
*/
?>
<?php include("header.php");
session_start();?>
<div class="login-form-wrapper container-fluid text-center">
    <form class="form-signin" method="post" action="validate.php">
      <i class="fas fa-book fa-9x"></i>
      <h1 class="website-title display-3 font-weight-light">University Library</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="login-email" class="sr-only">Email address</label>
      <input type="email" id="login-email" name="login-email"class="form-control" placeholder="Email address" required autofocus>
      <label for="login-password" class="sr-only">Password</label>
      <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Password" required>
      <?php if(isset($_SESSION['login']) && $_SESSION['login'] ==='F'): ?>
      <small class="text-danger">Password or Email incorect. Try Again.</small>
      <?php endif; ?>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="student">Student Sign in</button>
      <button class="btn btn-lg btn-primary btn-block" type="submit"name="admin">Admnin/Worker Sign in</button>
    </form>
</div>
<?php include("footer.php"); ?>
