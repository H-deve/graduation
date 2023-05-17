<!DOCTYPE html>

<html lang=”en”>

<head>
<style>

body{
	background-color: #50a9f6;
}

#form-wrapper{
	width: 500px;
	height: 500px;
	background-color: #039be5;
	margin: 20px auto;	
	padding: 60px; 
}

#logo{
	width: 150px;
	height: 150px;
	margin: 20px auto;
}

#button-send{
	width: 300px;
	margin: 20px auto;
	display: block;
	background-color: #c02a2a;
	border: 0px;
	padding: 10px;
	color: #ffffff;
}
.send-success{
	color: #ffffff;
}
.back-link{
	width: 270px;
	height: 50px;
	margin: 80px auto;
	color: blue;
	display: block;
}




</style>

<meta charset=”utf-8″>

<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>

<meta name=”viewport” content=”width=device-width, initial-scale=1″>

<title>Admin Section Login</title>

<link href=”style.css” rel=”stylesheet”>

</head>

<body>

<div id=”form-wrapper”>

<!-- <?php

//include_once ‘database.php’;

//$db = new Database();

$token = $this->db->getRegisteredToken();

echo $token;

?> -->

</style>

<script src=”http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js”></script>

<script>

$(function(){

$(“textarea”).val(“”);

});

function isEmptyTextBox(){

var msgLength = $.trim($(“textarea”).val()).length;

if(msgLength == 0){

alert(“Text box must not be empty”);

return false;

}else{

return true;

}

}

</script>

<p id=”logo”><img src=”images/fly.png” alt=”logo” /></p>

<h2>Firesbase Cloud Messaging (Php Web Server) </h2>

<p>Firebase Downstream Push Notification</p>

<form method=”post” action=”Servertofirebase.php” onsubmit=”return isEmptyTextBox()”>

<input type=”hidden” id=”user_id” name=”token” value=”<?php echo $token ? $token : 0 ?>”>

<textarea cols=”70″ rows=”12″ name=”message” cols=”45″ placeholder=”Message via Firebase Cloud Messaging”></textarea> <br/>

<input id=”button-send” type=”submit” value=”Send Firebase Push Notification” />

</form>

</div>

</body>

</html>

