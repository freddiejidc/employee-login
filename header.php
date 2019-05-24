<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main2.css">
    <script src="main.js"></script>
</head>
<body>
<header>
    <nav>
        <ul>
            
        </ul>
    </nav>
    <div class="login" align="right" width="80%">
    <?php
                    if (isset($_SESSION)) {
                        echo ' <form action="logout.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>';
                    }
                    else {
                        echo '<form action="includes/login.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>';

                    }
            ?>
    </div>
</header>
