<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // Default password is empty in XAMPP
$dbname = "registration_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $conn->real_escape_string($_POST['user_name']);
    $password = md5($_POST['password']); // Encrypt password using MD5
    $name = $conn->real_escape_string($_POST['name']);

    // Insert into database
    $sql = "INSERT INTO users (user_name, password, name) VALUES ('$user_name', '$password', '$name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location.href='registration.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
