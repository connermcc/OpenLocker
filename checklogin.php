<?php
session_start();
include_once("db.php");

if(isset($_SESSION['ID']) & isset($_SESSION['User'])){
	$id = $_SESSION['ID'];
	$user = $_SESSION['User']; 
	$sql = "SELECT * FROM users WHERE ID = $id AND username = '$user'";
	$result = mysqli_query($db, $sql);
	if(mysqli_num_rows($result) < 1){
		header('Location: login.php');
	}
	}
	else
	{
		header('Location: login.php');
		}


?>