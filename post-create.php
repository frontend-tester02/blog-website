<?php
  $title = "Post Create";
  require 'includes/header.php';

  include 'database.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $body = $_POST['body'];
    $image = $_FILES['image'];
    $image_path = NULL;

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
      // Define the upload directory and ensure it exists
      $uploadDir = "images/uploads/";
      if (!is_dir($uploadDir)) {
          mkdir($uploadDir, 0777, true);
      }

      // Generate a unique filename
      $imageFileType = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
      $unique_filename = uniqid() . '.' . $imageFileType;
      $targetPath = $uploadDir . $unique_filename;

      // Check for valid image file types
      $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
      if (!in_array($imageFileType, $allowed_types)) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          exit;
      }

      // Move the uploaded file to the target directory
      if (move_uploaded_file($image["tmp_name"], $targetPath)) {
          $image_path = $unique_filename;
      } else {
          echo "Sorry, there was an error uploading your file.";
          exit;
      }
  } else {
    echo "eror";
    exit;
  }
    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO posts (title, body, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $body, $image_path);

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: blog.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    $_SESSION['created-post'] = "Post created successfully";
    header('Location: blog.php');
}
?>

<div class="container post-container">
  <div class="post">
    <div class="post-title">
      <h1>Create Post</h1>
    </div>

    <div class="post__form">
    <form action="#" method="POST" class="contact-form" enctype="multipart/form-data">
        <div class="form__group">
          <label for="title" class="form__label">Title</label>
          <input type="text" class="form__field" name="title" id="title" placeholder="Title" required>
        </div>

        <div class="form__group">
          <label for="body" class="form__label">Post</label>
          <textarea class="form__field form__field-textarea" name="body" id="body" placeholder="Post content..." required></textarea>
        </div>

        <div class="form__group">
        <label for="image" class="form__label choose-image">Choose image</label>
        <input type="file" name="image"  class="form__field file-input hidden" accept="image/*" id="image">
        </div>

        <div class="from__group">
          <button class="solid-button" type="submit">Save post</button>
        </div>

      </form>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>