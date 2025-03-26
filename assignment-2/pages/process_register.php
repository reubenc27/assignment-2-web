<?php
    session_start();
    require '../db/database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

        // check if username already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            die("Username already exists! <a href='pages/register.php'>Try again</a>");
        }

        // make new user
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt->execute([$username, $password])) {
            $_SESSION['user'] = $username;
            header("Location: success.php");// redirect to success page
            exit();
        } else {
            die("Registration failed. <a href='pages/register.php'>Try again</a>");
        }
    }
?>
