<?php
	require_once("db.php");


	$db = new DB("127.0.0.1","demo","root","");


if($_SERVER['REQUEST_METHOD'] == "GET")
{
			echo json_encode($db->query("SELECT * FROM users"));

}else if($_SERVER['REQUEST_METHOD']=="POST");
{
		echo "POST";
}
else{
	http_response_code(405);
}


?>