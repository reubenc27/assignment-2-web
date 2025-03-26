<?php include '../includes/header.php'; ?>
    <form action="process_register.php" method="POST">
        <h2>Create an Account</h2>
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Register</button>
    </form>
    <a href="login.php">Already have an account? Log in</a>
<?php include '../includes/footer.php'; ?>
