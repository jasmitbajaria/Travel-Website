<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$showAlert = false;
$showError = false;
include 'partials/_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists=false;
if(($password == $cpassword) && $exists==false ){
   $sql = "INSERT INTO `users` (`Username`, `Password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
   $result = mysqli_query($conn, $sql);
   if ($result){
    $showAlert = true;
   }
}
    else{
        $showError = "Passwords do not match";
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/start.css">
        
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>accounts</title>
    </head>
    <!--**********************************************-->
    <body>
     
       <header class="header" id="header">
          <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Namaste, welcome to Hindustan</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="start.html" class="nav__link active-link">Account</a>
                        </li>
                        <li class="nav__item">
                            <a href="Contact.html" class="nav__link">Contact Us</a>
                        </li>
                        
                    </ul>
            </nav>
        </header>
           
        <main class="main">
            <img src="assets/img/backg.webp" alt="" class="home__img">
                 <div class="home__container container grid">
                    <div class="home__data">
                        <!DOCTYPE html>
                        <html>
                        <body>
                        <span class="home__data-subtitle">click here to create an account.</span>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:100px;">Sign Up</button>
                        
                        <div id="id01" class="modal">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          
                          <form class="modal-content" action="/responsive-travel-website-main/start.php" method="post">
                            <div class="container">
                              <h1>Sign Up</h1>
                              <p>Please fill in this form to create an account.</p>
                              <hr>
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="username" required>
                        
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password" required>
                        
                              <label for="psw-repeat"><b>Repeat Password</b></label>
                              <input type="password" placeholder="Repeat Password" name="cpassword" required>
                              
                              <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                              </label>
                        
                              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        
                              <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="submit" class="signupbtn">Sign Up</button> 
                              </div>
                            </div>
                          </form>
                        </div>
                        
                        <script>
                        // Get the modal
                        var modal = document.getElementById('id01');
                        
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                          if (event.target == modal) {
                            modal.style.display = "none";
                          }
                        }
                        </script>
                        
                        </body>
                        </html>
                        <span class="home__data-subtitle">click here if you already have an account</span>
                        <button onclick="document.getElementById('id02').style.display='block'" style="width: 100px;">login</button>

                        <div id="id02" class="modal">
                          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <form class="modal-content" action="/action_page.php">
                            <div class="container">
                              <h1>Login</h1>
                              <p>Please fill in this form to login</p>
                              <hr>
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" required>
                        
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>
                              
                              <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                              </label>
                        
                              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        
                              <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="submit" onclick="BtnSubmit()"class="signupbtn">Login</button>

                        
                    </div>
                    
                </div>
            </section>
            <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

         
       