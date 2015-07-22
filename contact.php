<?php

require_once('connect.php');


function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
        
        
	
$tbl_name='website_contacts';


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phnumber=$_REQUEST['phone'];
$message=$_REQUEST['message'];

	


$sql="INSERT INTO $tbl_name(name, email, phnumber, message)VALUES('$name', '$email', '$phnumber', '$message')";

$result=mysql_query($sql) ;




if($result){
echo "Success";

}
else {

echo "Fail";

}


?>