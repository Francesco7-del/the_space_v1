<?php
session_start();
include('../config/dbconn.php');

if($_POST)
{
	$name=$_SESSION['firstname'];
    $msg=$_POST['msg'];
	//	$dbconn = mysqli_connect("localhost","root","","electricks");
		$dbconn = mysqli_connect("localhost","root","","electricks");
		$sql="INSERT INTO `chat`(`firstname`, `message`) VALUES ('".$name."', '".$msg."')";
		$query = mysqli_query($dbconn,$sql);



	//	exit();
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}

	}
?>
