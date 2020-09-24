<?php

$username = "root";
$password  = "";
$server = 'localhost';
$db = 'testing';

$con = mysqli_connect($server,$username,$password, $db);

if($con)
{
    ?>

    <script>
        alert("succesfull!!!");
    </script>

    <?php
    
}
else{
        echo "No connection";
}


?>
