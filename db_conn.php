<?php
 $server = 'localhost';
 $username='root';
 $password='';
 $dbname='project';

 $conn=mysqli_connect($server,$username,$password,$dbname);

 if(!$conn){
    echo 'not connected';
 }else{
   // echo 'connected';
 }
?>