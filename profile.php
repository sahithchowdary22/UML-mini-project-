<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="profile.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            
    min-height: 100vh; /* Set a minimum height of 100% of the viewport height */
    overflow-y: auto; /* Enable vertical scrolling if content overflows */
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
        .result-item-loction {
            display: inline-block;
            margin-bottom: 50px;
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
            color: #fff;
            background-color: transparent;
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
            color: inherit;
        }
    </style>
</head>
<body>
    <!-- Your HTML structure --><!-- Navbar top -->
    <header>
        <div class="logo">
            <img src="your-logo.png" alt="Your Logo">
        </div>
        <h3>PROFILE</h3>
        <div class="header-buttons">
            <a href="site1.php" class="home-btn">HOME</a>
            <a href="homesite.php" class="logout-btn">Logout</a>
        </div>
    </header>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100" height="100">

            <div class="name">
                ImDezCode
            </div>
            <div class="job">
                Web Developer
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['username']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['mail']; ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>9032167156</td>
                        </tr>
                        <tr>
                            <td>DOB</td>
                            <td>:</td>
                            <td>12/2/23</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <h2>POSTS</h2>
    </div>
    <!-- End -->

</body>
</html>

<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "project";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
    exit();
}
$user = $_SESSION['username'];
$sql = "SELECT * FROM images WHERE user='$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($images = mysqli_fetch_assoc($result)) {
        echo '<div class="container_display">';
        echo '<div class="result-item">';
        echo '<img src="uploads/' . $images['image_url'] . '" alt="Result Image">';
        echo '<div class="result-item-content">';
        echo '<div class="result-item-title"><b>' . $images['user'] . '</b></div>';
        echo '<br>';
        
        // Print specific details based on category
        if ($images['category'] == 'carpooling') {
            echo '<div class="result-item-loction">' . $images['from'] . '</div>';
            echo '&rarr;';
            echo '<div class="result-item-loction">' . $images['to'] . '</div>';
        } elseif ($images['category'] == 'ticketsharing') {
            echo '<div class="result-item">Event:' . $images['event'] . '</div>';
            echo '<div class="result-item">Venue:' . $images['venue'] . '</div>';
        } elseif ($images['category'] == 'roomsharing') {
            echo '<div class="result-item">Landmark:' . $images['landmark'] . '</div>';
            echo '<div class="result-item">No of people:' . $images['no_of_people'] . '</div>';
        }
        echo '<div class="result-item">Price:' . $images['price'] . '</div>';
        echo '<div class="result-item">Date:' . $images['date'] . '</div>';
        echo '<div class="result-item">Time:' . $images['time'] . '</div>';

       

        echo '</div></div>';
        echo '</div>';
    }
}


mysqli_close($conn);
?>