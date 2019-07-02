<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Signup Form</title>
    <!-- form css -->
    <link rel="stylesheet" href="css/signup-form.css">
</head>
<?php
include("db.php");
$readquery = "SELECT * FROM users_data";
$res = mysqli_query($con,$readquery);

if(isset($_POST['register'])){
   $uname =   $_POST['username'];
   $uemail =  $_POST['useremail'];
   $ucnic =   $_POST['cnic'];
   $upassword =$_POST['password'];
   $ugender = $_POST['gender'];
   $uaddress =$_POST['address'];
   $uphone =  $_POST['phone'];
   $InsertQuerry = "INSERT INTO users_data (user_name,user_email,user_cnic,user_password,user_gender,user_address,user_phone_no) 
                    VALUES('$uname','$uemail','$ucnic','$upassword','$ugender','$uaddress','$uphone')";
        $result = mysqli_query ($con,$InsertQuerry);  
        echo "Data Entered";
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
                    <input type="text" name="username" placeholder="Name" data-required required> 
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>

                  <div class="form-item box-item">
                    <input type="email" name="useremail" placeholder="Email" data-email data-required required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
                  </div>

                  <div class="form-item box-item">
                    <input type="text" name="cnic" placeholder="CNIC No eg. 00000-0000000-0" data-required maxlength="20" required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>

                  <div class="form-item box-item">
                    <input type="text" name="password" placeholder="Password" data-required maxlength="30" required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>
                  
                  <div class="form-item box-item">
                    <div class="form-item-triple">
                      <div class="radio-label">
                        <label class="label" required>Gender</label>
                      </div>
                      <div class="form-item">
                        <input id="Male" type="radio" name="gender" value="Male" data-once checked="checked">
                        <label for="Male" >Male</label>
                      </div>
                      <div class="form-item">
                        <input id="Female" type="radio" name="gender" value="Female" data-once>
                        <label for="Female">Female</label>
                      </div>
                    </div>
                    <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
                  </div>
                  
              
                  <div class="form-item box-item">
                    <input type="text" name="address" placeholder="Address" data-required required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                  </div>
             
                  <div class="form-item box-item">
                    <input type="text" name="phone" placeholder="Phone No 0333-6334444  " data-required data-number data-count="14"
                    maxlength="14" required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
                    <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="true"></i> must be 14 digits</small>
                  </div>

                  <div class="form-item">
                    <input type="submit" id="submit" name="register" class="submit" value="Register"> 
                  </div>

                </form>
              </main>
              <footer>
                <p>Already have an account? <a href="login-page.php">Login here</a></p>
              </footer>
              <i class="wave"></i>
            </section>
          </div>
    </div>
    <!-- registration form ends here -->

</body>
<script src="js/signup-form-sc.js"></script>
</html>