<?php

    include("db.php");
    
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
        $myusername = mysqli_real_escape_string($conn, $_POST['uname']);
        $mypassword = mysqli_real_escape_string($conn, $_POST['psw']);
        
        $sql = "SELECT ID FROM users WHERE firstname = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        
        //if result matches $useranme and $password, table row must be 1 row
        if($count == 1){
            $_SESSION['login_user'] = $myusername;
            header("location: welcome.php");
        }else {
            header("location: error.php");
        }
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <style>
            form {
                border: 3px solid #f1f1f1;
            }
            
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                transition: all 0.3s linear 0s;
            }
            
            button:hover {
                box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            }
            
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }
            
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }
            
            img.avatar {
                width: 15%;
                border-radius: 50%;
            }
            
            .container {
                padding: 16px;
            }
            
            span.psw {
                float: right;
                padding-top: 16px;
            }
            /* Change styles for span and cancel button on extra small screens */
            
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <header>
            <ul>
                <li class="right"><a href="register.php">Register</a></li>
                <li class="right"><a href="login.php">Login</a></li>
                <li class="right"><a href = "logout.php">Sign Out</a></li>
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

        <h1>Login</h1>

        <form action="" method="post" id="form">
            <div class="imgcontainer">
                <img src="images/logo2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username (Your first name)" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
            </div>
        </form>






    </body>

    </html>