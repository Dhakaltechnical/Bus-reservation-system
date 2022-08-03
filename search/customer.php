<?php
include('../admin/includes/connection.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-dark" style="background: linear-gradient(to left,#1CB5E0,#000046);" >
    <a class="navbar-brand" href="../index.php">Rythm Travels</a>
  </nav>


  
  <div class="card-body">
    <div class="row">
      <div class="col-md-8">
  <form method="post" action="../admin/code.php">
    
    <h5>Passenger Details</h5>
    <div class="form-group col-md-6">
      <label>Name of Passenger</label>
      <input type="text" class="form-control" name="passenger" placeholder="Enter name" autocomplete="off">
    </div>

    <div class="form-group col-md-6">
      <label >Email Address</label>
      <input type="email" class="form-control" name="pasemail" placeholder="Enter email"autocomplete="off">
    </div>

    <div class="form-group col-md-6 ">
      <label>Mobile Number</label>
      <input type="number" class="form-control" name="pasmobnumber" placeholder="Input number"autocomplete="off">
    </div>
<h5>Payment Method</h5>
<div class="form-group col-md-6 ">
      
      <img src="../images/esewa.jpg" height="100"  alt="eSewa">
    </div>
 
  <button type="submit" name="payment_btn" class="btn btn-primary">Proceed to Confirmation</button>
  </div>
  </form>
  
  <?php
      $query= "SELECT * FROM bustbl";
      $query_run= mysqli_query($con,$query); 
      ?>
  <div class="col-ml-5">
    <h5>Travel Details</h5>
    
 
    <table class="table table-bordered"  width="10%" cellspacing="0">
        <tbody>
        <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>
          <tr>
            <th>Route :</th>
            <td><?php  echo $row['destination']; ?>-<?php echo $row['sources'];?></td>
             
          </tr>
          <tr>
            <th>Seat:</th>
            <td>A4</td>
          </tr>
          <tr>
            <th>Travel:</th>
            <td><?php  echo $row['bustype'];  ?></td>
          </tr>
        </tbody>
      </table>
      <h5>Payment Details</h5>
      <table class="table table-bordered"  width="10%" cellspacing="0">
        <tbody>
          <tr>
            <th>Total Cost:</th>
            <td><?php  echo $row['price'];  ?></td>
          </tr>
          <?php
            }
            }
          else {
            echo "No record found";
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
  

</div>

     





             <!--fotter section start-->
 <?php include '../css/style9.php' ?>
 
 <footer class="footer">
   <div class="container">
     <div class="row">
       <div class="footer-col">
         <h4>Top Routes</h4>
         <ul>
           <li><a href="#">Pokhara-Kathmandu</a></li>
           <li><a href="#">Kathmandu-Pokhara</a></li>
           <li><a href="#">Kathmandu-Chitwan</a></li>
           
         </ul>
       </div>
       <div class="footer-col">
         <h4>Top Operators </h4>
         <ul>
           <li><a href="#">Deluxe</a></li>
           <li><a href="#">Super Deluxe</a></li>
           <li><a href="#">A/C</a></li>
           <li><a href="#">Tourist</a></li>
           <li><a href="#">Air suspension</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>Payment Patners</h4>
         <ul>
           <li><a href="#"><img src="../images/esewa1.png"></a></li>
           
         </ul>
       </div>
       <div class="footer-col">
         <h4>follow us</h4>
         <div class="social-links">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </div>
     </div>
   </div>
 </footer>
















 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>