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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>My Blog</title>
  </head>
  <body>
    <!-- Header -->
    <header class="site-header">
      <div class="container site-header container">
        <a href="index.html" class="site-header__logo">MyBlog</a>

        <nav class="sitenav">
          <ul class="sitenav__list">
            <li class="sitenav__item"><a href="#" class="sitenav__link">Home</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">About Me</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">Blog</a></li>
            <li class="sitenav__item"><a href="#" class="sitenav__link">Contact Me</a></li>
          </ul>
        </nav>

        <div class="site-header__sign">
          <button type="button" class="btn btn-signup">Sign up</button>
        </div>
      </div>




    </header>


    <!-- <script src="js/main.js"></script> -->
  </body>
  </html>