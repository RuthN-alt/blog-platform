<?php
$host = 'localhost';
$db = 'blog_platform';
$user = 'root'; // your db username
$pass = ''; // your db password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
