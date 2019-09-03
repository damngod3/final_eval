<?php 
session_start();
if(isset($_SESSION['username'])&& $_SESSION['username']!="")
{
	
}
else
{
   header("location: index.php");
}

$inactive=10000000000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location:logout.php");	
	}	
}
$_SESSION['timeout']=time();
?>