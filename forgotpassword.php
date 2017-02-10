<?php
   include('db.php');
    
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // make connection to the database
        $conn = new mysqli($servername, $username, $password, $db);
        
        //check connection
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error); 
    }
        echo "Connected successfully";
        
        //username and password
        $myusername = mysqli_real_escape_string($conn, $_POST['username']);
        $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
        $repeatpassword = mysqli_real_escape_string($conn, $_POST['repeatpassword']);
        
        $sql = "UPDATE $table SET password = '$repeatpassword' WHERE firstname= '$myusername'";
        
        if ($conn->query($sql) === TRUE) {
        echo " Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <title>Forgotten Password</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
            h1 {
                text-align: center;
            }
            
            form {
                border: 3px solid #f1f1f1;
                display: flex;
                flex-direction: column;
            }
            
            input[type=text],
            input[type=password] {
                width: 90%;
                padding: 12px 20px;
                margin: 10px;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            label {
                font-weight: 700;
            }
            
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 10px;
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

        <h1>Forgotten Password? Change Here</h1>

        <!-- form to change password -->
        <form action="" method="post">
            <label for="username">Enter First Name</label>
            <input type="text" name="username" placeholder="Enter your first name" required>
            <label for="password">Change password</label>
            <input type="password" name="password" placeholder="Enter your new password" required>
            <label for="repeatpassword">Retype password</label>
            <input type="password" name="repeatpassword" placeholder="Retype password" required>
            <button type="submit">change password</button>
        </form>

    </body>

    </html>