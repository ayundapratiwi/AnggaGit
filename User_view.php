<?php
	include ("connect.php");
	session_start();
?>
	
  <!--The Modal-->
	<div class="modal-dialog">
    <div class="modal-content3">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Data of User</h4>
        </div>
        <div class="modal-body">
        <?php
	   $Us = $_POST["User_id"];
	   $choose="SELECT * FROM license where User_id=$Us";
	   $result = mysqli_query($con, $choose);
	   if($result->num_rows >0)
		{
		  while($roww = $result->fetch_assoc())
		  {?>
        <form method="post" action="edit_users.php" enctype="multipart/form-data">
         <div class="foto">
           <img src="assets/Images/user.png" width="80px" />
         </div>
         <br />
          <table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
          <tr>
            <td  width="200">Driver's License ID </td><td width="11">:</td>
            <td  width="220"><input name="id" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['User_id'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Type of Driver License  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Type_license'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Identity Number (KTP)   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Identity_number'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Full Name  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Fullname'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Gender  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Gender'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Nationality   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Nationality'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Height    </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Height'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Weight   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Weight'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Date of Birth   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Born_date'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Place of Birth   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Born_Place'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Occupation   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Occupation'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Address   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Address'];?>"></td>
        </tr>
        <tr>
            <td  width="200">City   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['City'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Poscode   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Poscode'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Phone Number  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Phone'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Email   </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Email'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Father's Name  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Father'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Mother's Name  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Mother'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Education  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Education'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Glasses  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Spectacled'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Physical Disability  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Disability'];?>"></td>
        </tr>
         <tr>
            <td  width="200">Driving School Certificate  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['School_certified'];?>"></td>
        </tr>
        <tr>
         <td  width="400"><b>Person to be contacted in the case of emergency</b></td>
        </tr>
        <tr>
            <td  width="200"> Address  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Address_'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Pos code  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Poscode_'];?>"></td>
        </tr>
        <tr>
            <td  width="200">Phone Number  </td><td width="11">:</td>
            <td  width="220"><input name="nama" type="text" size="30" maxlength="30" readonly="readonly" value="<?php echo $roww['Phone_'];?>"></td>
        </tr>
       <tr> 
       
     <tr>
    <td><a href="edit_users.php?id=<?php echo $roww['User_id'];?>"><button type="button" class="form-btn">
          <span class="glyphicon glyphicon-pencil"></span> Update
        </button></a></td></tr>
    </table>
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
    </form>
  
 		 </div>
        </div>
    </div>   
