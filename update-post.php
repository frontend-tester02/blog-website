<?php
require 'database.php';

if (isset($_POST['post_id']) && isset($_POST['title']) && isset($_POST['body'])) {
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $image = $_FILES['image']['name'];
    $target_dir = "images/uploads/";

    // Prepare the SQL statement
    if ($image) {
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        $stmt = $conn->prepare("UPDATE posts SET title = ?, body = ?, image = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $body, $image, $post_id);
    } else {
        $stmt = $conn->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $body, $post_id);
    }

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['message'] = "Post updated successfully";
    } else {
        $_SESSION['message'] = "Error updating post: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the main page
    header('Location: blog.php');
    exit();
} else {
    echo "Invalid request";
    exit();
}
?>
