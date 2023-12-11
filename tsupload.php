<?php
  session_start();
?>
<html>
    <head>
        <title>
            tickets
        </title>
    </head>
    <link rel="stylesheet" href="upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <div class="login-form">
    <div class="container">
      <div class="header">
        <h1>TICKETS</h1>
        <p>Share excess seats!</p>
      </div>
      <form method="post" action="upload.php"
      enctype="multipart/form-data">>
        <div class="input">
            <img src="map.png">
          <input type="text" id="venue" name="venue" placeholder="Venue" required/>
        </div>
        <div class="input">
            <img src="event.png">
              <input type="text" id="event" name="event" placeholder="Event" required/>
            </div>
            <div class="input">
                <img src="cash.png">
                  <input type="text" id="price" name="price" placeholder="Price" required/>
                </div>
                <div class="input">
                    <img src="calendar.png">
                      <input type="date" id="date" name="date" required/>
                    </div>
                    <div class="input">
                        <img src="clock.png">
                          <input type="time" id="time" name="time" required/>
                        </div>
                        <div class="input">
                            <img src="telephone1.png">
                              <input type="text" id="number" name="number" placeholder="Phone number" required/>
                            </div>
                            <div class="input">
                                <label for="img">Select image:</label>
                                <input type="file" id="my_image" name="my_image" accept="image/*">
                                </div>
                                <p>(Ensure that image do note contain seat numbers or QR code)</p>
       <input class="signup-btn" type="submit" name="submit" id="submit" value="Upload" />
      </form>
    </div>
  </div>
  <?php
   $_SESSION['category']='ticketsharing';
   ?>
</body>
</html>