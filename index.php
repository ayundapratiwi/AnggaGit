<?php

include('connect.php');
session_start();

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
    <link href="calendar.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
     <div class="navbar-header">
        <img src= "assets/Images/ban2.jpg" width="1200px" />
      </div>
              
           
        
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
           
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
               		<!--<li class="active-link">-->
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
                    <div class="col-lg-12">
                     <h2>ADMIN HOME</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                         <b>Welcome</b>, <i><?php echo $_SESSION["username"];?></i> <br/>
                          <img src="assets/Images/imgavatar.png" alt="Avatar" style="width:10%">
                          <div class="container">
                          <?php
                            $us= $_SESSION["username"]; 
                            $select="SELECT * FROM admin where username = '".$us."'";
                            $result = mysqli_query($con, $select);
                            while ($data=mysqli_fetch_array($result))
                            {
                            // output data of each row
                                 
                                   echo"<h4>".$data["Fullname"]."</h4>";
                                   echo $data["Occupation"];
                           } 
                            ?>
                          </div>
                        </div>       
                    </div>
                  </div>
                  <!-- /. ROW  --> 
                       
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="index.php" >
 						<i class="fa fa-user fa-5x"></i>
                      <h4>Home</h4>
                      </a>
                      </div>
                     </div>
                     
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Record.php" >
 							<i class="fa fa-clipboard fa-5x"></i>
                      <h4>Record</h4>
                      </a>
                      </div>
                  	</div>
                    
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="users.php" >
 						<i class="fa fa-users fa-5x"></i>
                      <h4>Users Data</h4>
                      </a>
                      </div>
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="news.php" >
 							<i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>News</h4>
                      </a>
                      </div>
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="tips.php" >
 							<i class="fa fa-comments-o fa-5x"></i>
                      <h4>Tips</h4>
                      </a>
                      </div>
                   </div>  
                     
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Logout.php" >
 							<i class="fa fa-key fa-5x"></i>
                      <h4>Logout </h4>
                      </a>
                      </div>
                  </div>
              </div>
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        <div class="alert alert-danger">
                        </div>
                        <div class="row1">
						<?php
							include 'calendar.php';
							$calendar = new Calendar();
							echo $calendar->show();
							?>
                         </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
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
          

     <!-- /. WRAPPER  -->
    
   
</body>
</html>
