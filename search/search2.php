<?php
include('../admin/includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../css/style5.php' ?>
    <title>Document</title>
</head>
<body>
    <nav>
    <a class="" href="../index.php">Rythm Travels</a>
        <div class="menu">
           <a href="../login/login.php">Sign In</a>
            </div>
        </nav>
        <hr>
        <?php
      $query= "SELECT * FROM bustbl";
      $query_run= mysqli_query($con,$query); 
      ?>
<table>
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
          <?php
            }
            }
          else {
            echo "No record found";
          }
          ?>
        </tbody>
      </table>

        <!-- <div class="img">
        <div class="label">
            <p>Leaving From:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Going Destination:</p>
        </div> -->
        <!-- <form action="" class="form" id="form" method="post">
            <div class="form-control">
                
            <select id="loco" required>
                   <option value=""selected disabled>Select an option</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Baglung">Baglung</option>
                    <option value="Chitwan">Chitwan</option>
                  </select>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <select id="loco" required>
                   <option value=""selected disabled>Select an option</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Baglung">Baglung</option>
                    <option value="Chitwan">Chitwan</option>
                  </select>
                  <input type="date"name="" id="date" placeholder="Choose Date"autocomplete="off">
                <input type="submit" value="Search Bus" class="btn">
            </div>
            </form> -->
        <!-- </div> -->
       
            <hr>
            <div class="winner">
               
            <?php
      $query= "SELECT * FROM bustbl";
      $query_run= mysqli_query($con,$query); 
      ?>
                    <table class="table">
                <thead>
                    <tr>
                        <th>Bus Name</th>
                        <th>Bus Type</th>
                        <th>Departure</th>
                        <th>Seat</th>
                        <th>Rating</th>
                        <th>Price</th>
                        <th>Booking</th>
                    </tr>
                   </thead>
                  
                   <tbody>
                   <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>
                    <tr>
                    <td><?php  echo $row['busname'];  ?></td>
                        <td><?php  echo $row['bustype'];  ?></td>
                        <td ><?php  echo $row['departure'];  ?></td>
                        <td ><?php  echo $row['seat'];  ?></td>
                        <td data-label="Rating"><img src="../images/5star.png" alt=""></td>
                        <td><?php  echo $row['price'];  ?></td>
                        <td><a href="../seat2.php" class="btn">Book Now</a></td>
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
 
        <script src="../js/date.js"></script>
      
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

</body>
</html>