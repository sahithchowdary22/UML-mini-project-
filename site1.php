<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sharing community</title>
    <link rel="stylesheet" href="org.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="your-logo.png" alt="Your Logo">
        </div>
        <div class="contact-btn">
            <img src="call.png">
        <a href="#l1"  style="text-decoration: none ;">Contact Us</a>
        </div>
        <form method="post">
        <div class="header-buttons">
            <a href="homesite.php" class="login-btn">Log out</a>      
        </div>
</form>
        <div class="ig">
           <a href="profile.php" style="text-decoration: none ; vertical-align: middle; color:black"><img src="user.png"><?php echo '<p style="margin-top:-29px;margin-left:40px;font-weight:bold;" >'.$_SESSION['username'].'</p>'; ?></a>
        </div>
    </header>
    <h3 class="srch-txt">
        Search your <span style="color: rgb(255, 140, 0);">NEED</span>
    </h3>
    <form method="post" action="categoryview.php" id="search-form">
    <div class="search-boxes">
        <div class="search-box1">
            <input type="text" placeholder="Enter Location" id="loc" name="loc" class="location-search">
            <span class="search-icon1">
                <img src="location.png">
            </span>
        </div>
</form>
        <div class="search-box2">
            <input type="text" placeholder="Search item" class="item-search">
            <span class="search-icon2">
                <img src="search.png">
            </span>
        </div>
        <div class="up1">
            <a href="#"> <img src="search.png"></a>
        </div>
        <div class="up">
            <a href="upload.html" style="text-decoration: none">UPLOAD</a>
        </div>
    </div>
   

    <section class="container">
       <div class="arrows prev">
        <div class="arrows next">
        <div class="slider-wapper">
            <div class="slider">
                <div class="slide-1" id="slide-1">
                    <img src="carpool.png">
                </div>

                <div class="slide-2" id="slide-2">
                    <img src="rm.png">
                </div>

                <div class="slide-3" id="slide-3">
                    <!-- <img src="banner3.png"> -->
                </div>
            </div>
          </div>
        </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>
        <div class="padding-box1" id="box-1">
            <img src="bx1.png">
            <a href="cpupload.php" onclick="cpupload.php"><img src="next.png"></a>
        </div>
        <div class="padding-box2" id="box-2">
            <img src="bx2.png">
            <a href="view1.php" onclick="view1.php"><img src="next.png"></a>
        </div>
        <div class="padding-box3" id="box-3">
            <img src="bx3.png">
            <a href="tsupload.php" onclick="tsupload.php"><img src="next.png"></a>
        </div>
        <div class="padding-box4" id="box-4">
            <a href="cat.html"><img src="right.png"></a>
        </div>
    </section>
    <h3 class="cat-txt">
        Find what you <span style="color: rgb(255, 140, 0);">NEED</span>
    </h3>
    <div class="cat">
        <div class="cat1" id="b1">
            <a href="view1.php"><img src="car.png"></a>
            <text class="t1">CARPOOLING</text>
        </div>
        <div class="cat2" id="b2">
            <a href="view2.php"><img src="ticket.png"></a>
            <text class="t1">TICKETS</text>
        </div>
        <div class="cat3" id="b3">
            <a href="view3.php"><img src="house.png"></a>
            <text class="t1">ROOMSHARING</text>
        </div>
    </div>
</body>
    <footer>
   <div class="foot">
    <text>Follow us on</text>
    <div class="sm">
    <div class="f"><a href="#"><img src="facebook.png"></a></div>
    <div class="f"><a href="#"><img src="whatsapp.png"></a></div>
    <div class="f"><a href="#"><img src="instagram.png"></a></div>
    <div class="f"><a href="#"><img src="twitter.png"></a></div>
   </div>
   </div>
   <div class="ab">
    <p>A sharing community website is a versatile online platform that connects individuals with shared interests in carpooling, ticket sharing, and room sharing. This innovative platform enables users to collaborate, reducing their carbon footprint through carpooling, finding cost-effective travel solutions through ticket sharing, and discovering affordable and convenient accommodation options through room sharing. The website fosters a sense of community, offering a sustainable and collaborative approach to transportation, leisure, and housing needs. Whether you're seeking to reduce expenses, contribute to environmental sustainability, or simply connect with like-minded individuals, this website provides a dynamic and user-friendly space for sharing and co-sharing experiences.</p>
   </div>
   <div class="a1">
    <h1>Some of our services that will prove useful to you on a day-to-day basis are :</h1>
   </div>
   <div class="a2">
    <h4>CARPOOLING:</h4>
    <div class="txt1">
     <P>Daily ticket sharing is a cost-effective practice where individuals regularly share event tickets, transport passes, or other access privileges, fostering affordability and community participation in daily activities. It promotes resource efficiency and enhanced accessibility.
        </P>
        </div>
    <h4>TICKETS:</h4>
    <div class="txt1">
     <P>Daily room sharing is a flexible arrangement where individuals share accommodations on a regular basis, allowing for cost savings and resource utilization in daily living. It offers a convenient and communal approach to housing needs.
        </P>
        </div>
    <h4>ROOMSHARING:</h4>
    <div class="txt1">
     <P>
        Carpooling on a daily basis offers a sustainable and economical way to share rides with fellow commuters, reducing costs and environmental impact in day-to-day transportation. It fosters resource optimization and community connectivity.</P>
    </div>
    </div>
    <div class="c">
        <h3>Popular cities:</h3>
        <div class="cc">
        <a href="#">Delhi</a> |
