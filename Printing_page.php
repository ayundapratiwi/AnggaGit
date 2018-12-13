<?php
	require ("connect.php");
	session_start();
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

<?php
 include ("connect.php");

?>
	
       <?php
	   $Id= $_GET["Id"];
	   $choose="SELECT * FROM license where User_id=$Id";
	   $result = mysqli_query($con, $choose);
	   if($result->num_rows >0)
		{
		  while($row = $result->fetch_assoc())
		  {?>
       
          <div class="banner0p">
          <div class="banner1p">
           <img src="assets/Images/12939690_10204613192449703_1760453108_n.png copy.jpeg" width="60px" />
          </div>
          <div class="banner2p">
           <b><?php echo $row['Type_license'];?></b>
           <div class="ban2p">
            <b>BALI</b>
           </div>
           </div> 
           <div class="banner3p">
          <img src="assets/Images/license.png" width="248px height="80px"" />
          </div>
          <div class="body1p">
          <b>Nama: <?php echo $row['Fullname'];?></b>
          </div>
          <div class="body2p">
          <?php echo $row['Gender'];?>
          </div>
          <div class="body3p">
          <img src="assets/Images/imgavatar.png" width="80px" />
          <div class="body5p">
          <img src="assets/Images/BarCode-512.png" width="70px" height="30px" />
          </div>
          </div>
          
          <div class="body4p">
           
          <div class="body4ap">
         <b>Alamat</b>
          </div>         
          <div class="body4bp">
          <b>: <?php echo $row['Address'];?></b>
          </div>
          <div class="body4ap">
          <b>Tempat</b>
          </div>
		 <div class="body4bp">
          : <b><?php echo $row['Born_Place'];?></b>
          </div>
          <div class="body4ap">
          <b>Tgl.Lahir</b>
          </div>
          <div class="body4bp">
          : <b><?php $tgl=$row['Born_date'];
		  echo date("d-F-Y",strtotime($tgl));?></b>
          </div>
          <div class="body4ap">
          <b>Tinggi</b>
          </div>
          <div class="body4bp">
          : <b><?php echo $row['Height'];?></b>
          </div>
          <div class="body4ap">
          <b>Pekerjaan</b>
          </div>
          <div class="body4bp">
          : <b><?php echo $row['Occupation'];?></b>
          </div>
          <div class="body4ap">
          <b>No. SIM</b>
          </div>
          <div class="body4bp">
          : <b><?php echo $row['User_id'];?></b>
          </div>
          <div class="body4ap">
          <b>Berlaku s/d</b>
          </div>
          <div class="body4bp">
          : <b><?php $tgl=$row['Period'];
		  echo date("d-F-Y",strtotime($tgl));?></b>
          </div>
          
          <div class="body4cp">
          <b>DENPASAR,<?php $tgl=$row['Date'];
		  echo date("d-m-Y",strtotime($tgl));?></b>
          </div>
           <div class="body4gp">
          <img src="assets/Images/15328316_1872157606350994_449338313_n.jpg" width="150px" />     </div> 
          </div>
        </div>
         
             <div class="form-group">
               <input type="submit" name="create" class="form-btn" value="Create">
               <input type="reset" name="reset" class="form-btn" value="Cancel">
			 </div>
            </div>  
          <?php
				}
			  }
			else
			 {?>
			<td>
            <th> There's No data found ! Please check again! </th>
            </td>
			<?php
			}
			?>	
       </div>
       </div>
    </div>   

</body>
</html>
