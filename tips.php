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
                        <h2>TIPS</h2>
                    </div>
                </div>
                <!-- ROW  -->
                <hr />
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    <div class="col-lg-12">
				<form id="" action="insert_tips.php" method="post">
					<div class="form-group">
						<input type="text" name="Title" class="form-control" placeholder="Title" value="">
					</div>
					<div class="form-group">
						<input type="text" name="Author"  class="form-control" placeholder="Author" value="<?php echo $_SESSION["username"];?>" readonly>
					</div>
					<div class="form-group">
						<input type="date" name="Date"  class="form-control" placeholder="Date" value="">
					</div>
                    <div class="ckeditor">
                      <script src="assets/ckeditor /ckeditor.js"></script>
                      <textarea class="ckeditor" name="editor"></textarea>
                    </div>
				    </br>
				   <div class="form-group">
                   <input type="submit" name="create" class="form-control1 btn btn-register" value="create">
                   <input type="reset" name="reset" class="form-control1 btn btn-register" value="cancel">
				   </div>
                   </div>
                </div>
               </div>
                </form>
               
              <!-- /. ROW  -->  
                 <!-- block -->
               <div class="block">
                 <div="space">
                   <div class="navbar navbar-inner block-header">
                   </div>
                   <div class="block-content collapse in">
                     <div class="span12">
                       <?php
                         include("view_tips.php");
                        ?>      
                      </div>
                   </div>
                </div>
                <!-- /.block -->
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
