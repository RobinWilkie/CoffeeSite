<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <ul>
            <li class="right"><a href="register.html">Register</a></li>
            <li class="right"><a href="login.html">Login</a></li>
        </ul>
        <img src="images/banner.jpg" alt="picture of coffee">
    </header>

    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="location.html">Location</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="hide"><a href="register.php">Register</a></li>
        <li class="hide"><a href="login.php" class="active">Login</a></li>
    </ul>

    <?php

echo "Invalid username or password<br>";
echo "<a href='login.php'> Click here to try again</a>"

?>

</body>

</html>