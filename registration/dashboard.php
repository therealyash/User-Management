<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: login.html"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
    <p>You are successfully logged in.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>
