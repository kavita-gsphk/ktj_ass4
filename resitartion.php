<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <title>Registration</title>
</head>

<body>
    <label>
        <h2 style="color: white;">Registration </h2>
    </label>
    <form action="resitartion.php" method="POST"  class="form_2">
        <?php include('error.php') ?>
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="email">email</label>
        <input type="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" name="password_1" required>
        <label for="password_1">Confirm password</label>
        <input type="password" name="password_2" required>
        <button type="submit" name="reg_user">submit</button>
        <label>
            <p>Already a user <a href="login.php"><b style="color: brown;">Login Here</b></a></p>
        </label>
    </form>
</body>

</html>
