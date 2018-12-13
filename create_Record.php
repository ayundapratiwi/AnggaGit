<?php
require("connect.php");

if(isset($_POST['create']))
{
	if (empty($_POST['User_id']) || empty($_POST['Date']) || empty($_POST['Note']))
	{
		echo "<script>
		window.location='Record.php';
		window.alert('The data is not complete');
		</script>"; 
	}
	else
	{
	
	$user= $_POST['User_id'];
	$dates = $_POST['Date'];
	$Violences = $_POST ['Violence'];
	$Note = $_POST['Note'];
	$input = "INSERT INTO records (User_id, Date, Violence, Note) VALUES ('$user', '$dates', '$Violences', '$Note')";
	
	if (mysqli_query($con, $input))
	{
		echo "<script>
		window.location='Record.php';
		window.alert('New record created successfully!');
		</script>";
	}
	else
	{
	echo "Error:" .$input. "<br>". mysqli_error($con);
	}
	}
	
}






?>