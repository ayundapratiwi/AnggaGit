<?php
include('connect.php');

	$Id= $_GET['Id'];
	
	
	$result = "DELETE FROM news WHERE Ns_id='".$Id."'";
	if ($con->query($result) === TRUE) 
		
	{
   		 echo "Record deleted successfully";
		 header('location:news.php');
		 
	} 
	else 
	{
    	echo "Error deleting record: " . mysqli_error($con);
	}
?>

	

