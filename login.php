<?php
// Include the common.php file
require_once('includes/common.php');

// Check if the user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <?php
        // Include the header.php file
        require_once('includes/header.php');
        ?>
    </header>
    <main>
        <h1>Login</h1>
        <form method="POST" action="login_submit.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </main>
    <footer>
        <?php
        // Include the footer.php file
        require_once('includes/footer.php');
        ?>
    </footer>
</body>
</html>
