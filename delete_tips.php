<?php
include('connect.php');

	$Id= $_GET['Id'];
	
	
	$result = "DELETE FROM tips WHERE Ts_id='".$Id."'";
	if ($con->query($result) === TRUE) 
		
	{
   		 echo "Record deleted successfully";
		 header('location:tips.php');
		 
	} 
	else 
	{
    	echo "Error deleting record: " . mysqli_error($con);
	}
?>

	

