<?php

require("./connect.php");

?>

<!doctype html>
<html>
		<head>
		<title>limited</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="UTF-8">
		<style>
@font-face {
	font-family: opensans;
	src: url(fonts/oxy.ttf);
}
@font-face {
	font-family: code;
	src: url(fonts/code.otf);
}
@font-face {
	font-family: check;
	src: url(fonts/robotoRegular.ttf);
}
@font-face {
	font-family: added;
	src: url(fonts/JosefinSlab-Bold.ttf);
}
* {
	border: 0;
	margin: 0;
	padding: 0;
	line-height: 150%;
	box-sizing: border-box;
	font-family: check;/*border:2px solid #000;*/
}
body{
background:#22313F;
}
h1{
font-size:4em;
font-family: code;
margin-top:50px;
text-align:center;
color:#eee;

}

table {
	background: #f5f5f5;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 1em;
	line-height: 24px;
	margin: 30px auto;
	text-align: center;
	font-weight: bold;
	width: 75%;
}	

th {
	background: linear-gradient(#777, #444);
	
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
	
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {

	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: #E74C3C;
	color: #EEEEEE;
}

tr:nth-child(odd) td {
	background: #EEEEEE;
	color: #000;
}

tr:hover td {
	background: #674172;
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	
 
 td a{
	color:#0292CE;
  }
 td a:hover{
	 color:22313F;
	 text-decoration:none;
 }

</style>
</head>
<body>
<h1>  iv regstats</h1>

<table>
	<thead>
		<tr>
                        <th> Name </th>
			<th> Rollno </th>
			<th> Username </th>
                        <th> Phone </th>
		</tr>
	</thead>
	<tbody>

            
<?php
$res = mysql_query("SELECT * FROM `iv_registrants` ORDER BY id;");
	
    while($out = mysql_fetch_array($res)){
                $str = <<<CONTENT
                
                
                <tr><td>{$out['name']}</td> <td>{$out['rollnum']}</td><td>{$out['email']}</td><td>{$out['phnumber']}</td></tr>
CONTENT;

       echo $str;
	   
       }
       ?>
       </tbody>
       </table>
</body>
</html>
