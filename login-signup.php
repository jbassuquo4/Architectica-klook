<?php include_once 'config/init.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Klook Travel | login</title>
      <link rel="stylesheet" href="css/custom-login.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
     <?php displayMessage(); ?>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
   
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POSt">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" name="login" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
		<!-- sign up form begings -->
      <form class="sign-up-htm" action="signup.php" method="POST">
      	<div class="group">
          <input type="submit" class="button1" value="Sign Up with FACEBOOK">
        </div>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" name="password2" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" name="signup" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Have an Account</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>
