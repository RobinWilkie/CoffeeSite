<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .formwrap{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        #register {
            display: flex;
            flex-direction: column;
            width: 50vw;
        }
        
        label {
            margin-left: 10px;
        }
        
        #register input[type=text],
        #register input[type=email],
        #register input[type=password] {
            width: 95%;
            padding: 12px 20px;
            margin-left: 10px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        #register textarea {
            width: 95%;
            padding: 12px 20px;
            margin-left: 10px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        #register input[type=submit] {
            width: 95%%;
            padding: 12px 20px;
            display: inline-block;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #4CAF50;
            color: #fff;
            transition: all 0.3s linear 0s;
        }
        
        #register input[type=submit]:hover {
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

    <div class="formwrap">
        <h1>Register</h1>

        <form id="register" action="connect.php" method="post">
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname" required>
            <label>Last Name</label>
            <input type="text" name="lastname" id="lastname" required>
            <label>Email</label>
            <input type="email" name="email" id="email" required>
            <label>Password</label>
            <input type="password" name="password" id="password" required>
            <label>Message</label>
            <textarea name="message" id="message"></textarea>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>