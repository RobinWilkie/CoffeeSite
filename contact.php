<?php


    //get contact details from form
        $contactname = mysqli_real_escape_string($_POST['c-name']);
        $contactemail = mysqli_real_escape_string($_POST['c-email']);
        $contactmessage = mysqli_real_escape_string($_POST['c-message']);
        
        mail("robinwilkie80@gmail.com",$contactname,$contactmessage);

        header("location: thanks.html");


?>