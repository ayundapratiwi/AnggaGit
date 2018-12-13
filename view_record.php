<?php
	include ("connect.php");
	$option="SELECT * FROM records";
	$resultt = mysqli_query($con, $option);
	?>
  
	<table id="myTable">
      <thead>
      <tr>
      <th>Id</th>
      <th>Date</th>
      <th>Type of Violence</th>
      <th>Note</th>
      </tr>
      </thead>
                                      
		 <?php
		  if($resultt->num_rows >0)
		   {
			 while($roww = $resultt->fetch_assoc())
			  {
				?> 
				<tbody>
				<tr>
				<td><?php echo $roww['User_id'];?></td>
             	<td><?php $tgl= $roww['Date']; 
					echo date("d-F-Y",strtotime($tgl));?></td>
                <td><?php echo $roww['Violence'];?></td>
                <td><?php echo $roww['Note'];?></td>
                </tr>
                </tbody>
                <?php
				}
			  }
			else
			 {?>
			<td>
            <th> There's No data found !</th>
            </td>
			<?php
			}
			?>	
      </table>
	 