<?php
include_once("../database/constants.php");
include_once("user.php");

// Registration

if (isset($_POST["username"]) AND isset($_POST["email"])) {
    $user = new User();
    // in future more RegExp below for even more validation
	$result = $user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password1"],$_POST["usertype"]);
	echo $result;
	exit();
}

// Login 

if (isset($_POST["log_email"]) AND isset($_POST["log_password"])) {
    $user = new User();
	$result = $user->userLogin($_POST["log_email"],$_POST["log_password"]);
	echo $result;

}




?>