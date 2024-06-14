<?php
$title = "Edit Post";
require 'includes/header.php';
require 'database.php';

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM posts WHERE id = $post_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Post not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<div class="container post-container">
    <div class="post">
    <h1 class='edit-post__title'>Edit Post</h1>
        <form action="update-post.php" method="post" class="contact-form" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="<?= $row['id'] ?>">
            <div class="form__group">
                <label for="title" class='form__label'>Title:</label>
                <input type="text" class="form__field" id="title" name="title" value="<?= $row['title'] ?>" required>
            </div>
            <div class="form__group">
                <label for="body" class='form__label'>Body:</label>
                <textarea id="body" class="form__field form__field-textarea" name="body" required><?= $row['body'] ?></textarea>
            </div>
            <div class="form__group">
                <label for="image" class='form__label'>Image:</label>
                <input type="file" class="form__field" id="image" name="image" style="margin-bottom:15px;">
                <img src="./images/uploads/<?= $row['image'] ?>" alt="Post Image" style="width: 100px;">
            </div>
            <div class="btn-wrapper">
            <button type="submit" class="main-button">Update Post</button>
            </div>
        </form>
    </div>
</div>

<?php require 'includes/footer.php'; ?>
