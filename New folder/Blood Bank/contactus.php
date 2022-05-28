<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio project</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Montserrat:ital,wght@1,500&family=Satisfy&display=swap" rel="stylesheet">

    <!-- css for mobile -->
    <link rel="stylesheet" href="style.css">

     <!-- css for desktop -->
    <link rel="stylesheet" href="desktop.css" media="screen and (min-width: 992px)">
</head>
<body>

    <!--navbar starts here-->
    <div class="navbar">
        <div class="nav-logo col-5">
            <img src="blood-donation.jpg"" alt="logo" height="100px" width="70px">
        </div>
        <div class="nav-heading col-2">
            <!-- <h1>Blood Bank</h1> -->
        </div>
        <div class="navbar-menu col-6">
            <a href="http://localhost/blood%20bank/home.php" >Home</a>
                <a href="http://localhost/blood%20bank/login.php">Login</a>
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Become Donar</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" >Contact Us</a>
        </div>
    </div>
     <!--navbar ends here-->

    

    <!-- achievement-contact starts here -->

     <div class="achievement-contact">
         
         <div class="contact col-6" id="contactme-id">
            <h2>CONTACT ME</h2>
            <hr class="dotted-hr">

            <form action="mailto:romzanalimohon@gmail.com" method="POST" enctype="text/plain">

                <p><input type="text" placeholder="your name" name="name"></p>
                <p><input type="text" placeholder="your email" name="email"></p>
                <textarea name="message" id="" cols="30" rows="10" placeholder="write your message here"></textarea>
                <button type="submit">SEND</button>
                <button type="reset">RESET</button>

            </form>
         </div>
         <div class="contact-links col-5">
            <h2>More Ways to Contact</h2>
            <hr class="dotted-hr">
            <div class="media-buttons">
                <button class="btn" onclick="window.open('https://www.youtube.com/')" class="request-callback"><i class="fa fa-youtube-square" style="color: #c4302b;"></i></button>
                <button class="btn" onclick="window.open('https://www.facebook.com/')" class="request-callback"><i class="fa fa-facebook-square" style="color: #3b5998;"></i></button>
                <button class="btn" onclick="window.open('https://www.facebook.com/')" class="request-callback"><i class="fa fa-skype" style="color: #3b5998;"></i></button>
                <button class="btn" onclick="window.open('https://www.facebook.com/')" class="request-callback"><i class="fa fa-globe" style="color: green;"></i></button>
                <button class="btn" onclick="window.open('https://www.facebook.com/')" class="request-callback"><i class="fa fa-github" style="color: gray;"></i></button>
            </div>
         </div>
        </div>
     </div>

    <!-- achievement-contact ends here -->


    <!-- footer starts here -->

     <div class="footer">
         <div class="footer-menu col-6">
         <a href="http://localhost/blood%20bank/login.php">Login</a>
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Become Donar</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" >Contact Us</a>
         </div>
         <div class="footer-desc col-6">
             &copy; Blood Bank company limited <span style="color: red; font-size: 1.5rem;">❤</span> for Life
         </div>
     </div>

    <!-- footer starts here -->
</body>
</html>