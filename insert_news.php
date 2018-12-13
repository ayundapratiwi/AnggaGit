<?php
require ("connect.php");


if(isset($_POST['create']))
  {
	if (empty($_POST['Title']) || empty($_POST['Author']) || empty($_POST['Date'])|| empty($_POST['editor']))
	{
		echo "<script>
		window.location='news.php';
		window.alert('The data is not complete');
		</script>"; 
	}
	else
	{
	
		$title= $_POST['Title'];
		$authors = $_POST['Author'];
		$date = $_POST['Date'];
		//upload image
		$F_name = $_FILES['files']['name'];
		$ext=strtolower(end(explode('.',$F_name)));
		$size = $_FILES['files']['size'];
		$type = array('jpg', 'png', 'jpeg');
		$tmp_name = $_FILES['files']['tmp_name'];
		
		 $news = $_POST['editor'];
		  
			
		   // allow valid image file formats
		   if(in_array($ext, $type)===true)
				{
					if($size<5242880)
					{
						$location="/ADMINSTAFF/".$title.'.'.$ext;
						move_uploaded_file($tmp_name, $location);
						$input = "INSERT INTO news (Title, Author, Date, Image, News_Content) VALUES ('$title', '$authors', '$date','$location', '$news')";
						if (mysqli_query($con, $input))
						{
							echo "News has been updated succefully";
							header('location:news.php');
						}
						else
						{
							echo 'ERROR, Fail to upload file!</div>';
						}
					}
					else
					{
							echo 'ERROR, echo "Error:" .$input. "<br>". mysqli_error($con);</div>';
					} 		
		   }
	    }
 
		
    }	

?>