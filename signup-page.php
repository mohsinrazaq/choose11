<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- form css -->
    <link rel="stylesheet" href="css/signup-form.css">
</head>
<?php
include("db.php");
if(isset($_POST['register'])){
            $_POST['username'];
            $_POST['useremail'];
            $_POST['cnic'];
            $_POST['gender'];
            $_POST['address'];
            $_POST['phone'];
}
?>
<body>

    <!-- registration form starts here -->
    <div class="form-wrapper">
        <div class="row">
            <section class="section">
              <header>
                <h3>CHOOSE11 Registration </h3>
                <h4>Please fill your information bellow</h4>
              </header>
              <main class="form-wrapper">
                <form method="POST" name="registration-form">

                  <div class="form-item box-item">
                    <input type="text" name="username" placeholder="Name" data-required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>

                  <div class="form-item box-item">
                    <input type="email" name="useremail" placeholder="Email" data-email data-required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
                  </div>

                  <div class="form-item box-item">
                    <input type="text" name="cnic" placeholder="CNIC No" data-required maxlength="13">
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>
                  
                  <div class="form-item box-item">
                    <div class="form-item-triple">
                      <div class="radio-label">
                        <label class="label">Gender</label>
                      </div>
                      <div class="form-item">
                        <input id="Male" type="radio" name="gender" value="Male" data-once>
                        <label for="Male">Male</label>
                      </div>
                      <div class="form-item">
                        <input id="Female" type="radio" name="gender" value="Female" data-once>
                        <label for="Female">Female</label>
                      </div>
                    </div>
                    <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
                  </div>
                  
              
                  <div class="form-item box-item">
                    <input type="text" name="address" placeholder="Address" data-required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>
             
                  <div class="form-item box-item">
                    <input type="text" name="phone" placeholder="Phone No" data-required data-number data-count="14"
                    maxlength="14">
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
                    <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="true"></i> must be 12 digits</small>
                  </div>

                  <div class="form-item">
                    <span id="submit" name="register" class="submit">Register</span>
                  </div>

                </form>
              </main>
              <footer>
                <p>Already have an account? <a href="login-page.html">Login here</a></p>
              </footer>
              <i class="wave"></i>
            </section>
          </div>
    </div>
    <!-- registration form ends here -->

</body>
<script src="js/signup-form-sc.js"></script>
</html>