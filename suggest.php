<?php

require_once('connect.php');


function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
        
        
	
$tbl_name=iv_registrants;


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phnumber=$_REQUEST['phone'];
$rollno=$_REQUEST['rollno'];

	


$sql="INSERT INTO $tbl_name(name, rollnum, email, phnumber)VALUES('$name', '$rollno', '$email', '$phnumber')";

$result=mysql_query($sql) ;


$sql = "SELECT id FROM iv_registrants WHERE rollnum='$rollno'";

$res = mysql_query($sql) or die("Could not retrieve the id");

$qqq=mysql_fetch_assoc($res) or die("fetching error");


if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Your Industrial Visit id";

// From
$header="from: ISTE NITC";

// Your message
$message="Thank you for registering for the Industrial Visit. Your registration number is IV13".$qqq["id"]."\r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);

// if your email succesfully sent
if($sentmail){
echo "Your registration has been successful.<br/>";
echo "Your id is. IV15-".$qqq["id"];
}
else {
echo "Your registration is successful.Your id is. IV14".$qqq["id"];
}

}
else {
echo "Some Unknown error occurred.";
}


?>