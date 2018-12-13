<?php
	
include ('connect.php');


if(isset($_POST['update']))
{	 
	 $ID = $_POST['id'];
	 $Title = $_POST['Title'];
	 $Author = $_POST['Author'];
	 $Dt = $_POST['Date'];
	 $Tc = $_POST['Tips_Content'];
	 
	  if (empty($_POST['Title']) || empty($_POST['Author']) || empty($_POST['Date'])|| empty($_POST['Tips_Content']))
	{
		echo "<script>
		window.alert('The data is not complete');
		window.location='users.php';
		</script>"; 
	}
  	else
	{
	 
	 $new1 = "UPDATE tips SET Title = '".$Title."', Author = '".$Author."', Date = '".$Dt."', Tips_Content = '".$Tc."' WHERE Ts_id = '".$ID."'";
	 
	 if($con ->query($new1) === TRUE)
	 {
		 echo "Record has been updated succefully";
		 header('location:tips.php');
	 }
	 
	 else
	 {
		 echo "Nothing!!!";
	 }
   }
}

else
{
	echo "error";
}
?>


        