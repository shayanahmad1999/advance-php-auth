<?php
require './config/connection.php';
require_once('./config/security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home.css">
    <title><?= $GLOBALS['name'] ?> Home</title>
</head>

<body>
    <header>
        <h1><?php
            if (isset($_SESSION['ADMINID'])) {
                echo ucwords($_SESSION['ADMINNAME']);
            } else {
                header('location:./index.php?error');
                exit();
            }
            ?></h1>
        <nav>
            <a href="./config/logout.php">Logout</a>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Welcome to My Website</h2>
            <p>This is a simple responsive website layout example. Resize the browser window to see how the layout changes.</p>
        </section>
    </main>

    <footer>
        &copy; 2024 My Website. All rights reserved.
    </footer>
</body>

</html>
