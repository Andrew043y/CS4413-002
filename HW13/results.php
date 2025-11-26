<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Andrew's homepage.</title>
	<!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="assets/css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper" style="background-image: url(assets/images/UTSABackground.jpg)">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="assets/images/UTSA_img.jpg" alt="UTSA Image" width="300" height="150" title="UTSA Image"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-center collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="work.html">Work</a></li>
                                            <li class="nav-item"><a class="nav-link" href="school.html">School</a></li>
                                            <li class="nav-item"><a class="nav-link" href="interests.html">Interests</a></li>
                                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

		<div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-100 col-md-20 col-lg-12">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <?php
							if(isset($_GET['submit']) && $_GET['submit']=="submit"){
								$firstName=$_GET['firstName'];
								$lastName=$_GET['lastName'];
								$email=$_GET['email'];
								$phone=$_GET['phone'];
								$userName=$_GET['userName'];
								$password=$_GET['password'];
								$comment=$_GET['comment'];
								
								echo '<h3>Contact Form Data:</h3>';
								echo '<div>First Name: '.$firstName.'</div>';
								echo '<div>First Name: '.$lastName.'</div>';
								echo '<div>First Name: '.$email.'</div>';
								echo '<div>First Name: '.$phone.'</div>';
								echo '<div>First Name: '.$userName.'</div>';
								echo '<div>First Name: '.$password.'</div>';
								echo '<div>First Name: '.$comment.'</div>';
								
							}
							else{
								header("Location:contact.php?msg=Error");
							}
							?>
							
                            <a href="results.php" class="btn karl-btn mt-30" target="_top">Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.wrapper end -->
</body>

</html>
<script src = "assets/js/validate.js"></script>
