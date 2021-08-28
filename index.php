<?php 

include 'backend/database.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>scholarly | Home</title>
</head>
<body>
	<section class="header-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.html"><i class="fab fa-leanpub"></i>SCHOLARLY</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    
                  </li>
                </ul>
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"></button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="admin.php">Admin</a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
    </section>
    <section class="login">
    	<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<form action="" method="POST" class="login-email">
						<p class="login-text" style="font-size: 2rem; font-weight: 800; color: #fff;">Login</p>
						<div class="agileits all">
							<i class="fas fa-user"></i>
							<input type="email" class="in" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
						</div>
						<div class="agileits all">
							<i class="fas fa-unlock-alt"></i>
							<input type="password" class="in" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
						</div>
							<button name="submit" class="btn">Login</button>
						<p class="login-register-text" style="color: #fff;">Don't have an account? <a href="register.php">Register Here</a></p>
					</form>
				</div>
			</div>
		</div>
    </section>

    <section class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="top-footer-heading">
                        <h3>About Us</h3>
                    </div>
                    <div class="background">
                        
                    </div>
                    <div class="site1">
                        <a class="brand" href="index.html"><i class="fab fa-leanpub"></i>SCHOLARLY</a>
                        <p>This is scholarly admission website. Which is developed by team Fnatic. Member are Jack Marma, Arifur Rahaman, Marufa Pohely</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="top-footer-heading">
                        <h3>NAVIGATION</h3>
                    </div>
                    <div class="background">

                    </div>
                    <div class="list-container">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Home</a></li>
                            <li><a href="#about"><i class="fas fa-angle-double-right"></i>About us</a></li>
                            <li><a href="#service"><i class="fas fa-angle-double-right"></i>Service</a></li>
                            <li><a href="#team"><i class="fas fa-angle-double-right"></i>Team</a></li>
                            <li><a href="#gallery"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                            <li><a href="#mail"><i class="fas fa-angle-double-right"></i>Mail us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="top-footer-heading">
                        <h3>OTHERS</h3>
                    </div>
                    <div class="background">

                    </div>
                    <div class="list-container">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Media</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Mobile Apps</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="top-footer-heading">
                        <h3>CONTACT US</h3>
                    </div>
                    <div class="background">

                    </div>
                    <div class="list-container">
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Mirpue 1, 13B/B</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>+880-1822205666</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>fnatic@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Section Start-->
    <footer class="footer">
        <div class="container">
            <div class="raw">
                <div class="col-md-12">
                    <div class="footer-inner">
                        <p>© - 2021 Scholarly. All rights reserved | Design by  team Fnatic. Developed By Fnatic Team</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<!-- Optional JavaScript; choose one of the two! -->
    <script src="https://kit.fontawesome.com/082fa4ff5b.js" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>