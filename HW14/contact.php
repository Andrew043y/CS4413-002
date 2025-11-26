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
                                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
								if(isset($_GET['msg']) && $_GET['msg']=="Error")
									echo '<div class="alert alert-danger">You must fill out the contact form first!</div>';
							?>
                            <h3>Please Fill out the Contact Form:</h3>
							<?php
								if(!isset($_POST['submit'])){
							echo '<form method="post" action="">';
							echo '<div class="form-group" id="fnGroup">';
							echo '<label class="control-label"> First Name</label>';
							echo '<input type="text" id = "firstname" name="firstName" class = "form-control">';
							echo '<span class="help-block" id="fnFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="lnGroup">';
							echo '<label class="control-label"> Last Name</label>';
							echo '<input type="text" id = "lastname" name="lastName" class = "form-control">';
							echo '<span class="help-block" id="lnFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="emailGroup">';
							echo '<label class="control-label"> Email</label>';
							echo '<input type="text" id = "email" name="email" class = "form-control">';
							echo '<span class="help-block" id="emailFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="phoneGroup">';
							echo '<label class="control-label"> Phone Number</label>';
							echo '<input type="text" id = "phone" name="phone" class = "form-control">';
							echo '<span class="help-block" id="phoneFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="userGroup">';
							echo '<label class="control-label"> User Name</label>';
							echo '<input type="text" id = "username" name="userName" class = "form-control">';
							echo '<span class="help-block" id="userFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="pwGroup">';
							echo '<label class="control-label"> Password</label>';
							echo '<input type="text" id = "password" name="password" class = "form-control">';
							echo '<span class="help-block" id="pwFeedback"></span>';
							echo '</div>';
							echo '<div class="form-group" id="commentGroup">';
							echo '<label class="control-label"> Comment</label>';
							echo '<input type="text" id = "comment" name="comment" class = "form-control">';
							echo '<span class="help-block" id="commentFeedback"></span>';
							echo '</div>';
							echo '<hr>';
							echo '<div class="form-group">';
							echo '<button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>';
							echo '</div>';
							echo '</form> ';
								}
							else {
								$firstName=$_POST['firstName'];
								$lastName=$_POST['lastName'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$userName=$_POST['userName'];
								$password=$_POST['password'];
								$comment=$_POST['comment'];
								
								if(empty($_POST['firstName']) ||  empty($_POST['lastName']) ||  empty($_POST['email']) ||  empty($_POST['phone']) ||  empty($_POST['userName']) ||  empty($_POST['password']) ||  empty($_POST['comment'])){
									header("Location: contact.php?msg=Error");
								}
								else{
//									header("Location: contact.php");
									echo '<h3>Contact Form Data:</h3>';
									echo '<div>First Name: '.$firstName.'</div>';
									echo '<div>Last Name: '.$lastName.'</div>';
									echo '<div>Email: '.$email.'</div>';
									echo '<div>Phone Number: '.$phone.'</div>';
									echo '<div>User Name: '.$userName.'</div>';
									echo '<div>Password: '.$password.'</div>';
									echo '<div>Comment: '.$comment.'</div>';
								}
							}
							?>
                            <a href="contact.html" class="btn karl-btn mt-30" target="_top">Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.wrapper end -->
</body>

</html>
<!--script src = "assets/js/validate.js"></script>-->
