<?php
   include('session.php');
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            .signout{
                position: absolute;
                bottom: 0;
                right: 0;
                margin: 10px;
                background-color: #4CAF50;
                padding: 5px 10px;
            }
            
            .signout a{
                color: #fff;
                font-family: 'Lato', sans-serif;
            }
        </style>
    </head>

    <body>
        <header>
            <ul>
                <li class="right"><a href="register.php">Register</a></li>
                <li class="right"><a href="login.php">Login</a></li>
                <li class="right"><a href="logout.php">Sign Out</a></li>

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

        <h1>Welcome</h1>

        <?php
    
    echo "Hello $login_session, You have successfuly logged in";
    
    ?>
            <h3 class="signout"><a href ="logout.php">Sign Out</a></h3>

    </body>

    </html>