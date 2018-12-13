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
               <h2>NEWS</h2>
                </div>
              </div>
                <!-- /. ROW  -->
                <br />        
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    <div class="col-lg-12"style="width:300px;">
                <?php
				$id = $_GET['Id'];
                $choosee="SELECT * FROM news WHERE Ns_id = '$id'";
				$results = mysqli_query($con, $choosee);
				
				if($results->num_rows >0)
				
			   $rows = $results->fetch_assoc()
				?>
				<form id="" action="update.php" method="post" role="" >
					<div class="form-group">
						<input type="text" name="id" class="form-control" value="<?php echo $_GET['Id']; ?>" readonly>
					</div>
                    <div class="form-group">
						<input type="text" name="Title" class="form-control" value="<?php echo $rows['Title']; ?>">
					</div>
					<div class="form-group">
						<input type="text" name="Author"  class="form-control" value="<?php echo $_SESSION["username"];?>"readonly>
					</div>
					<div class="form-group">
						<input type="date" name="Date"  class="form-control" value="<?php echo $rows['Date']; ?>">
					</div>
                    <div class="form-group">
						 <input type="file" name="fileToUpload" id="fileToUpload" value="">
					</div>
                    <div class="ckeditor">
                    <script src="assets/ckeditor /ckeditor.js"></script>
                    <textarea class="ckeditor" name="News_Content"> <?php echo $rows['News_Content']; ?></textarea>
                    </div>
                    <br>
				  
                    <button type="submit" name="update"  class="form-btn" value="">Update</button>
                    <button type="cancel" name="update"  class="form-btn" value="">Cancel</button>
                   
                 </form>
                  
                    </div>
                    </div>
                    </div>
                  
                     <!-- block -->
                       <div class="block">
                            <div="space">
                              <div class="navbar navbar-inner block-header">
                              </div>
                              <div class="block-content collapse in">
                                <div class="span12">
  									<?php
									 include ("view_news.php");
									 ?>
                                 </div>   
                                </div>
                             </div>
                       </div>
                     
                <!-- block -->
			</div>
            </div>
            
          
                   </div>
				</div>
			<!-- /. ROW  -->
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
