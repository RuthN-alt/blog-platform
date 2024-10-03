<?php
include 'includes/db.php';

$postId = $_GET['id'];
$postQuery = $conn->query("SELECT * FROM posts WHERE id = $postId");
$post = $postQuery->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $post['title']; ?></title>
</head>
<body>
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo $post['content']; ?></p>
    <p><em>Tags: <?php echo $post['tags']; ?></em></p>
</body>
</html>
