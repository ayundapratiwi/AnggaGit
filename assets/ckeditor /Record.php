<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                 <img src= "Images/ban2.jpg" />
                   <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
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
                        <a href="Record.html"><i class="fa fa-table "></i>Record of Users</a>
                    </li>
                    <li>
                        <a href="users.html"><i class="fa fa-qrcode "></i>Users Data</a>
                    </li>
                    <li>
                        <a href="news.html"><i class="fa fa-bar-chart-o"></i>Update news</a>
                    </li>

                    <li>
                        <a href="tips.html"><i class="fa fa-edit "></i> Update tips</a>
                    </li>
                    <li>
                        <a href="Logout.php"><i class="fa fa-edit "></i> Logout</a>
                    </li>
                    <p>Pencil icon: <span class="glyphicon glyphicon-pencil"></span></p>
                    <p>Trash icon as a link:
       				 <a href="#">
          			   <span class="glyphicon glyphicon-trash"></span>
        			</a>
      				</p>
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="col-lg-12">
				<form id="" action="create_Record.php" method="post" role="">
					<div class="form-group">
						<input type="text" name="User_id" id="name" tabindex="1" class="form-control" placeholder="User Id" value="">
					</div>
					<div class="form-group">
						<input type="date" name="Date" id="date" tabindex="1" class="form-control" placeholder="Date" value="">
					</div>
					<div class="form-group">
						<select name="Violence" name="violences" id="violences" tabindex="1" class="form-control" placeholder="Type of violence" value="">
                        
  						<option value="accident">Accident</option>
  						<option value="violence">Violence</option>
  						</select>
					</div>
					<!--<div class="form-group">
						<textarea name="note" value="" >
						Sata
                       </textarea>
						
					</div>-->
                    <textarea class="ckeditor" name="editor"></textarea>
                    
                    
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<input type="submit" name="create" id="register-submit" tabindex="4" class="form-control btn btn-register" value="create">
							</div>
						</div>
					</div>
				</form>
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
                     &copy;  2016 police.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">our team</a></a>
                </div>
        	</div>
        </div>
          

     <!--WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS
    <script src="assets/js/jquery-1.10.2.js"></script>-->
      <!-- BOOTSTRAP SCRIPTS 
    <script src="assets/js/bootstrap.min.js"></script>-->
      <!-- CUSTOM SCRIPTS 
    <script src="assets/js/custom.js"></script>-->
    
   
</body>
</html>
