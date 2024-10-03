<?php
include 'includes/db.php';
include 'includes/session.php';
include 'includes/functions.php';

if (!isLoggedIn()) {
    redirect('login.php');
}

$postId = $_GET['id'];
$postQuery = $conn->query("SELECT * FROM posts WHERE id = $postId");
$post = $postQuery->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $status = $_POST['status'];

    // Update post logic goes here
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Edit Post</title>
</head>
<body>
    <form method="post">
        <input type="text" name="title" value="<?php echo $post['title']; ?>" required>
        <textarea name="content" required><?php echo $post['content']; ?></textarea>
        <input type="text" name="tags" value="<?php echo $post['tags']; ?>">
        <select name="status">
            <option value="draft" <?php echo $post['status'] === 'draft' ? 'selected' : ''; ?>>Save as Draft</option>
            <option value="published" <?php echo $post['status'] === 'published' ? 'selected' : ''; ?>>Publish</option>
        </select>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>
