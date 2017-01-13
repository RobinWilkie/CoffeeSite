<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <ul>
            <li class="right"><a href="register.php">Register</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
        <img src="images/banner.jpg" alt="picture of coffee">
    </header>

    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="location.html">Location</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="hide"><a href="register.php">Register</a></li>
        <li class="hide"><a href="login.php" class="active">Login</a></li>
    </ul>

    <h1>Register</h1>

    
    <form id="register" action="connect.php" method="post">
        <label>First Name</label>
        <input type="text" name="firstname" id="firstname">
        <label>Last Name</label>
        <input type="text" name="lastname" id="lastname">
        <label>email</label>
        <input type="email" name="email" id="email">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <label>Message</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Send a Message">
    </form>

</body>

</html>