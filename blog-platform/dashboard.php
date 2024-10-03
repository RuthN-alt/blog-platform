<?php
include 'includes/db.php';
include 'includes/session.php';
include 'includes/functions.php';

if (!isLoggedIn()) {
    redirect('login.php');
}

$userId = $_SESSION['user_id'];
$posts = $conn->query("SELECT * FROM posts WHERE user_id = $userId");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <h1>Your Blog Posts</h1>
    <a href="create_post.php">Create New Post</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($post = $posts->fetch_assoc()): ?>
            <tr>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['status']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a>
                    <a href="delete_post.php?id=<?php echo $post['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
