<?php
$server="localhost";
$username="root";
$password="";
$database="users";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
  //  echo"<h4>SUCCESS!!";
}
else{
   die("error".mysqli_connect_error());
}
?> 