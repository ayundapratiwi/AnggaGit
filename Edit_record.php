<?php
	require ("connect.php");
	 session_start();
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
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
          <div id="page-inner">
             <div class="row">
                <div class="col-md-12">
                  <h2>RECORDS</h2>
                 </div>
              </div>
             <!-- /. ROW  -->
             <hr />
             <div class="row">
			   <div class="col-lg-12">
				<form id="" action="update_record.php" method="post" role="">
                <?php
               $id = $_GET['ID'];
               $choose1="SELECT * FROM records WHERE ID = '$id'";
			   $result1 = mysqli_query($con, $choose1);
			   if($result1->num_rows >0)
				{
				 $rows = $result1->fetch_assoc()
				 ?>
                <input type="Hidden" name="id" class="form-control" value="<?php echo $_GET['ID']; ?>">
				  <div class="form-group">
				  <input type="text" name="User_id" id="name"  class="form-control" placeholder="Driver's License Id" value="<?php echo $rows['User_id']; ?>"readonly>
				  </div>
                  
				  <div class="form-group">
				  <input type="date" name="Date" id="date" class="form-control" placeholder="Date" value="<?php echo $rows['Date']; ?>">
				   </div>
                   
				   <div class="form-group">
				   <select name="Violence" class="form-control" placeholder="Type of violence" value="<?php echo $rows['Violence']; ?>">
                    <option value="accident">Accident</option>
  					<option value="violence">Violence</option>
  					</select>
					</div>
                    
                    <div class="form-group">
					<textarea class="form-control" name="Note"  placeholder="Note"><?php echo $rows['Note']; ?></textarea>	
					</div>
                    
					<div class="form-group">
                    <button type="submit" name="update"  class="form-btn" value="submit">Update</button>
                   <button type="reset" class="form-btn" value="Reset">Cancel</button>
                    </div>
				</form>
                <?
				  }
				  ?>
			  </div>
           </div>
		<!-- /. ROW  -->
          <div class="block">
            <div="space">
               <div class="navbar navbar-inner block-header">
               </div>
               <div class="span12">
                <?php include("view_record.php");?>      
                </div>
            </div>
          </div>
         <!-- /.block -->
         </div>
       </div>
  <!-- /. PAGE WRAPPER  -->
 </div>
     <div class="footer">
       <div class="row">
                <div class="col-lg-12" >
                    &copy;  2016 police.com
                </div>
         </div>
     </div>
     
 
 
</body>
</html>
