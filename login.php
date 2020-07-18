<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <title>Login</title>
</head>

<body>
    <label>
        <h2 style="color: white;">LogIn </h2>
    </label>
    <form action="login.php" method="POST"  class="form_2">
        <?php include('error_1.php') ?>
        <label for="username">Username Or Email</label>
        <input type="text" name="lo_username" required>
        <label for="password">Password</label>
        <input type="password" name="lo_password" required>
        <button type="submit" name="login_user">submit</button>
        <label>
            <p>Yet not registered <a href="resitartion.php">
                    <b style="color: brown;">Register Here</b>
                </a></p>
        </label>

    </form>
</body>

</html>
