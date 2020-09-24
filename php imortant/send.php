<?php

        //Variable
        $name = $_REQUEST['name'];
        $email= $_REQUEST['email'];
        $subject =$_REQUEST['subject'];
        $message = $_REQUEST['message'];

        //Check input field
        if(empty($name) || empty($email) || empty($subject) || empty($message) )
        {
            echo "please fill all the fileds";
        }else{
            mail("Sk31817@gmail.com","AdarshBio.com", $message , "From: $name <$email> <$subject> <$message>" );
            echo "Send Succssfully";
                window.history.log(-1);
            
        }


?>