<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Choose11 - LoginPage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
  <link rel="stylesheet" href="css/login-style.css">
</head>
<?php
if(isset($_POST['submit'])){
$userEmail = $_POST['email'];
$userPassword = $_POST['password'];
}
?>
<body>
<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>LOGIN</h2>
    </div>

    <div class='box-login'>
      <Form method="POST" name="login-form">
      <div class='fieldset-body' id='login_form'>
        <button onclick="openLoginInfo();" class='b b-form i i-more' title='Mais Informações'></button>
        
        <p class='field'>
          <label for='user'>Email ID</label>
          <input type='text' id='user' name='email' title='Email ID' />
          <span id='valida' class='i i-warning'></span>
        </p>

      	<p class='field'>
          <label for='pass'>PASSWORD</label>
          <input type='password' id='pass' name='password' title='Password' />
          <span id='valida' class='i i-close'></span>
        </p>

        <label class='checkbox'>
          <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in
        </label>


          <input type='submit' name="submit" id='do_login' value='GET STARTED' title='Get Started' onClick="location.href='user-after-login-page.html'">
      </div>
      </Form>
    </div>
  </div>

  <div class='box-info'>
		<p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Need Help?</h3> </p>
		<div class='line-wh'></div>
    <button onclick="" class='b-support' title='Forgot Password?'> Forgot Password?</button>
    <button onclick="" class='b-support' title='Contact Support'> Contact Support</button>
    <div class='line-wh'></div>
    <button onclick="" class='b-cta' title='Sign up now!'>
      <a href="signup-page.php" style="color: white;"> CREATE ACCOUNT</a>
    </button>
  </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src="js/login-sc.js"></script>
</body>
</html>
