<?php
include 'includes/db.php';
include 'includes/session.php';
include 'includes/functions.php';

if (!isLoggedIn()) {
    redirect('login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $status = $_POST['status']; // can be 'draft' or 'published'

    if (createPost($_SESSION['user_id'], $title, $content, $tags, $status)) {
        redirect('dashboard.php');
    } else {
        echo "Error creating post.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Create Post</title>
</head>
<body>
    <form method="post">
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <input type="text" name="tags" placeholder="Tags (optional)">
        <select name="status">
            <option value="draft">Save as Draft</option>
            <option value="published">Publish</option>
        </select>
        <button type="submit">Save Post</button>
    </form>
</body>
</html>
