<?php
	
include ('connect.php');


if(isset($_POST['update']))
{	
 
	 $ID = $_POST['id'];
	 $Date = $_POST['Date'];
	 $Violence = $_POST['Violence'];
	 $Nt= $_POST['Note'];
	
	 
	 if (empty($_POST['Date']) || empty($_POST['Violence']) || empty($_POST['Note']))
	{
		echo "<script>
		window.alert('The data is not complete');
		window.location='users.php';
		</script>";
		
	}
  	
	else
	{
	 
	 $newr = "UPDATE records SET Date = '".$Date."', Violence = '".$Violence."', Note = '".$Nt."' WHERE id = '".$ID."'";
	 //die($newr);
	 if($con ->query($newr) === TRUE)
	 {
		 echo "<script>
		 window.alert('Record has been updated succefully');
		 window.location='users.php';
		 </script>"; 
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


        