<?php
ob_start();
session_start();
require "DB_conn.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message= $_POST['message'];


		if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
			$sess=$_SESSION['sess_user_id'];
			$SQL="UPDATE contactus SET name='".$name."',email='".$email."',subject='".$subject."',message='".$message."' WHERE id='".$sess."'";
		}else{
			$SQL = "INSERT INTO contactus (name,email,subject,message ) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";
		}

		$query_run = mysqli_query($con,$SQL);

		if($query_run){
			echo '<script language="javascript">';
			echo 'alert("message successfully sent")';
			echo '</script>';
			if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				header("Location: logout.php");
			}
		}
		else{

			echo '<script language="javascript">';
			echo 'alert("REGISTRATION FAILED")';
			echo '</script>';
		}
	}else{
		echo '<script language="javascript">';
		echo 'alert("PLEASE FILL AND SELECT ALL REQUIRED FIELDS")';
		echo '</script>';
	}
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Blood Connection</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <link rel="shortcut icon" type="image/png" href="assets/images/about.jpg" />
</head>
<body>
	<header class="continer-fluid ">
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/blood6.jpg" alt="" style="margin: -32px;padding: 25px;">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item  ">
                                            <a class="nav-link" href="index.html">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.php">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="register.php">Be a Donor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="find_blood.php">Find Donor</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
	<div class="col-12" style="overflow: auto; padding: 2% 20% 5% 20%;">
		<div class="col-12" style="text-align: left; padding: 5%; background-color: rgb(217, 219, 224);">
		<h1 style="color:black; text-align:center;">CONTACT US</h1>
			<form action="contact.php" method="post">
				Name<span style="color: red;">*</span><br>
				<input class="in" type="text" name="name" placeholder="Enter Name" required style=""><br><br>
				Email<span style="color: red;">*</span><br>
				<input class="in" type="text" name="email" placeholder="Enter Your Email" required><br><br>
				Subject<span style="color: red;">*</span><br>
				<input class="in" type="text" name="subject" placeholder="Enter Subject"><br><br>
				Message<span style="color: red;">*</span><br>
				<textarea class="in" name="message" placeholder="Type your message" style="height: 300px;"></textarea><br><br>
				<input class="qw" style="font-size: 16px; color: black;" type="submit" value="SEND">
			</form>
		</div>
		<br>
    </div>


<footer id="contact" class="container-fluid">
    <div class="container">

        <div class="row content-ro">
            <div class="col-lg-4 col-md-12 footer-contact">
                <h2>Contact Informations</h2>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="detail">
                    <p>Nerul, Navi Mumbai, <br> Maharashtra</p>                    
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="detail">
                        <p>prathameshchaskar@gmail.com<br> team@gmail.com</p>
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="detail">
                        <p>+91 1234567890 <br> +91 0987654321</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 footer-links">
                    <h2>Quick Links</h2>
                    <ul>
                        <a href="index.html"><li>Home</li></a>
                        <a href="#about"><li>About Us</li></a>
                        <a href="#gallery"><li>Gallery</li></a>
                        <a href="contact.php"><li>Contact Us</li></a>
                    </ul>
                </div>
            <div class="col-lg-4 col-md-12 footer-links2"> 
                    <h2>Team Leader</h2>
                    <ul>
                        <li>Prathamesh Chaskar</li>
                        <hr style="background-color:white;">
                    </ul>
                    <h2>Team Members</h2>
                    <ul>
                        <li>Shruti Rathod</li>
                        <li>Tejas Adhav</li>
                        <li>Pritam Nikalaje</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <p>Copyright © <a href="#">prathamesh.com</a> | All right reserved.</p>
                </div>
                <div class="col-lg-4 col-md-6 socila-link">
                    <ul>
                        <li><a><i class="fab fa-github"></i></a></li>
                        <li><a><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a><i class="fab fa-twitter"></i></a></li>
                        <li><a><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>