<?php
  session_start();
?>
<html>
    <head>
        <title>
            carpooling
        </title>
    </head>
    <link rel="stylesheet" href="upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <div class="login-form">
    <div class="container">
      <div class="header">
        <h1>CARPOOLING</h1>
        <p>Fill your seats!</p>
      </div>
      <form method="post"  action="upload.php"
      enctype="multipart/form-data">
        <div class="input">
            <img src="tourist.png">
          <input type="text" id="from" name="from" placeholder="From" required/>
        </div>
        <div class="input">
            <img src="tourist1.png">
              <input type="text" id="to" name="to" placeholder="To" required/>
            </div>
            <div class="input">
                <img src="cash.png">
                  <input type="text" id="price" name="price" placeholder="Price" required/>
                </div>
                <div class="input">
                    <img src="calendar.png">
                      <input type="date" id="date" name="date"required/>
                    </div>
                    <div class="input">
                        <img src="clock.png">
                          <input type="time" id="time" name="time" required/>
                        </div>
                        <div class="input">
                            <img src="telephone1.png">
                              <input type="tel" id="number" name="number" placeholder="Phone number" required/>
                            </div>
                            <div class="input">
                <img src="seat.png">
                  <input type="text" id="price" name="price" placeholder="seats-availble" required/>
                </div>
                            <div class="input">
                                <label for="img">Select image:</label>
                                <input type="file" id="my_image"name="my_image" accept="image/*">
                                </div>
       <input class="signup-btn" type="submit" name="submit" id="submit" value="Upload" />
      </form>
    </div>
  </div>
  <?php
   $_SESSION['category']='carpooling';
   ?>
</body>
</html>
<?php 
   