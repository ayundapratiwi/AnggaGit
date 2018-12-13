<?php
//membuat database di phpmyadmin

//menyambungkan database
//host, user, password, database

$host  = "localhost";// 127.0.0.1
$user  = "root";
$password = "";
$db = "onsim";

$con= new MySQLi("localhost", "root", "", "onsim");

//menguji error

/*if(!$link)
{
	die('ada error'.mysqli_connect_error());
}*/


if ($con->connect_errno) 
{
         die("ERROR : -> ".$con->connect_error);
     }

?>


 
