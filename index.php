
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhythm Travels</title>
    <?php include 'css/style.php' ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
   </head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Rhythm <span>Travel</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about"class="menu-btn">About</a></li>
                <li><a href="#contact"class="menu-btn">Contact</a></li>
                <button><a href="login/login.php">Sign In</a></button>   
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    
    <!-- home section start-->
    <div class="home" id="home">

      <div class="slide">
        <div id="slider">
            <figure>
              <img src="images/bus.jpg" >
              <img src="images/bus2.jpg" >
              <img src="images/bus3.jpg" >
              <img src="images/bus4.jpg" >
            </figure>
            </div>
        </div>
       

    
      <form action="codding.php" class="form" method="post">
         <div class="form-control">
             <label>Leaving from</label>
             <select id="location" required>
             <option value=""selected disabled>Select an option</option>
                <option value="1" >Kathmandu</option>
                <option value="2">Pokhara</option>
                <option value="3">Baglung</option>
                <option value="4">Chitwan</option>
              </select><br>
         </div>
         <div class="form-control">
          <label>Going Destination</label>
          <select id="location" required>
          <option value="" selected disabled>Select an option</option>
            <option value="1">Kathmandu</option>
            <option value="2">Pokhara</option>
            <option value="3">Baglung</option>
            <option value="4">Chitwan</option>
          </select><br>
         
         </div>
         <div class="form-control">
          <label>Travel Date</label>
          <input type="date"name="date" id="date" placeholder="Choose Date"autocomplete="off" required>
         </div>
         
          <button type="submit" name="search_btn">Search bus </a></button> 
         
      </form>
  
    </div>
  
<!--about section start-->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About us</h2>
        <div class="about-content">
            <div class="column left">
                <img src="images/bus6.jpg" alt="">
            </div>
          <div class="column right">
             
              <p>Rhythm Travel - It is the online realtime bus ticket booking platform. Rhythm Travel came into existence with a vision for new business processes of Travel Operators in Nepal to provide quality service for road passengers.
                Our system allows bus companies to manage their seats and update the info about the availability of seats online. Passenger books their seat then user entry is recorded into the database. Rhythm Travel aims to create a bus reservation system where 
                a traveler can have all bus information as per their journey dates and times. Our systems are secure to use as per the security management.</p>
             
          </div>
        </div>
    </div>
</section>



   <!--contact section start-->
   <section class="contact" id="contact">
       <div class="max-width">
           <h2 class="title">Contact us</h2>
           <div class="contact-content">
               <div class="column left">
                   <div class="icons">
                       <div class="row">
                           <i class="fas fa-user"></i>
                           <div class="info">
                               <div class="head">Name</div>
                               <div class="sub-title">Rythm Travels</div>
                               

                           </div>
                       </div>


                       <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Kathmandu,Nepal</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">RhythmTravels2@gmail.com</div>
                        </div>
                    </div>


                   </div>
               </div>
               <div class="column right">
                   <div class="text">Message us</div>

                   <form action="/db/codding.php" method="POST">
                       <div class="fields">
                           <div class="field name">
                               <input type="text" name="msgname" placeholder="Name" required>
                           </div>
                           <div class="field email">
                            <input type="email" name="msgemail" placeholder="Email" required>
                           </div>
                          
                       </div> <div class="field ">
                            <input type="text" name="msgsubject" placeholder="Subject"required>
                        </div>
                        <div class="field textarea">
                            <textarea  cols="30" rows="10" name="msgdescribe" placeholder="Describe project.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="message_btn">Send message</button>
                        </div>
                        </form>
               </div>
           </div>
       </div>
   </section>

   <!--fotter section start-->
<?php include 'css/style9.php' ?>
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
					<li><a href="#"><img src="./images/esewa1.png"></a></li>
					
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

   
<script src="js/script.js"></script>
<script src="js/date.js"></script>

</body>
</html>