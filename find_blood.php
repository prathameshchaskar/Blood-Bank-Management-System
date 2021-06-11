<?php
ob_start();
session_start();
require "DB_conn.php";
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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <script src="js/script.js"></script>
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
                                        <li class="nav-item ">
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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="find_blood.php"> Find Donor</a>
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
		<?php 
			if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		?>
		</ul>
	</div>
	<span class="info2" style="left: 39%">FIND BLOOD</span>
</div>
	<div style="margin: 0px;padding: 10% 8% 5% 17%;text-align: center;">
		<div class="col-11" style="background-color: rgba(82, 127, 99,0.5); padding: 0">
			<div style="background-color: rgb(79, 212, 206);overflow: auto;width: 100%; padding: 5px;">
				<form>
					<label  ><p style="font-size: 20px; color: black;">Select your blood group:</p></label>
					<select name="bloodgroup" onchange="showUser(this.value)" id="sel">
						<option value="">Enter Blood Group</option>
						<option value="A pos">A+</option>
						<option value="A neg">A-</option>
						<option value="B pos">B+</option>
						<option value="B neg">B-</option>
						<option value="O pos">O+</option>
						<option value="O neg">O-</option>
						<option value="AB pos">AB+</option>
						<option value="AB neg">AB-</option>
					</select>
				</form>
			</div>
			<div id="txtHint" style="padding: 5% 0 5% 0; width: 100%; overflow: auto;"></div>
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


<script>
	window.onload=function(){
		var val='<?php echo $a;?>';
		var sel = document.getElementById('sel');
		var opts=sel.options;
		for (var opt, j = 0; opt = opts[j]; j++) {
			if (opt.value == val) {
				sel.selectedIndex = j;
				break;
			}
		} 
		var va='<?php echo $a;?>';
		showUser(va);
	}
</script>
</body>
</html>