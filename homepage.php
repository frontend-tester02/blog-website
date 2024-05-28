<?php
session_start();

include("connect.php")
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>My Blog</title>
  </head>
  <body>
    <!-- Header -->
    <header class="site-header">
      <div class="container site-header__container">
        <a href="index.html" class="site-header__logo">MyBlog</a>

        <nav class="sitenav site-header__sitenav">
          <ul class="sitenav__list">
            <li class="sitenav__item"><a href="#" class="sitenav__link">Home</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">About Me</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">Blog</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">Contact Me</a></li>
          </ul>
        </nav>

        <div class="site-header-btn">
          <button type="button" class="btn btn-signup" id="header-signin">Sign in</button>
          <button type="button" class="btn register-btn" id="header-signup">Sign up</button>
        </div>

          <div class="site-header__toggle js-toggle ">
            <i class="fa-solid fa-bars "></i>
          </div>
      </div>
    </header>

    <!-- Register -->

    <div class="site-register-inner">
      <div class="wrapper hidden" id="signUp">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="POST">
          <div class="input-group">
            <i class="fas fa-user"></i>
            <div class="input-item">
              <label for="fName">First Name</label>
              <input type="text" name="fName" id="fName" placeholder="First Name" required>
            </div>
          </div>
          <div class="input-group">
            <i class="fas fa-user"></i>
            <div class="input-item">
              <label for="lName">Last Name</label>
              <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            </div>
          </div>
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <div class="input-item">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <div class="input-item">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
          </div>
          <input type="submit" class="btn-register" value="Sign Up" name="signUp">
        </form>
          <p class="or">
            ---------or---------
          </p>
          <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
          </div>

        <div class="link">
          <p>Already Have Account ?</p>
          <button type="button" class="sign-btn" id="signInButton">Sign In</button>
        </div>
      </div>

  <!-- Sign In -->
  <div class="wrapper hidden" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form action="register.php" method="POST">
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <div class="input-item">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <div class="input-item">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
          <input type="submit" class="btn-register btn-signin" value="Sign In" name="signIn">
      </form>
      <p class="or">
        ---------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="link">
        <p>Don't have account yet ?</p>
        <button class="sign-btn" id="signUpButton">Sign Up</button>
      </div>
      </div>
  </div>


    <script type="module" src="js/main.js"></script>
  </body>
  </html>