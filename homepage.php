<?php
  $title = "Home";
  require 'includes/header.php';
  require 'database.php';
?>
    <!-- Main Content -->
    <main class="main-content">
      <!-- Hero section -->
      <section class="hero-section">
        <div class="container hero-container">
          <div class="hero-content">
            <h2 class="hero-heading">Unlock the Power of Knowledge with Our Blog</h2>
            <p class="hero-text">Welcome to your go-to resource for the latest trends, in-depth analyses, and actionable advice. Whether you're looking to stay ahead in your industry, explore new ideas, or find inspiration, our expert-written articles are designed to equip you with the knowledge and tools you need to thrive. Dive in and discover the power of informed insights today
              </p>
              <a href="blog.php" class="main-button hero-button">See Posts</a>
          </div>
          <img class="hero-img" src="images/Blogging.jpg" alt="Image">
        </div>
      </section>

      <!-- Blog section -->
    <section class="blog">
      <div class="container blog__container">
        <div class="blog__header">
          <h1 class="blog__title">Recent Blog</h1>
        </div>

        <div class="blog__content">
          <ul class="blog__list">
          <?php
            $sql = "SELECT * FROM posts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li class='blog__item'>";
                    echo "<img src='images/uploads/" . $row['image'] . "' class='post-img' alt='Post Image' style='width: 382px; height: 338px;'>";
                    echo "<div class='blog__item-content'>";
                    echo "<h2 class='blog__item-title'>" . $row['title'] . "</h2>";
                    echo "<p class='blog__post'>" . $row['body'] . "</p>";
                    echo "<div class='blog__data'>";
                    echo "<div class='blog__btns'>";
                    echo "<button type='button' class='blog__btn blog__edit-btn' onclick=\"location.href='edit-post.php?post_id=" . $row["id"] . "'\">Edit</button>";
                    echo "<button type='button' class='blog__btn blog__view-btn' onclick=\"if(confirm('Are you sure you want to delete this post?')) { location.href='delete-post.php?post_id=" . $row["id"] . "'; }\">Delete</button>";
                    echo "</div>";
                    echo "<span class='blog__time'>" . date('F j, Y', strtotime($row['created_at'])) . "</span>";
                    echo "</div>";
                    echo "</div>";
                    echo "</li>";
                }
            } else {
                echo "<li>No blog posts found</li>";
            }
            $conn->close();
          ?>
          </ul>

          <div class="btn-wrapper">
            <a href="post-create.php" class="post-create-btn main-button">Create Post</a>
          </div>
        </div>
      </div>
    </section>
    </main>

    <!-- Register -->
    <div class="site-register-inner">
      <?php require 'includes/sign.php'; ?>
    </div>

  <?php require 'includes/footer.php'; ?>
