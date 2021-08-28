<?php 
include 'backend/database.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['SUBMIT'])){
        $name             =  $_POST['name'];
        $mobile           =  $_POST['mobile'];
        $date_birth       =  $_POST['date_birth'];
        $address          =  $_POST['address'];
        $father           =  $_POST['father'];
        $district         =  $_POST['district'];
        $gender           =  $_POST['gender'];
        $state            =  $_POST['state'];
         
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sqli = "INSERT INTO crud(name,mobile,date_birth,address,father,district,gender,state) VALUES('$name','$mobile','$date_birth','$address','$father','$district','gender','state')";

        if(mysqli_query($conn, $sqli)){
            header("Location: welcome.php");
        } else{
            echo "ERROR: Could not able to execute $sqli. " . mysqli_error($conn);
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
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mail">Mail us</a>
                  </li>
                </ul>
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"></button>
                  <div id="myDropdown" class="dropdown-content">
                    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                    <a href="logout.php">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
    </section>


    <!--Banner section code start-->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-inner-right">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form">
                                <h1>ADMISSION FORM</h1>
                                <p>ENTER THE FOLLOWING DETAILS</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Name Of Applicant :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Mobile No :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile">
                                      </div>
                                    </div> 
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Date Of Birth :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-calendar-alt"></i>
                                        <input type="date" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date_birth">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Address :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Father Name :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="father">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">District :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="district">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">Gender :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-user-friends"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender">
                                      </div>
                                    </div>
                                    <div class="col-md-6 paddin">
                                        <label for="exampleInputEmail1" class="form-label">State :</label>
                                      <div class="agileits1">
                                        <i class="fas fa-flag-usa"></i>
                                        <input type="text" class="control" id="exampleInputEmail1" aria-describedby="emailHelp" name="state">
                                      </div>
                                    </div>
                                    <div class="btn1">
                                        <input type="submit" value="SUBMIT" name="SUBMIT"class="btn11"><br>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!--About Us code start-->
    <section class="About-Us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>About Us</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 imge">
                            <img src="img/ab1.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="inner-img">
                                <img src="img/ab2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-right">
                        <h2>WELCOME TO OUR UNIVERSITY</h2>
                        <button>Read More</button>
                        <button>Get In Touch</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--sATISFIED SECTION CODE START-->
    <div class="section" id="counter">
      <div class="counter-up">
        <div class="content">
          <div class="box">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="counter">724</div>
            <div class="text">FOREIGN FOLLOWERS</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-book"></i></div>
            <div class="counter">508</div>
            <div class="text">CLASSES COMPLETE</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-trophy"></i></div>
            <div class="counter">436</div>
            <div class="text">STUDENTS ENROLLED</div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="counter">120</div>
            <div class="text">CERTIFIED TEACHERS</div>
          </div>
        </div>
      </div>
    </div>



    <!--Our Service section code start-->
    <section class="our-service" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Our Services</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-content">
                        <i class="fas fa-graduation-cap"></i>
                        <h4>SCHOLARSHIP FACILITY</h4>
                        <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-content">
                        <h4>SKILLED LECTURERS</h4>
                        <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-content">
                        <i class="fas fa-graduation-cap"></i>
                        <h4>BOOK LIBRARY & STORE</h4>
                        <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Gallery section code start-->
    <section class="gallery-sectuion" id="gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Our Gallery</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="padding">
                
            </div>
            <div class="row">
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g1.jpg" alt="Avatar" class="image" id="myImg">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g1.jpg"target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g2.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g2.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g3.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g3.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g4.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g4.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g5.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g5.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g6.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g6.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g7.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g7.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g8.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g8.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g9.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g9.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g10.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g10.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g11.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g11.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pad">
                    <div class="container12">
                          <img src="img/g12.jpg" alt="Avatar" class="image">
                        <div class="overlay2">
                            <div class="text2">SCHOLARLY<br><a href="img/g12.jpg" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--lecture section code start-->
    <section class="lecture-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Our Skilled Lecturers</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t1.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t2.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t3.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t4.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t5.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container123">
                      <img src="img/t6.jpg" alt="Avatar" class="image123">
                      <div class="overlay123">
                        <div class="text123">
                            <p>Professor</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <h2>Victoria</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Mail us section start-->
    <section class="mail-us" id="mail">
        <div class="container">
            <div class="raw">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Mail Us</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="inner1-section">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>Mirpur 1, 13B/B</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inner1-section">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>+880-1822205666</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inner1-section">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>fnatic@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contect section code start-->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Get In Touch</h1>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="contact-text">
                    <div class="row">
                           <div class="col-md-6">
                            <div class="contact-form">
                               <form>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Father Name*
                                  </label>
                                  <div class="agileits-main1">
                                    <i class="fas fa-user"></i>
                                    <input type="password" class="control1" id="exampleInputPassword1">
                                  </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gender*
                                  </label>
                                  <div class="agileits-main1">
                                    <i class="fas fa-user-friends"></i>
                                    <input type="password" class="control1" id="exampleInputPassword1">
                                  </div>
                                </div>
                              </form>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                               <form>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Father Name*
                                  </label>
                                  <div class="agileits-main1">
                                    <i class="fas fa-user"></i>
                                    <input type="password" class="control1" id="exampleInputPassword1">
                                  </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gender*
                                  </label>
                                  <div class="agileits-main1">
                                    <i class="fas fa-user-friends"></i>
                                    <input type="password" class="control1" id="exampleInputPassword1">
                                  </div>
                                </div>
                              </form>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-text-area">
                                <label for="exampleInputPassword1" class="form-label">Message*
                                  </label>
                                  <div class="agileits-main1"><i class="fa fa-envelope"></i>
                                <textarea class="control1" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea></div>
                            </div>
                            <div class="form-group text-center">
                                <a href="#" class="btn5">send</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.32642571744!2d90.36792561457227!3d23.80698878456154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d68274f4f1%3A0x622c496cf5d52dad!2s1%20Mirpur%20Rd%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1627315078862!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  $(document).off('focusin.modal');
  </script>

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