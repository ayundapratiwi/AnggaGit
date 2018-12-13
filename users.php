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
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
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
         </div>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>DATA OF USERS</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                 
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">  <img src= "assets/Images/search.png" width="5%" />
                     
                 <div class="span12">
                     <table width="103%" id="myTable" >
						  <thead>
						     <tr>
						        <th width="15%">Fullname</th>
                                <th width="14%">Address</th>
                                <th width="12%">Born Place</th>
                                 <th width="">Dob</th>
                                <th width="14%">Driver's License ID</th>
                                <th width="7%">Height</th>
                                <th width="">Occupation</th><!--5%-->
                                <th width="">Valid Until</th><!--12%-->
                                <th width="8%">Control</th>
						      </tr>
						    </thead>
                             <?php
							 
							$per_page=5;
							if (isset($_GET["page"])) 
							{
							  $page = $_GET["page"];
							 }
							else 
							{
							 $page=1;
							}
							 // Page will start from 0 and Multiple by Per Page
							$start_from = ($page-1) * $per_page;
							
							$choose="SELECT * FROM license LIMIT $start_from, $per_page";
							 $result = mysqli_query($con, $choose);
							 if($result->num_rows >0)
							  {
								while($row = $result->fetch_assoc())
								 {
								  ?>
               				 <tbody>
                              <tr>
                              	 
                              	  <td><?php echo $row['Fullname'];?></td>
                              	  <td><?php echo $row['Address'];?></td>
                                  <td><?php echo $row['Born_Place'];?></td>
                               	  <td><?php echo date("d/m/Y",strtotime($row['Born_date']));?></td> 
                                   <td><?php echo $row['User_id'];?></td>
                                  <td><?php echo $row['Height'];?></td>
                                  <td><?php echo $row['Occupation'];?></td>
                                  <td><?php echo date("d/m/Y",strtotime($row['Period']));?></td>
                                  <td><a href="#" class='U_modal' id="<?php echo  $row['User_id']; ?>"><span class="glyphicon glyphicon-user"></span></a>
                                  <a href="#" class='open_modal' id="<?php echo  $row['User_id']; ?>"><span class="glyphicon glyphicon-file"></span></a>
                                <a href="#" class='print_modal' id="<?php echo  $row['User_id']; ?>"><span class="glyphicon glyphicon-print"></span></a>
                              </td>
                              
                               </tr>
                			  </tbody>
                			<?php
                               }
                             }
							   else
							   {
								 ?>
							 	<tr>
                             	<th> There's No data found ! Please check again! </th>
                             	</tr>
                                <?php
							   }  
							   ?> 
							   </table>
                               <?php

								//Now select all from table
								$query = "select * from license";
								$result = mysqli_query($con, $query);
								
								// Count the total records
								$total_records = mysqli_num_rows($result);
								
								//Using ceil function to divide the total records on per page
								$total_pages = ceil($total_records / $per_page);
								
								//Going to first page
								echo "<center><a href='users.php?page=1'>".'First Page<span aria-hidden="true">&laquo;</span>'."</a>";
								
								for ($i=1; $i<=$total_pages; $i++) {
								
								echo "<a href='users.php?page=".$i."'>".$i."</a>";
								};
								// Going to last page
								echo "<a href=users.php?page=$total_pages'>".'<span aria-hidden="true">&raquo;</span>Last Page'."</a></center>";
								?>
			</div>
                            <!----search table--->
                       <script type="text/javascript">
						function myFunction() {
						  var input, filter, table, tr, td, i;
						  input = document.getElementById("myInput");
						  filter = input.value.toUpperCase();
						 table = document.getElementById("myTable");
						  tr = table.getElementsByTagName("tr");
						  for (i = 0; i < tr.length; i++) {
							td = tr[i].getElementsByTagName("td")[0];
							if (td) {
							  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							  } else {
								tr[i].style.display = "none";
							  }
							}       
						  }
						}
                        </script>
                        <!-----END--->
                            
                         <!-- Modal Popup untuk View Driving License Card--> 
						 <div id="modal3" class="modal3" aria-labelledby="myModalLabel" aria-hidden="true"></div>
      					<!-- Modal Popup untuk View Record--> 
						 <div id="modal" class="modal" aria-labelledby="myModalLabel" aria-hidden="true"></div>
                         <!-- Modal Popup untuk View Driving License Card--> 
						 <div id="modal2" class="modal2" aria-labelledby="myModalLabel" aria-hidden="true"></div>
                         
                         
                         
                         <!-- Javascript untuk popup modal View Users--> 
						<script type="text/javascript">
                           $(document).ready(function () {
                           $(".U_modal").click(function(e) {
                              var n = $(this).attr("id");
                               $.ajax({
								   url: "User_view.php",
								   type: "POST",
								   data : {User_id: n},
								   success: function (ajaxData)
								   {
								   $("#modal3").html(ajaxData);
								   $("#modal3").modal('show',{backdrop: 'true'});
                                       }
                                       });
                                });
                              });
                        </script>
                        
                         <!-- Javascript untuk popup modal View Record--> 
						<script type="text/javascript">
                           $(document).ready(function () {
                           $(".open_modal").click(function(e) {
                              var m = $(this).attr("id");
                               $.ajax({
								   url: "V_rec.php",
								   type: "POST",
								   data : {User_id: m},
								   success: function (ajaxData)
								   {
								   $("#modal").html(ajaxData);
								   $("#modal").modal('show',{backdrop: 'true'});
                                       }
                                       });
                                });
                              });
                        </script>
                         
                        <!-------Javascript for popup modal View DL---->
                        <script type="text/javascript">
                           $(document).ready(function () {
                           $(".print_modal").click(function(e) {
                              var m = $(this).attr("id");
                               $.ajax({
								   url: "P_license.php",
								   type: "POST",
								   data : {User_id: m},
								   success: function (ajaxData)
								   {
								   $("#modal2").html(ajaxData);
								   $("#modal2").modal('show',{backdrop: 'true'});
                                       }
                                       });
                                });
                              });
                        </script>             
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
          

     <!-- /. WRAPPER  -->
    
    
   
</body>
</html>
