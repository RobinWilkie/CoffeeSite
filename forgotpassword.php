<?php
   include('db.php');
    

?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <title>forgotten password</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            form {
                border: 3px solid #f1f1f1;
                display: flex;
                flex-direction: column;
            }
            
            input[type=text],
            input[type=password] {
                width: 90%;
                padding: 12px 20px;
                margin: 20px;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 20px;
                border: none;
                cursor: pointer;
                width: 90%;
                transition: all 0.3s linear 0s;
            }
            
            button:hover {
                box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
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

        <h1>Forgotten Password?</h1>
        
        <form action="" method="post">
            <label>Enter First Name</label>
            <input type="text" name="firstname" required>
            <label>Change password</label>
            <input type="password" name="password" required>
            <button type="submit">Submit</button>
        </form>

    </body>

    </html>