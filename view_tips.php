<?php
	include ("connect.php");
	$option="SELECT * FROM tips";
	$resultt = mysqli_query($con, $option);

	?>
	<table id="myTable">
      <thead>
      <tr>
      <th>No</th>
      <th>Title</th>
      <th>Date</th>
      <th>Data</th>
      <th>Control</th>
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
				<td width="5%"><?php echo $roww['Ts_id'];?></td>
                <td width="15%"><?php echo $roww['Title'];?></td>
                <td><?php $tgl= $roww['Date']; 
					echo date("d/m/Y",strtotime($tgl));?></td>
                <td><?php echo $roww['Tips_Content'];?></td>
				<td><a href="edit_tips.php?Id=<?php echo $roww['Ts_id'];?>"><span class="glyphicon glyphicon-pencil" name="edit"></span></a><a href="delete_tips.php?Id=<?php echo $roww['Ts_id'];?>"><span class="glyphicon glyphicon-trash" name="edit" onclick="return confirm('Do you want to delete this?')"></span></a></td>
 
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
	 