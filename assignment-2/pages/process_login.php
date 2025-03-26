<?php
    session_start();
    require '../db/database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if input both input fields are filled
    if (empty($username) || empty($password)) {
        die("Username or password is empty.");
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // check if user exists
    if (!$user) {
        die("User not found.");
    }

    // check if password is correct
    if (!password_verify($password, $user['password'])) {
        die("Incorrect password.");
    }

    $_SESSION['user'] = $user['username'];
    header("Location: success.php");
    exit();
?>
