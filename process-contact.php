<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact-info";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Execute the SQL statement
$stmt->execute();

// Close statement and database connection
$stmt->close();
$conn->close();

// Redirect back to the contact page after submission
header("Location: contact.php");
exit();
?>
