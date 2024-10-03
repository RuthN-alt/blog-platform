<?php
include 'includes/db.php';

$posts = $conn->query("SELECT * FROM posts WHERE status = 'published'");

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Public Blog</title>
</head>
<body>
    <h1>Published Blog Posts</h1>
    <div>
        <?php while ($post = $posts->fetch_assoc()): ?>
            <h2><a href="view_post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
            <p><?php echo substr($post['content'], 0, 100) . '...'; ?></p>
            <p><em>Tags: <?php echo $post['tags']; ?></em></p>
        <?php endwhile; ?>
    </div>
</body>
</html>
