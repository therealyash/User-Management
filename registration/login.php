<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $conn->real_escape_string($_POST['user_name']);
    $password = md5($_POST['password']); // Use md5 since passwords are stored this way

    // Check credentials
    $sql = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user_name'] = $user_name; // Store session data
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href='login.html';</script>";
    }
}

$conn->close();
?>
