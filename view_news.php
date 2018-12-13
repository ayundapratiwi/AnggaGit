<?php
	include ("connect.php");
	$option="SELECT * FROM news";
	$resultt = mysqli_query($con, $option);
	?>

	<table id="myTable">
      <thead>
      <tr>
      <th>No</th>
      <th width="20%">Title</th>
      <th>Date</th>
      <th>Image</th>
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
				<td><?php echo $roww['Ns_id'];?></td>
                <td><?php echo $roww['Title'];?></td>
                <td><?php $tgl= $roww['Date']; 
					echo date("d/m/Y",strtotime($tgl));?></td>
                <td><img src="<?php echo $location;?>" width="65px"/>
                <td><?php echo $roww['News_Content'];?></td>
				<td><a href="edit_news.php?Id=<?php echo $roww['Ns_id'];?>"><span class="glyphicon glyphicon-pencil" name="edit"></span></a><a href="delete_news.php?Id=<?php echo $roww['Ns_id'];?>"><span class="glyphicon glyphicon-trash" name="edit"></a><td> 
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
