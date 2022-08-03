
<?php
  include('db.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $encryptedPassword = md5($password);  
  $query = "SELECT * FROM registration_user WHERE email = '$email' AND password='$encryptedPassword'";
  $result = mysqli_query($con,$query);

  if(mysqli_num_rows($result)==1){
 

    $msg = "Username and password  match";
       header('Location:../index.php');
  }else{
     
    $msg = "Username and password does not match";
    header('Location:../login/login.php?errmsg='.$msg);
  }
?>