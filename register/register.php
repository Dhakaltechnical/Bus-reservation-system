
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../css/style3.php' ?>
    
    <title>Bus Reservation System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 <div class="container">
     <div class="header">
         <h2>Create Account</h2>
     </div>
          <form action="../db/register.php"  class="form" id="form"method="POST"onsubmit="return validateForm();">
         <div class="form-control">
             <label>Username</label>
             <input type="text"name="name" id="username" placeholder="Enter your fullname"autocomplete="off">
             <i class="fas fa-check-circle"></i>
             <i class="fas fa-exclamation-circle"></i>
             <small>Error message</small>
         </div>
         <div class="form-control">
            <label>Phone Number</label>
            <input type="number"name="number" id="phone" placeholder="Enter your phonenumber"autocomplete="off" maxlength="10">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label>Email</label>
            <input type="email"name="email" id="email" placeholder="Enter your email"autocomplete="off">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label>Password</label>
            <input type="password"name="password" id="password" placeholder="Enter your password"autocomplete="off">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label>Confirm Password</label>
            <input type="password"name="cpassword" id="cpassword" placeholder="Enter your password again"autocomplete="off">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="acc">
            <p>Already have an account? <a href="../login/login.php">Login here </a></p>
        </div>
        <button type="submit" value="submit" name="submit" class="btn">Submit</button>
     </form>


     <?php

if(isset($_GET['errmsg'])){ ?>
  <p class="errmsg">
      <?php echo $_GET['errmsg']; ?></p>
  
<?php  }
?>
<?php

if(isset($_GET['msg'])){ ?>
  <p class="msg">
      <?php echo $_GET['msg']; ?></p>

<?php  }
?>

 </div>





   <script src="../js/register.js">  
 
 </script>
</body>
</html>