<?php
ob_start();
session_start();
require "DB_conn.php";


if(isset($_POST['fullname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['bloodgroup']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['state']) && isset($_POST['town']) && isset($_POST['username']) && isset($_POST['password'])){
	if(!empty($_POST['fullname']) && !empty($_POST['gender']) && !empty($_POST['dob']) && !empty($_POST['bloodgroup']) && !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['state']) && !empty($_POST['username']) && !empty($_POST['password']) ){
		$user = $_POST['username'];
		$pw = $_POST['password'];
		$f_name = $_POST['fullname'];
		$birthday = $_POST['dob'];
		$sex = $_POST['gender'];
		$blood = $_POST['bloodgroup'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$town = $_POST['town'];
		$state = $_POST['state'];


		if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
			$sess=$_SESSION['sess_user_id'];
			$SQL="UPDATE donors SET username='".$user."',password='".$pw."',fullname='".$f_name."',dob='".$birthday."',sex='".$sex."',bloodgroup='".$blood."',mobile='".$mobile."',email='".$email."',town='".$town."',state='".$state."' WHERE id='".$sess."'";
		}else{
			$SQL = "INSERT INTO donors (username, password, fullname, dob, sex, bloodgroup, mobile, email, town, state) VALUES ('".$user."', '".$pw."', '".$f_name."', '".$birthday."', '".$sex."', '".$blood."', '".$mobile."', '".$email."', '".$town."', '".$state."')";
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

<!doctype html>
<html lang="en">

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
                            <img src="assets/images/logo.jpg" alt="" style="margin: -32px;padding: 25px;">
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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="register.php">Be a Donor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="find_blood.php">Find Donor</a>
                                        </li>
                                        <li class="nav-item">
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
		<span class="info2" style="left: 28%">DONOR REGISTRATION</span>

	<div class="col-12" style="overflow: auto; padding: 10% 14% 5% 15%;">
		<div class="col-12" style="text-align: left; padding: 5%; background-color: rgb(217, 219, 224);">
			<form action="register.php" method="post">
				Username<span style="color: red;">*</span><br>
				<input class="in" type="text" name="username" placeholder="Enter Username" required style="color: black;"><br><br>
				Password<span style="color: red;">*</span><br>
				<input class="in" type="password" name="password" placeholder="Password" required style="color: black;"><br><br>
				Fullname<span style="color: red;">*</span><br>
				<input class="in" type="text" name="fullname" placeholder="Enter Fullname" required style="color: black;"><br><br>
				Date Of Birth<span style="color: red;">*</span><br>
				<input class="in" type="date" name="dob" placeholder="dd/mm/yyyy" required style="color: rgb(95, 91, 91);" ><br><br>
				Gender<span style="color: red;">*</span><br>
				<input type="radio" name="gender" value="male" checked>Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other<br><br>
				Blood Group<span style="color: red;">*</span><br>
				<select name="bloodgroup" required>
						<option value="">Enter Blood Group</option> 
						<option value="A pos">A+</option>
						<option value="A neg">A-</option>
						<option value="B pos">B+</option>
						<option value="B neg">B-</option>
						<option value="O pos">O+</option>
						<option value="O neg">O-</option>
						<option value="AB pos">AB+</option>
						<option value="AB neg">AB-</option>
				</select><br><br>
				Mobile<span style="color: red;">*</span><br>
				<input class="in" type="text" name="mobile" placeholder="Enter Mobile No." pattern="[0-9]{10}" required style="color: black;"><br><br>
				Email<span style="color: red;">*</span><br>
				<input class="in" type="email" name="email" placeholder="Enter Your Email" required style="color: black;"><br><br>
				City<span style="color: red;">*</span><br>
				<input class="in" type="text" name="town" placeholder="Enter Town" style="color: black;"><br><br>
				State<span style="color: red;">*</span><br>
				<input class="in" type="text" name="state" placeholder="Enter State" required style="color: black;"><br><br>
				<input class="qw" style="font-size: 16px; color: white;" type="submit" value="SEND">
			</form>
		</div>
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
                        <p>prathameshchaskar@gmail.com <br> team@gmail.com</p>
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