  <?php 
  
  include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .container_display {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .result-item {
            display: flex;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            background-color: #fff;
        }

        .result-item img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-right: 1px solid #ddd;
        }

        .result-item-content {
            padding: 20px;
        }
        .result-item-location{
            font-size: 30px;
        }

        .result-item-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .result-item-address {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .result-item-phone {
            font-size: 14px;
            color: #007bff;
        }
       .result-item-button {
    margin-right: 10px;
    padding: 10px 20px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #fff; /* Set text color to white */
    background-color: transparent; /* Set background color to transparent */
}

.result-item-button.show-number {
    background-color: #4caf50;
}

.result-item-button.chat {
    background-color: #007bff;
}

/* Remove underline on anchor tags within buttons */
.result-item-button a {
    text-decoration: none;
    color: inherit; /* Inherit color from parent */
}
.loc{
            display: flex;
        }
.loc .iconig img{
            width: 50px;
            height: 50px;
            border:0;
            margin-top: -10px;
        }
.phicon{
    margin-right:10px;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: rgb(243, 243, 243);
}
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: rgb(235, 235, 235);
    border:1px solid #f6f6f6;
    margin-bottom: 20px;
}
header h3{
    align-items: center;
    margin-left: 100px;
}
.logo img {
    width: 100px; /* Set the width as needed */
    /* Add any additional styling for your logo */
}

.header-buttons a {
    text-decoration: none;
    margin-left: 20px;
    padding: 8px 15px;
    border-radius: 5px;
    color: #ffffff;
    background-color:rgb(255, 156, 95);
    transition: all 0.3s;
}

.header-buttons a:hover {
    background-color: rgb(47, 137, 248);
    color: #ffffff;
}
h2{
  margin-left: 500px;
  font-size: 50px;
}
    </style>
</head>
<body>
<header>
        <div class="logo">
            <img src="your-logo.png" alt="Your Logo">
        </div>
        <div class="header-buttons">
            <a href="site1.php" class="home-btn">HOME</a>
            <a href="#" class="logout-btn">Logout</a>
        </div>
    </header>
<h2>Find your <span style="color: rgb(255, 140, 0);"> SEAT!</span></h2>
    <div class="container_display">
        <?php 
            $sql = "SELECT * FROM images where category='ticketsharing' ORDER BY id DESC";
            $res = mysqli_query($conn,  $sql);
            if(mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) { 
                    echo '<div class="result-item">';
                    echo '<img src="uploads/'.$images['image_url'].'" alt="Result Image">';
                    echo '<div class="result-item-content">';
                    echo '<div class="loc">';
                    echo '<div class="iconig"><img src="map.png" ></div>';
                    echo '<div class="result-item-location">'.$images['venue'].'</div>';
                    echo '</div>';
                    echo '<div class="result-item-title"><b>'.$images['user'].'</b></div>';
                    echo '<br>';
                     
                    echo '<div class="result-item-loction">Event:'.$images['event'].'</div>';
                    
                    
                    
                    echo '<div class="result-item">Date:'.$images['date'].'</div>';
                    echo '<div class="result-item">Time:'.$images['time'].'</div>';
                   
               echo '<button class="result-item-button show-number"><i class="phicon fa fa-phone"></i><a href="tel:'.$images['number'].'">'.$images['number'].'</a></button>';

                 echo '<button class="result-item-button chat"><a href="https://wa.me/' . $images['number'] . '"><i class="fa fa-comments"></i> Chat</a></button>';

                  echo '</div></div>';
              }
              
          }
      
      ?>
  </div>
</body>
</html>