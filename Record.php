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
				<form id="" action="create_Record.php" method="post" role="">
				  <div class="form-group">
				  <input type="text" name="User_id" id="name" tabindex="1" class="form-control" placeholder="Driver's License Id" value="">
				  </div>
                  
				  <div class="form-group">
				  <input type="date" name="Date" id="date" tabindex="1" class="form-control" placeholder="Date" value="">
				   </div>
                   
				   <div class="form-group">
				   <select name="Violence" tabindex="1" class="form-control" placeholder="Type of violence" value="">
                    <option value="accident">Accident</option>
  					<option value="violence">Violence</option>
  					</select>
					</div>
                    
                    <div class="form-group">
					<textarea class="form-control" name="Note" rows="3" placeholder="Note"></textarea>	
					</div>
                    
					<div class="form-group">
					<input type="submit" name="create" id="register-submit" tabindex="4" class="form-control btn btn-register" value="create">          </div>
				</form>
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
