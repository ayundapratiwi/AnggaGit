
<?php
	
include ('connect.php');


if(isset($_POST['update']))
{	
 
	 $ID = $_POST['id'];
	 $Title = $_POST['Title'];
	 $Author = $_POST['Author'];
	 $Dt = $_POST['Date'];
	 $Nc = $_POST['News_Content'];
	 
	 if (empty($_POST['Title']) || empty($_POST['Author']) || empty($_POST['Date'])|| empty($_POST['News_Content']))
	{
		echo "<script>
		window.alert('The data is not complete');
		window.location='news.php';
		</script>"; 
	}
  	
	else
	{
	 
	 $new1 = "UPDATE news SET Title = '".$Title."', Author = '".$Author."', Date = '".$Dt."', News_Content = '".$Nc."' WHERE Ns_id = '".$ID."'";
	 
	 if($con ->query($new1) === TRUE)
	 {
		 echo "<script>
		 window.alert('Record has been updated succefully');
		 window.location='news.php';
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


        