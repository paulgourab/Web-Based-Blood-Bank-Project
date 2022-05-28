<DOCTYPE html>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta http-equiv="content-type" content="text/html" charset="utf-8">
      <title>Pure Blood-log in</title>
      <style media="screen">


.header{
    background-color: white;
    height: 120px;
    width: 100%;
    position:fixed;
    margin-bottom: 70px;
}
.img1{
    padding: 20px;
    float: left;
}
.div-name{
    float: left;
    margin-top: 25px;
    color: red;
}
.header-container{
    float: right;
    margin-top: 70px;
    
}
.header-container a{
    color: red;
    text-decoration: none;
    margin: 15px;
    font-size: large;
}
.header-container a:hover{
    text-decoration: underline;
    color: tomato;
}


        .header1{
          text-align:center;
          }
        .header1 a{text-decoration:none;
                  color:red;
        }
        .login{
          width:300px;height:400px;
          border:2px grey solid;
          margin:5px auto;
          margin-top: 100px;
          -webkit-border-radius:5px;
          padding:25px;
          background-color: seashell;
          border-color: seashell;

        }
        p{font-weight:bold;
        color:red;}
        span{
          color:red;
        }
        h1{
          color:red;
        }
        .separator{
          display:inline-blok;width:20px;}
      input[type=text]{

        width: 70%;
        padding: 10px 20px ;
        background-color: white;
        /*font-size: 1rem;*/
        height: 30px;
        margin: 20px 0;
        color: white;
        box-sizing: border-box;
        /*border: 3px solid salmon;
        border-radius: 5px;*/
        border: none;
        border-bottom: 3px solid red;
        }
          
        input[type="button"]{
            width: 100px;
            border: none;
            background-color: red;
            color: whitesmoke;
            padding: 10px;
            cursor: pointer;
            margin-left: 00px;
            float:left;
        }
        input[type="password"]{
          width: 70%;
        padding: 10px 20px ;
        background-color: white;
        /*font-size: 1rem;*/
        height: 30px;
        margin: 20px 0;
        color: white;
        box-sizing: border-box;
        /*border: 3px solid salmon;
        border-radius: 5px;*/
        border: none;
        border-bottom: 3px solid red;
        }
      </style>
    </head>
    <body>

      <div class="header">

        <img  src="blood-donation.jpg" height="80px" width="80px" class="img1">

        <div class="div-name">
           <h2> Pure <br> Blood</h2>
        </div>
            <!-- <?php
            
            $connection = mysqli_connect('localhost','mohon','dragon007','pure_blood');
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $sql = "SELECT * FROM registration WHERE first_name LIKE '%$searchKey%'";
            }else{
                $sql = "SELECT * FROM registration";
                $searchKey = "";
            }
            $result = mysqli_query($connection,$sql);
            
            ?>  -->

            <header class="header-container">
                <a href="http://localhost/blood%20bank/home.php" >Home</a>
                <a href="http://localhost/blood%20bank/login.php" >Login</a>
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Become Donar</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" target="blank">Contact Us</a>
            </header>


      <div class="header1">
        <!-- <a href="#"><h1>Pure Blood</h1></a> -->
      </div>
      <div class="login">
        <h1>Sign in</h1>
        <p> Email or Phone number</p>
        <form action="" method="post">
          <input type="text" name="username" id="userid" placeholder="Username" >
          <div class="password">
            <br/><span>Password</span><span></span>
            <a href="ForgotPassword.html">Forgot Password</a>
            </div>
            <input type="password" name="password" id="passwordid" placeholder="Password"/><br/>
            <input type="button" name="login" id="loginid" value="Login"/>


        </form>
      </div>
      </div>
    </body>
  </html>
