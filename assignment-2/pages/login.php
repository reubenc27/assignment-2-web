<?php include '../includes/header.php'; ?>
    <form action="process_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
<?php include '../includes/footer.php'; ?>