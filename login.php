<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMRITA VISHWA VIDYAPEETHAM</title>
    <link rel="stylesheet" href="1.css">
    <link rel = "icon" href="images/logo.png" type = "image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="sweetalert.min.js"></script>
</head>
<body>
    
    <section class="main">
        <header>
            <img  src="images/logor.png" height="150px" width="500px">
        </header>
        <video src="images/final.mp4" muted loop autoplay></video>
    <div class="text">
      <h1 class="animate">GRACE MARK</h1><br>
      <h3>CALCULATOR</h3>
      <p>Amrita Grace Mark Calculator is a tool designed to assist educators in calculating the final grades of their students. The calculator typically has several operations, including adding and updating student scores, as well as the ability to calculate grades based on predetermined grading criteria
      </p>
    </div>
    <div class="wrapper">
      <div class="form-wrapper sign-in">
          <form action="login1.php" method="post" onsubmit="login1.php">
          <h2>Sign In</h2>
          <div class="input-group">
          <input type="number" required name="facid" id="fac_id">
          <label for="fac_id">Faculty Id</label>
          </div>
          <div class="input-group">
          <input type="password" required name="facpass" id="fac_pass">
          <label for="fac_pass">Password</label>
          </div>
          <button type="submit">Sign In</button>
          <div class="signUp-link">
          <p>Don't have an account? <a href="#"
          class="signUpBtn-link">Sign Up</a></p>
          </div>
          <div class="forget-link">
            <a href="#"
            class="forgetBtn-link">Forgot password?</a>
            </div>
          </form>
          </div>
          <div class="form-wrapper sign-up">
              <form action="signup.php" id="signupform" method="post">
              <h2>Sign up</h2>
              <div class="input-group">
                <input type="number" name="fid" required placeholder="Faculty Id" autocomplete="off">
                <p id="error-faculty-id" class="error-message" style="color:yellow"></p>
            </div>
            
            <div class="input-group">
                <input type="text" name="fname" required placeholder="Name">
                
            </div>
            <div class="input-group">
              <input type="email" name="fmail" required placeholder="Email">
              <p id="error-email" class="error-message" style="color:yellow"></p>
            </div>
            
            
            <div class="input-group">
              <input type="password" name="fpass" required placeholder="password">
              <p id="error-password" class="error-message" style="color:yellow"></p>
            </div>
            
              <button type="submit">Sign up</button>
              <div class="signUp-link">
              <p>already  have an account? <a href="#"
              class="signInBtn-link">Sign in</a></p>
              </div>
              </form>
              </div>
              <div class="form-wrapper forget">
                <form method="post" action="forget.php" >
                <h2>Forgot password</h2>
                <div class="input-group">
                <input type="email" required name="useremail">
                <label for="">Enter Email</label>
                </div>
                <button type="submit">Go</button>
                <p class="pt">Already have an account?</p><a href="login.php" class="forget-link2">Login</a>
                </form>
                </div>
  </div>
  <?php
    include('alert.php');
?>
</body>
</html>