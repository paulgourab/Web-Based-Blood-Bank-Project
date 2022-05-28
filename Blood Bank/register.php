<DOCTYPE html>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta http-equiv="content-type" content="text/html" charset="utf-8">
      <title>Pure Blood-register</title>
      <style media="screen">


.header{
    background-color: white;
    height: 120px;
    width: 100%;
    position:relative;
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

          .register{
            margin: 0 auto;
            height: 800px;
            width: 500px;
            margin-top: 100px;
            background-color: white;
            box-shadow: 0 4px 8px 0 royalblue;
            transition: 0.3s;
            font-size: 0%;
        }
        .card:hover{
            box-shadow: 0 4px 8px 0 royalblue;
        }
        .person{
            margin-top: 20px;
            margin-left: 220px;
        }
        #fname{
            margin-left: 70px;
            height: 30px;
            width: 150px;
            float: left;
        }
        #lname{

            height: 30px;
            width: 150px;
            float: right;
            margin-right: 70px;
        }
        span{
            margin: 20px;
          color: black;
           font-size: 2rem;
        }

        input[type=text]{

            width: 70%;
            padding: 10px 20px ;
            background-color: white;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: black;
            box-sizing: border-box;
            /*border: 3px solid salmon;
            border-radius: 5px;*/
            border: none;
            border-bottom: 3px solid red;
        }
        input[type=password]{
            width: 70%;
            padding: 10px 20px ;
            background-color: white;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: black;
            box-sizing: border-box;
            border: 3px solid red;
            border-radius: 5px;
            /*border: none;
            border-bottom: 3px solid salmon;*/
        }
        option{
            width: 70%;
            padding: 10px 20px ;
            background-color: black;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: white;
            box-sizing: border-box;
            border: 3px solid red;
            border-radius: 5px;
            /*border: none;
            border-bottom: 3px solid salmon;*/
        }
        input[type="radio"]{

            padding: 10px 20px ;
            background-color: black;
            /*font-size: 1rem;*/
            color: white;
            margin: 20px 0;
            color: white;
            box-sizing: border-box;

        }
        input[type="submit"]{
            width: 150px;
            border: none;
            background-color: red;
            color: whitesmoke;
            padding: 10px;
            cursor: pointer;
            margin-left: 100px;
        }
        input[type="reset"]{
            width: 100px;
            border: none;
            background-color: red;
            color: whitesmoke;
            padding: 10px;
            cursor: pointer;
            float: right;
            margin-right: 100px;
        }
        legend{
            color: white;
        }
        h1{
          text-align: center;
          color:red;
        }
      </style>
    </head>
    <body>

    <div class="header">

        <img  src="blood-donation.jpg" height="80px" width="80px" class="img1">

        <div class="div-name">
           <h2> Pure <br> Blood</h2>
        </div>
            

            <header class="header-container">
                <a href="http://localhost/blood%20bank/home.php" >Home</a>
           
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Donar List</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" >Contact Us</a>
            </header>

    </div>


      <h1>Pure Blood</h1>
      <div class="register">
        <img src="blood-heart.png" height="100px" width="70px" class="person">
            <br><br>
            <form action="registerConnect.php" method="POST">

                    <legend>Registration</legend>
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <input type="text" name="lname" id="lname" placeholder="Last Name" class="name">
                <br>
                <br><br>
                <br>
                <span>🩸</span>
                <input type="text" name="bloodGroup" id="userid" placeholder="Blood Group" >
                <br>
                <span>📧</span>
                <input type="text" name="email" id="email" placeholder="Email">
                <br>
                <span>⚤</span> <select name="gender" id="genderid">
                    <option value="m">Male</option>
                    <option value="f">Female</option>

                </select>

                <br/><br/>

                <span>☎</span>
                <input type="text" name="telephone" id="telephone" placeholder="Phone Number">
                <br>
                <span>📅</span>
                <input type="date" name="previous-donation" id="previous-donation" placeholder="Previous Donation Date(mm/date/year)">
                <br>
                <span>🚲</span>
                <input type="text" name="area" id="araid" placeholder="Area">
                <br>
                <!-- <span>🔓</span>
                <input type="password" name="Password" id="Password"  placeholder="Password">
                <br>
                <span>🔒</span>
                <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password">
                <br> -->
                <br>
                <input type="submit" value="Became a Donor">
                  <input type="reset" value="Clear">

    </form>



    </div>
      </div>
    </body>
  </html>
