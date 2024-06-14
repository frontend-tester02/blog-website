<?php
require 'database.php';
session_start();

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    // Prepare the SQL statement to delete the post
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $post_id);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['deleted-post'] = "Post deleted successfully!";
    } else {
        $_SESSION['deleted-post'] = "Error deleting post: " . $stmt->error;
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