<a href="#">Mumbai</a> |
<a href="#">Bangalore</a> |
<a href="#">Hyderabad</a> |
<a href="#">Chennai</a> |
<a href="#">Pune</a> |
<a href="#">Ahmedabad</a> |
<a href="#">Kolkata</a> |
<a href="#">Jaipur</a> |
<a href="#">Chandigarh</a> |
<a href="#">Coimbatore</a> |
<a href="#">Lucknow</a> |
<a href="#">Surat</a> |
<a href="#">Indore</a> |
<a href="#">Patna</a> |
<a href="#">Nagpur</a> |
<a href="#">Ernakulam</a> |
<a href="#">Bhopal</a> |
<a href="#">Vadodara</a> |
<a href="#">Ludhiana</a> |
<a href="#">Kanpur</a> |
<a href="#">Nashik</a> |
<a href="#">Varanasi</a> |
<a href="#">Visakhapatnam</a> |
<a href="#">Rajkot</a> |
<a href="#">Raipur-Chhattisgarh</a> |
<a href="#">Vijayawada</a> |
<a href="#">Madurai</a> |
<a href="#">Ranchi</a> |
<a href="#">Goa</a> |
<a href="#">Thiruvananthapuram</a> |
<a href="#">Bhubaneshwar</a> |
<a href="#">Allahabad</a> |
<a href="#">Aurangabad-Maharashtra</a> |
<a href="#">Dehradun</a> |
<a href="#">Mysore</a> |
<a href="#">Trichy</a> |
<a href="#">Guwahati</a> |
<a href="#">Agra</a> |
<a href="#">Kozhikode</a> |
<a href="#">Jodhpur</a> |
<a href="#">Thrissur</a> |
<a href="#">Kolhapur</a> |
<a href="#">Salem</a> |
<a href="#">Meerut</a> |
<a href="#">Mangalore</a> |
<a href="#">Gorakhpur</a> |
<a href="#">Jabalpur</a> |
<a href="#">Jalandhar</a> |
<a href="#">Gwalior</a>
    </div>
    </div>
    <h2>CONTACT US:</h2>
    <div class="l1" id="l1">
    <p>
        Address: ANITS Collage, Suite 5678, Tagarapuvalasa, Visakhapatnam 531163<br>
        <br>
     Phone: (555) 123-4567<br>
     <br>
     Email: info@fakedomain.com<br>
     <br>
     Support: support@fakedomain.com<br>
     <br>
     Inquiries: inquiries@fakedomain.com<br>
     </p>
     <div class="l2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2216.2157028595298!2d83.42432089621484!3d17.92145821691298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanil%20neerukonda!5e0!3m2!1sen!2sin!4v1698866272060!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
    </div>
    <h2>FEEDBACK & SUPPORT :</h2>
    <div class="ta">
        <textarea id="w3review" name="w3review" rows="10" cols="80"></textarea>   
    </div>
    <input type="submit" value="Submit"> 
    </footer>
    <script src="script.js"></script>
    </html>
    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     //  $cat= $_POST['category'];

 //$cat = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);


         // $_SESSION['cat']=$cat;
          $_SESSION['loc']=$_POST["loc"];
    echo '<script type="text/javascript">
                 window.location.href = "categoryview.php";
             </script>';
   }
        ?>
       <script>
    const searchForm = document.getElementById('search-form');
    const locationInput = document.getElementById('loc');

    locationInput.addEventListener('keydown', function (event) {
        if (event.key === "Enter") {
            // Submit the form when Enter key is pressed
            searchForm.submit();
        }
    });
</script>
