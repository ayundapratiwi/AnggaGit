<?php
require ("connect.php");


if(isset($_POST['create']))
{
	if (empty($_POST['Title']) || empty($_POST['Author']) || empty($_POST['Date'])|| empty($_POST['editor']))
	{
		echo "<script>
		window.location='tips.php';
		window.alert('The data is not complete');
		</script>"; 
	}
	else
	{
		$title= $_POST['Title'];
		$authors = $_POST['Author'];
		$date = $_POST ['Date'];        
		$tips = $_POST['editor'];
		$input = "INSERT INTO tips (Title, Author, Date, Tips_Content) VALUES ('$title', '$authors', '$date','$tips')";
			if (mysqli_query($con, $input))
			{
				echo "Record has been updated succefully";
		 		header('location:tips.php');
			}
			else
			{
			     echo "Error:" .$input. "<br>". mysqli_error($con);
			}
	}
}


?>