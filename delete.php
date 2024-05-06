<?php
   include_once 'db_conn.php';

      $id=$_GET['id'];
	
       $sql="delete from users where id ='$id'";
       
	$result=mysqli_query($conn,$sql);
	

if($result){
   header('location:allusertable.php');
     }


?>