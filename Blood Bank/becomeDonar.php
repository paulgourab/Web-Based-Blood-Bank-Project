<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
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

.center {
            margin-left: auto;
            margin-right: auto;
            margin-top:20px;
        }
        .header{
    background-color: white;
    height: 120px;
    width: 100%;
    position:fixed;
}

.search{
    margin-top:200px;
    margin-left: 230px;
    font-size:1.5rem;
}
    </style>
</head>
<body>

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
                <a href="http://localhost/blood%20bank/login.php" >Login</a>
                <a href="http://localhost/Blood%20Bank/register.php">Rgistration</a>
                <a href="http://localhost/Blood%20Bank/becomedonar.php">Become Donar</a>
                <a href="http://localhost/Blood%20Bank/contactus.php" >Contact Us</a>
            </header>

    </div>




<form  action="" method="POST">
       
        <input class="search" type="text" name="search" value="<?php echo $searchKey; ?>" placeholder="search by name">
        
      </form>



<table border = "2" bordercolor = "black" height = "100px" width = "800px" bgcolor = "white" class="center">
	<caption><h3>List of The Donar</h3><caption>
	
	<tr bgcolor = "pink">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone</th>
    </tr>
    <?php while($row = mysqli_fetch_object($result)) { ?>
	<tr align = "center">
		<td><?php echo $row->first_name ?></td>
		<td><?php echo $row->last_name ?></td>
		<td><?php echo $row->phone ?></td>
	</tr>
           
	<?php } ?>
	</table>
</body>
</html>