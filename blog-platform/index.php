<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Welcome to the Blog Platform</title>
</head>
<body>
    <nav>
        <?php if (isLoggedIn()): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        <?php endif; ?>
    </nav>
    
    <h1>Welcome to the Blog Platform</h1>
    <p>Your personal space for blogging. Share your thoughts and ideas with the world!</p>
    <a href="public.php">View Public Blog</a>
</body>
</html>
