<?php
    session_start();


    if (!isset($_SESSION['user']) || !is_string($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }

    $username = htmlspecialchars($_SESSION['user']); //set username to string
    ?>

    <?php include '../includes/header.php'; ?>
    <h2>Welcome, <?php echo $username; ?>, to the <strong>restricted page</strong>!</h2>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
<?php include '../includes/footer.php'; ?>
