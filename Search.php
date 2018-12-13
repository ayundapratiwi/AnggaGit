<?php
  include ("connect.php");
 session_start();
 
 
 $choose="SELECT * FROM license";
 if(isset($_POST['search']))
 {
    $searchs = $_POST['search'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM license WHERE User_id LIKE '%".$searchs."%'";
  }
  
  
  
  else 
  {
    echo "EROR";
  }
 
 
?>