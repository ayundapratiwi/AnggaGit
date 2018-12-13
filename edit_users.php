<?php
	session_start();
	require ("connect.php");
	
	if(!isset($_SESSION["username"]))
	{
		header('Location: Login.php');
	}

	?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>ADMIN STAFF</title>
	<!-- FIXED STYLES-->
    <link href="assets/css/fixed.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
</head>
<body>  
   <!----WRAPPER-->       
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <img src= "assets/Images/ban2.jpg" />
                </div>                
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Home</a>
                    </li>
                    <li>
                        <a href="Record.php"><i class="fa fa-table "></i>Record of Users</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-qrcode "></i>Users Data</a>
                    </li>
                    <li>
                        <a href="news.php"><i class="fa fa-bar-chart-o"></i>Update news</a>
                    </li>

                    <li>
                        <a href="tips.php"><i class="fa fa-edit "></i> Update tips</a>
                    </li>
                    <li>
                        <a href="Logout.php"><i class="fa fa-edit "></i> Logout</a>
                    </li>
                </ul>
             </div>
        </nav>
        <!-- NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>EDIT FORM USERS</h2>
                    </div>
                </div>
                
                <!-- ROW  -->
               <hr />
           <div class="row">
			   <div class="col-lg-12">
               <?php
			   $id = $_GET['id'];
			   $choose="SELECT * FROM license where User_id=$id";
			   $result = mysqli_query($con, $choose);
			   if($result->num_rows >0)
				{
				  while($roww = $result->fetch_assoc())
				  {?>

				<form id="" action="update_users.php" method="post" enctype="multipart/form-data">
					<div class="form-group">	
                    	Driver's License ID:
						<input type="text" name="id" class="form-control" value="<?php echo $roww["User_id"];?>" readonly>
                        
					</div>
					<div class="form-group">
                    	Type of Driver License:
						<select name="Type_license" >
                        <option value="A"> A</option>
                        <option value="B"> B</option>
                        <option value="C"> C </option>
                        </select> 
					</div>
					<div class="form-group">
                    	Identity Number (KTP):
						<input type="text" name="Identity_number"  class="form-control" value="<?php echo $roww['Identity_number'];?>">
					</div>
                    <div class="form-group">
                    	Full Name:
						<input type="text" name="Fullname"  class="form-control" value="<?php echo $roww['Fullname'];?>">
					</div>
                    <div class="form-group">
                    	Gender:
						<input name="Gender" type="radio" value="Female" checked="CHECKED"> Female 
                        <input name="Gender" type="radio"  value="Male" > Male
					</div>
                    <div class="form-group">
                    	Nationality:
						<input type="text" name="Nationality"  class="form-control" value="<?php echo $roww['Nationality'];?>">
					</div>
                    <div class="form-group">
                    	Height:
						<input type="text" name="Height"  class="form-control" value="<?php echo $roww['Height'];?>">
					</div>
                    <div class="form-group">
                    	Weight:
						<input type="text" name="Weight"  class="form-control" value="<?php echo $roww['Weight'];?>">
					</div>
                    <div class="form-group">
                    	Date Of Birth:
						<input type="date" name="Dob"  class="form-control" value="<?php echo $roww['Born_date'];?>">
					</div>
                    <div class="form-group">
                    	Place Of Birth:
						<input type="text" name="Pob"  class="form-control" value="<?php echo $roww['Born_Place'];?>">
					</div>
                    <div class="form-group">
                    	Occupation:
						<select name="Occupation">
                        <option value="Student">Student</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Driver">Driver</option>
                        <option value="Pegawai Negeri">Pegawai Negeri</option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Employee">Employee</option>
                        <option value="Unemployment">Unemployment</option>
                        </select> 
					</div>
                    <div class="form-group">
                    	Addres:
						<input type="text" name="Address"  class="form-control" value="<?php echo $roww['Address'];?>">
					</div>
                    <div class="form-group">
                    	City:
						<select name="City">
                        <option value="Badung">Badung</option>
                        <option value="Denpasar">Denpasar</option>
                        <option value="Bangli">Bangli</option>
                        <option value="Buleleng">Buleleng</option>
                        <option value="Gianyar">Gianyar</option>
                        <option value="Jembrana">Jembrana</option>
                        <option value="Karangasem">Karangasem</option>
                        <option value="Klungkung">Klungkung</option>
                        <option value="Tabanan">Tabanan</option>
                        </select> 
					</div>
                    <div class="form-group">
                    	Poscode:
						<input type="text" name="Poscode"  class="form-control" value="<?php echo $roww['Poscode'];?>">
					</div>
                    <div class="form-group">
                    	Phone:
						<input type="text" name="Phone"  class="form-control" value="<?php echo $roww['Phone'];?>">
					</div>
                    <div class="form-group">
                    	Email:
						<input type="text" name="Email"  class="form-control" value="<?php echo $roww['Email'];?>">
					</div>
                    <div class="form-group">
                    	Father:
						<input type="text" name="Father"  class="form-control" value="<?php echo $roww['Father'];?>">
					</div>
                    <div class="form-group">
                    	Mother:
						<input type="text" name="Mother"  class="form-control" value="<?php echo $roww['Mother'];?>">
					</div>
                    <div class="form-group">
                    	Education:
						<select name="Education">
                        <option value="No Shcool">No Shcool</option>
                        <option value="Elementary School">Elementary School</option>
                        <option value="Junior High School">Junior High School</option>
                        <option value="High School">High School</option>
                        <option value="Bachelor">Bachelor</option>
                        </select> 
					</div>
                    <div class="form-group">
                    	Glassess:
						<input name="Spectacled" type="radio" value="YES"> YES 
                        <input name="Spectacled" type="radio" value="NO" checked="CHECKED" > NO
					</div>
                    <div class="form-group">
                    	Disability:
                        <select name="Disability">
                        <option value="None">None</option>
                        <option value="Hand"> Hand </option>
                        <option value="Foot"> Foot </option>
                        <option value="Hearing"> Hearing </option>
                        <option value="Body"> Body </option>
                        </select>
						
					</div>
                    <div class="form-group">
                    	School Certified:
						 <input type="radio" name="School_certified" value="YES"> YES 
						</label>
                        <label>
                        <input name="School_certified" type="radio" value="NO" checked="CHECKED" > NO
					</div>
                    <b>Person to be contacted in the case of emergency</b>
                    <div class="form-group">
                    	Address:
						<input type="text" name="Address_"  class="form-control" value="<?php echo $roww['Address_'];?>">
					</div>
                    <div class="form-group">
                    	Poscode:
						<input type="text" name="Poscode_"  class="form-control" value="<?php echo $roww['Poscode_'];?>">
					</div>
                    <div class="form-group">
                    	Phone:
						<input type="text" name="Phone_"  class="form-control" value="<?php echo $roww['Phone_'];?>">
					</div>
                     
				    </br>
				   <div class="form-group">
                   <button type="submit" name="update"  class="form-btn" value="submit">Update</button>
                   <button type="reset" class="form-btn" value="Reset">Cancel</button></div>
                </form>
                </div>
               </div>
               <?php
				  }
				}
				?>
                <!-- block -->
               <div class="block">
                 <div="space">
                   
                      </div>
                   </div>
                </div>
                <!-- /.block -->
                </div>
                </div>
                
              <!-- /. ROW  -->  
              
           </div>
        </div>
         <!-- /. NAV SIDE  -->
    </div>
  <!-- /.WRAPPER  -->
     <div class="footer">
       <div class="row">
                <div class="col-lg-12" >
                    &copy;  2016 police.com
                </div>
         </div>
     </div>
</body>
</html>
