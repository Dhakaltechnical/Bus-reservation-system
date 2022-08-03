<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
   if($password===$cpassword){
       $encryptedPassword = md5($password);
       
     include('db.php');
     $query = "INSERT INTO registration_user(name,number,email,password,cpassword) 
   
     VALUES ('$name','$number','$email','$encryptedPassword','$cpassword')";
 



 if(mysqli_query($con,$query)){
   $msg ="signup successfull";
   header('location:../login/login.php?msg='.$msg);
}else{
   $msg = "Error:".mysqli_errmsg($con);
   header('location:../register/register.php?errmsg='.$msg);
}

}else{
 $msg = "password and confirm password does not match";
 header('Location:../register/register.php?errmsg='.$msg);
}
?>
