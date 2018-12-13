<?php
 include ("connect.php");
 session_start();
?>
	
  <!--The Modal-->
  <div class="modal-dialog">
     <div class="modal-content2">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Driving License</h4> 
        </div>
       <?php
	   $Us = $_POST["User_id"];
	   $choose="SELECT * FROM license where User_id=$Us";
	   $result = mysqli_query($con, $choose);
	   if($result->num_rows >0)
		{
		  while($row = $result->fetch_assoc())
		  {?>
       
        <div class="banner0">
          <div class="banner1">
           <img src="assets/Images/12939690_10204613192449703_1760453108_n.png copy.jpeg" width="60px" />
          </div>
          <div class="banner2">
           <b><?php echo $row['Type_license'];?></b>
           <div class="ban2">
            <b>BALI</b>
           </div>
           </div> 
           <div class="banner3">
          <img src="assets/Images/license.png" width="248px height="80px"" />
          </div>
          <div class="body1">
          <b>Nama: <?php echo $row['Fullname'];?></b>
          </div>
          <div class="body2">
          <?php echo $row['Gender'];?>
          </div>
          <div class="body3">
          <img src="assets/Images/imgavatar.png" width="80px" />
          <div class="body5">
          <img src="assets/Images/BarCode-512.png" width="70px" height="30px" />
          </div>
          </div>
          
          <div class="body4">        
          <div class="body4a">
         <b>Alamat</b>
          </div>         
          <div class="body4b">
          <b>: <?php echo $row['Address'];?></b>
          </div>
          <div class="body4a">
          <b>Tempat</b>
          </div>
		 <div class="body4b">
          : <b><?php echo $row['Born_Place'];?></b>
          </div>
          <div class="body4a">
          <b>Tgl.Lahir</b>
          </div>
          <div class="body4b">
          : <b><?php $tgl=$row['Born_date'];
		  echo date("d-F-Y",strtotime($tgl));?></b>
          </div>
          <div class="body4a">
          <b>Tinggi</b>
          </div>
          <div class="body4b">
          : <b><?php echo $row['Height'];?></b>
          </div>
          <div class="body4a">
          <b>Pekerjaan</b>
          </div>
          <div class="body4b">
          : <b><?php echo $row['Occupation'];?></b>
          </div>
          <div class="body4a">
          <b>No. SIM</b>
          </div>
          <div class="body4b">
          : <b><?php echo $row['User_id'];?></b>
          </div>
          <div class="body4a">
          <b>Berlaku s/d</b>
          </div>
          <div class="body4b">
          : <b><?php $tgl=$row['Period'];
		  echo date("d-F-Y",strtotime($tgl));?></b>
          </div>
          
          <div class="body4c">
          <b>DENPASAR,<?php $tgl=$row['Date'];
		  echo date("d-m-Y",strtotime($tgl));?></b>
          </div>
           <div class="body4g">
          <img src="assets/Images/15328316_1872157606350994_449338313_n.jpg" width="150px" />     </div> 
          </div>
        </div>
          <div class = "modal-footer">
            <button type="submit" name="Print"  class="form-btn" value="submit"><a href="Printing_page.php?Id=<?php echo $row['User_id'];?>">Print Preview</a></button>
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
