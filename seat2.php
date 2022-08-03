<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style10.css">
    <?php include './css/style6.php' ?>
    
    <title>Movie Seat Booking</title>
  </head>
  <body>
  <nav>
    <a class="" href="../index.php">Rythm Travels</a>
        </nav>
    <div class="movie-container">
      <label>Pick a Bus Type:</label>
      <select id="movie">
        <option value="600">Deluxe</option>
        <option value="800">SuperDeluxe</option>
        <option value="1000">A/C</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>

      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>

      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="seat" >A1</div>
        <div class="seat">A2</div>
       

        <div class="seat">A3</div>
        <div class="seat">A4</div>
      </div>
      <div class="row">
        <div class="seat">A5</div>
        <div class="seat">A6</div>
      
        <div class="seat">A7</div>
        <div class="seat">A8</div>
      </div>

      <div class="row">
        <div class="seat">A9</div>
        <div class="seat">A10</div>
        
        <div class="seat occupied">A11</div>
        <div class="seat">A12</div>
      </div>

      <div class="row">
        <div class="seat">B1</div>
        <div class="seat">B2</div>
        
        <div class="seat">B3</div>
        <div class="seat occupied">B4</div>
      </div>

      <div class="row">
        <div class="seat occupied">B5</div>
        <div class="seat">B6</div>
        
        <div class="seat">B7</div>
        <div class="seat">B8</div>
      </div>

      <div class="row">
        <div class="seat">B9</div>
        <div class="seat">B10</div>
       
        <div class="seat">B11</div>
        <div class="seat">B12</div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of RS<span id="total">0</span>
    </p>

    <button><a href="./search/customer.php"> Continue Booking </a></button>
    <script src="./js/seat.js"></script>

    
  </body>
</html>