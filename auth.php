<?php

include('connect.php');
session_start(); 


if(isset($_POST['submits'])) 
{
	$UN = $_POST["username"];
	$PW = $_POST["password"];
	
	$querys= "select * from admin where username='$UN' and password='$PW'";
	
	$result=mysqli_query($con, $querys );	
	$num_results = $result->num_rows;
	
	if($num_results >0)
	{
		
		$row = $result->fetch_assoc();
	
	extract($row);
	
	$_SESSION["username"] = $UN;
	
	
	echo '<script language="javascript" type="text/javascript">alert("Welcome Police Staff");
		document.location.href="index.php" </script>';
	}
	
	else
	{
		echo '<script language="javascript" type="text/javascript">alert("Username and Password is Wrong");
		document.location.href="login.php" </script>';
		
	}

	
	
	/*$result = $con->query ("select * from admin where username='$UN' and password='$PW'");
	
	while ($row = $result->fetch_assoc()) {
  	$results_array[] = $row;
}
	
	session_start();
	
	$_SESSION["username"] = $row['username'];
	
	header('Location: index.php');*/
	
	
	
}
	
	
	
	
	
	
	
	
	
	
	/*if(empty($_POST['username']) || empty($_POST['password']))
	{
		$error = "Both fields are required.";
	}
	else
	{
		//Define $username and $password
		/*$username=$_POST['username'];
		$password=$_POST['password'];*/
		
		//To protect from MYSQL injection
		/*$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($link,$username);
		$password = mysqli_real_escape_string($link,$password);
		$password = md5($password);
		
		$username = strip_tags($_POST['username']);
 		$password = strip_tags($_POST['password']);
 
 		$username = $link->real_escape_string($usernamel);
 		$password = $link->real_escape_string($password);
 
 		$query = $link->query("SELECT password FROM admin WHERE username='$username'");
 		$row=$query->fetch_array();*/
	 
	 	//Check username and password from database
		/*$sql="SELECT * From admin WHERE username='$username' and password='$password'";
		$result= mysqli_query($link,$sql);
		$row= mysqli_num_rows($result);*/
		
		//If username and password exist in our database then create a session
		//Otherwise echo error.
		/*if($result>0)
		{
			$_SESSION['username']='$login'; // Initializing Session
			header('location: index.php'); // redirecting to other page			
		}
		else
		{
			 $error="Incorrect username or password.";
		}
		
	}*/

?>