<?php
 session_start();
 ?>
<html>
    <head>
        <title>
            Sign up
        </title>
    </head>
    
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <div class="signup-form">
    <div class="container">
      <div class="header">
        <h1>Create an Account</h1>
        <p>Get started for free!</p>
      </div>
      <form method="post">
        <div class="input">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="user" name="user" placeholder="Username" required/>
        </div>
        <div class="input">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" id="mail" name="mail" placeholder="Email" required/>
        </div>
        <div class="input">
          <i class="fa-solid fa-lock"></i>
          <input type="password" id="password" name="password" placeholder="Password" required/>
        </div>
        <div class="input">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="pass" name="pass" placeholder="Confirm Password" required/>
          </div>
        <div class="cc">
            <input type="checkbox" id="sp" name="sp" value="show" onclick="myFunction()">
            <label for="sp">Show Password</label><br>
            </div> 
        <input class="signup-btn" type="submit" name="submit" id="submit" value="SIGN UP" />
      </form>
      <p>Or sign up with</p>
      <div class="social-icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
      </div>
      <p>Already have an account <a href="login.php">sign in</a></p>
    </div>
  </div>
  <script type="text/javascript">
function myFunction() {
  var x = document.getElementById("password");
  var y = document.getElementById("pass");
  if (x.type === "password" & y.type === "password") {
    x.type = "text";
    y.type ="text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
</script>
</body>
</html>
<?php 
    if(isset($_POST['submit']))
    {
    $sname = "localhost";
    $uname = "root";
    $password = "";
    
    $db_name = "project";

    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
   
    if (!$conn) {
        echo "Connection failed!";
        exit();
    }
    $user=$_POST['user'];
 $mail=$_POST['mail'];
 $pass=$_POST['password'];
 
 $sql1="select user from signup where user='$user'";
 $result1= mysqli_query($conn, $sql1);
 $count=mysqli_num_rows($result1);
 if($count==1)
    {
      echo "<script>alert('Username Already EXists,Try some other')</script>";
    }
 else{   
    $sql = "INSERT INTO signup (user,mail,password) values('$user','$mail','$pass');";
   $result= mysqli_query($conn, $sql);
   if($result)
    {
      $_SESSION['username']=$user;
      $_SESSION['mail']=$mail;
      echo "<script>alert('Registered Succesfully')</script>";
      echo '<script type="text/javascript">
      window.location.href = "site1.php";
  </script>';
    }
    else
    {
      echo "<script>alert('Registration Failed')</script>";
    }

  }
    mysqli_close($conn);
    }
    
?>       