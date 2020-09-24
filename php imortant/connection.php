<?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = 'crud';

  $con= mysqlI_connect($server,$username,$password,$db);

    if($con)
    {
?>
        <script>
            alert("Connection Successfull");
        </script>
<?php

       // echo "Connection Successfull";
    }
    else{
       // echo "no Connection";
        die("No COnnection" . mysqlI_connect_error());

    }





?>
