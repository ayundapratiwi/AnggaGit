
<?php
	
include ('connect.php');


if(isset($_POST['update']))
{	
 
	 $ID = $_POST['id'];
	 $Type_license = $_POST['Type_license'];
	 $Identity_number = $_POST['Identity_number'];
	 $Fullname = $_POST['Fullname'];
 	 $Gender = $_POST['Gender'];
 	 $Nationality = $_POST['Nationality'];
	 $Height = $_POST['Height'];
	 $Weight = $_POST['Weight'];
	 $Born_date = $_POST['Dob'];
	 $Born_place = $_POST['Pob'];
	 $Occupation = $_POST['Occupation'];
	 $Address = $_POST['Address'];
	 $City = $_POST['City'];
	 $Poscode = $_POST['Poscode'];
	 $Phone = $_POST['Phone'];
	 $Email = $_POST['Email'];
	 $Father = $_POST['Father'];
	 $Mother = $_POST['Mother'];
	 $Education = $_POST['Education'];
	 $Spectacled = $_POST['Spectacled'];
	 $Disability = $_POST['Disability'];
	 $School_certified = $_POST['School_certified'];
	 $Address_ = $_POST['Address_'];
	 $Poscode_ = $_POST['Poscode_'];
	 $Phone_ = $_POST['Phone_'];
	 
	 if (empty($_POST['Type_license']) || empty($_POST['Identity_number']) || empty($_POST['Fullname'])|| empty($_POST['Gender'])||empty($_POST['Nationality']) || empty($_POST['Height']) || empty($_POST['Weight'])|| empty($_POST['Dob']) ||empty($_POST['Pob']) || empty($_POST['Occupation']) || empty($_POST['Address'])|| empty($_POST['City'])||empty($_POST['Poscode']) || empty($_POST['Phone']) || empty($_POST['Email'])|| empty($_POST['Father'])||empty($_POST['Mother']) || empty($_POST['Education']) || empty($_POST['Spectacled'])|| empty($_POST['Disability'])||empty($_POST['School_certified']) || empty($_POST['Address_']) || empty($_POST['Poscode_'])|| empty($_POST['Phone_']))
	{
		echo "Hai"; 
	}
  	
	else
	{
	 
	 $NUser = "UPDATE license SET Type_license = '$Type_license', Identity_number = '$Identity_number', Fullname = '$Fullname', Gender = '$Gender', Nationality = '$Nationality', Height = '$Height', Weight = '$Weight', Born_date= '$Born_date',Born_place = '$Born_place', 'Occupation = '$Occupation', Address = '$Address', City = '$City',Poscode = '$Poscode', Phone = '$Phone', Email = '$Email', Father = '$Father',Mother = '$Mother', Education = '$Education', Spectacled = '$Spectacled', Disability = '$Disability',School_certified = '$School_certified', Address_ = '$Address_', Poscode_ = '$Poscode_', Phone_ = '$Phone_' WHERE User_id = '$ID'";
	 
	
	 if($con ->query($NUser) === TRUE)
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


        