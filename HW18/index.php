<?php
if(isset($_GET['page'])){
	$page=$_GET['page'].".php";
}
else{
	$page="home.php";
}
?>
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
                                            <?php
												include("navigation.php");
											?>
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

        <!-- ****** Offer Area Start ****** -->
			<?php
				include($page);
			?>

    </div>
    <!-- /.wrapper end -->
</body>

</html>
