<?php
 include ("connect.php");
 session_start();
 
?>

  <!--The Modal-->
	<div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Record</h4>
        </div>
        
      <div class="modal-body" id="demo"> 
     
      <table>
       <div class="form-group" >
       <thead>
        <tr>
		 <th width="20%">Id</th>
		  <th width="20%">Date</th>
          <th width="22%">Type</th>
          <th width="60%">Note</th>
          <th width="5%">Control</th>
         </tr>
       </thead>
	<?php
	   $Us = $_POST["User_id"];
	   $choose1="SELECT * FROM records where User_id=$Us";
	   $result1 = mysqli_query($con, $choose1);
	   if($result1->num_rows >0)
		{
		  while($row1 = $result1->fetch_assoc())
		  {?>
			<tbody>
			 <tr id="<?php echo $Us; ?>">
             <td><?php echo $row1['User_id'];?></td>
			 <td><?php echo date("d/m/Y",strtotime($row1['Date']));?></td>
			 <td><?php echo $row1['Violence'];?></td>
             <td ><?php echo $row1['Note'];?></td>
             <td><a href="Edit_record.php?ID=<?php echo $row1['ID'];?>"><span class="glyphicon glyphicon-pencil" name="edit"></span></a><a href=""><span class="glyphicon glyphicon-trash" name="trash"></a><td> 
             </tr>
			 </tbody>
			   <?php              
			    }
		   }
          else
		   {?>
			<tr>
            <th> There's No Data Found</th>
            </tr>
			<?php
            } ?>
         </table>   
         </div>
         
<script>
function load() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "v_rec_edit.php?ID", true);
  xhttp.send();
}
</script>
         
          <div class = "modal-footer">
            
            </div>      
        </div>
    </div>   
