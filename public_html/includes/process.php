<?php
include_once("../database/constants.php");
include_once("user.php");

if (isset($_POST["username"]) AND isset($_POST["email"])) {
    $user = new User();
    // in future more RegExp below for even more validation
	$result = $user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password1"],$_POST["usertype"]);
	echo $result;
	exit();
}



?>