<?php
include_once 'db_conn.php';
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=  $_POST['email'];
    $phone=  $_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];
 var_dump ($name);
  
	if($email=='' || $password==''){

  		 // echo 'please fill email and password';
      		header('location:adduser.php?error=please fill email and password');

   	 }
	else{
   
     		 $sql= "select * from users where email= '$email'";
      		 $result= mysqli_query($conn,$sql);
       		//  print_r($result);
     		 if(mysqli_num_rows($result)>0){
       			header('location:adduser.php?error=user fill already exists');
    
    		 }
		else{
    
     			 $query="insert into users(name,email,password,phone,address)values('$name','$email','$password','$phone','$address')";
      			 mysqli_query($conn,$query);
    			 header('location:allusertable.php');
  		   }

 	 }
	}
	//else{
		// header('location:registration.php');
	//}


?>