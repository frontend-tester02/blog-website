<?php
  session_start();
?>


<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css?b-v=<?php echo time(); ?>">
    <title>
      <?php
        echo $title;
      ?>
    </title>
  </head>
  <body>
    <!-- Header -->
    <header class="site-header">
      <div class="container site-header__container">
        <a href="homepage.php" class="site-header__logo">MyBlog</a>

        <nav class="sitenav site-header__sitenav">
          <ul class="sitenav__list">
            <li class="sitenav__item"><a href="homepage.php" class="sitenav__link">Home</a></li>

            <li class="sitenav__item"><a href="blog.php" class="sitenav__link">Blog</a></li>
            <li class="sitenav__item"><a href="contact.php" class="sitenav__link">Contact Us</a></li>
          </ul>
        </nav>

        <div class="user-profile">
          <button class="user-profile__btn">
            <img src="images/Blogging.jpg" alt="Profile Picture" class="user-profile-img">
          </button>
          <div class="user-profile__dropdown">
              <div class="user-profile__menu hidden">
                  <a href="logout.php" class="user-profile__link">Logout</a>
              </div>
          </div>
      </div>
          <div class="site-header__toggle js-toggle ">
            <i class="fa-solid fa-bars "></i>
          </div>
      </div>
    </header>