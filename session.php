<?php
   include('db.php');

    // start session
   session_start();
   

    // set session variables
   $user_check = $_SESSION['login_user'];


    // make connection to database
    $conn = mysqli_connect($servername, $username, $password, $db);
   
   $result= mysqli_query($conn, "select firstname from users where firstname = '$user_check' ");

    if(!$result){
        echo 'Could not run query: ' . mysqli_error();
        exit;
    }
   
   $row = mysqli_fetch_array($result);
   
   $login_session = $row['firstname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>