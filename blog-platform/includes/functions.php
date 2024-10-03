<?php
function createUser($username, $email, $password) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    return $stmt->execute();
}

function authenticateUser($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

function createPost($userId, $title, $content, $tags, $status) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content, tags, status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $userId, $title, $content, $tags, $status);
    return $stmt->execute();
}

// More functions for edit, delete, and fetch posts can be added here

