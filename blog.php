<?php
  $title = "Blog";
  require 'includes/header.php';
  require 'database.php';
?>

<!-- Blog section -->
<section class="blog">
      <div class="container blog__container">
        <?php if(isset($_SESSION['created-post'])): ?>
        <div class="blog-post">
          <?= $_SESSION['created-post'] ?>
          <?php unset($_SESSION['created-post']) ?>
        </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['deleted-post'])): ?>
        <div class="blog-post">
          <?= $_SESSION['deleted-post'] ?>
          <?php unset($_SESSION['deleted-post']) ?>
        </div>
        <?php endif; ?>
        <div class="blog__header">
          <h1 class="blog__title">Recent Blog</h1>
        </div>

        <div class="blog__content">
          <ul class="blog__list">
          <?php
            $sql = "SELECT * FROM posts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li class='blog__item'>";
                    echo "<img src='./images/uploads/" . $row["image"] . "' alt='Post Image' style='width: 382px; height: 338px;'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p class='blog__post' >" . $row["body"] . "</p>";
                    echo "<div class='blog__data'>";
                    echo "<div class='blog__btns'>";
                    echo "<button type='button' class='blog__btn blog__edit-btn' onclick=\"location.href='edit-post.php?post_id=" . $row["id"] . "'\">Edit</button>";
                    echo "<button type='button' class='blog__btn blog__view-btn' onclick=\"if(confirm('Are you sure you want to delete this post?')) { location.href='delete-post.php?post_id=" . $row["id"] . "'; }\">Delete</button>";
                    echo "</div>";
                    echo "<span class='blog__time'>" . date('F j, Y', strtotime($row['created_at'])) . "</span>";
                    echo "</div>";
                    echo "</li>";
                }
            } else {
                echo "0 results";
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

<?php require 'includes/footer.php'; ?>
