<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Blood-home</title>
    <link rel="stylesheet" href="homePageStyle.css">
    <style>
      *{
    padding: 0%;
    margin: 0%;
    font-family: 'Lobster', cursive;
}
.header{
    background-color: white;
    height: 120px;
    width: 100%;
    position:fixed;
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
.mid{

}
.mid-container{
    padding: 5px;
}
.mid-container h4{
    margin: 80px;
    color: black;
    font-size: large;
    text-decoration: none;
    float: left;
}
.mid-container a:hover{
    color: brown;
}
span{
    color: black;
    font-size: 3rem;
}

.left{
    margin-left: 50px;
    padding: 10px;
}
.div-left{
    float: left;
    width: 45%;
    padding-right: 40px;

}
.div-right{
    float: left;
    width: 45%;
    
}
.down{
    margin-left: 50px;
}
.div-left1{
    float: left;
    width: 45%;
    padding-right: 40px;

}
.div-right2{
    float: left;
    width: 45%;
    
}
.metro-image{
    width: 250px;
    height: 250px;
    border: 3px solid white;
    border-radius: 180%;
    margin-left: 550px;
    margin-top: 300px;
    margin-bottom: 140px;
    transition: 0.3s;
    font-size: 0%;
}
.metro-image:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.footer-metro{
    background-color: whitesmoke;
    color:red;
    height: 152px;
}
.text{
    margin-top: 50px;
}
.metro{
    height: 100px;
    width: 70px;
    float: right;
    
}
input[type=text]{

width: 30%;
padding: 5px 10px ;
background-color: red;
height: 30px;
margin: 20px 0;
color: white;
box-sizing: border-box;
border: none;
border-bottom: 3px solid red;
}
input[type="button"]{
            width: 100px;
            border: none;
            background-color: red;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 100px;
        }
h1{
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
            <?php
            
            $connection = mysqli_connect('localhost','mohon','dragon007','pure_blood');
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $sql = "SELECT * FROM registration WHERE first_name LIKE '%$searchKey%'";
            }else{
                $sql = "SELECT * FROM registration";
                $searchKey = "";
            }
            $result = mysqli_query($connection,$sql);
            
            ?> 

            <header class="header-container">
                <a href="http://localhost/blood%20bank/home.php" >Home</a>
                <a href="http://localhost/blood%20bank/login.php">Login</a>
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Become Donar</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" >Contact Us</a>
            </header>

    </div>
    <img src="Blood2.png" width="100%">
    <br><br><br><br><br><br>
    <div class="search-blood">
      <h1>Find Donor</h1>
      <form  action="" method="POST">
        <!-- <input type="text" name="blood-type" id="blood-type" placeholder="Blood Type"> -->
        <!-- <span></span> -->
        <input type="text" name="search" value="<?php echo $searchKey; ?>" placeholder="search by name">
        <!-- <span></span> -->
        <!-- <input type="button" value="Search Blood" > -->
      </form>

      <table border = "2" bordercolor = "red" height = "100px" width = "800px" bgcolor = "yellow">
	<caption><h3>List of The Donar</h3><caption>
	
	<tr bgcolor = "pink">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
    </tr>
    <?php while($row = mysqli_fetch_object($result)) { ?>
	<tr align = "center">
		<td><?php echo $row->first_name ?></td>
		<td><?php echo $row->last_name ?></td>
		<td><?php echo $row->gender ?></td>
	</tr>
           
	<?php } ?>
	</table>

    </div>
    <br><br><br><br><br><br>
    <div class="mid">
        <div class="left">
            <div class="div-left">
                <h4><span>🛈</span> Get all the information</h4>
                <p>
                    Get all information about the donor fast and easily                </p>
            </div>
            <div class="div-right">
                <h4><span>🔒</span> Safe visit</h4>
                <p>
                    Visit the website safely
                 </p>
            </div>

        </div>



        <div class="down">
            <div class="div-left1">
                <h4><span>🕒</span> Save time</h4>
                <p>
                    Save time, Save life
                </p>
            </div>
            <div class="div-right2">
                <h4><span>🔐</span> Secure</h4>
                <p>
                    Secure all information
                 </p>
            </div>

        </div>
        
            <br><br>
            
            
        <p><img src="blood.jpg" class="metro-image"></p>
    </div>


        <div class="footer-metro">
          <br/>
            <h2 class="text"> Pure Blood</h2>
        </div>




</body>
</html>
