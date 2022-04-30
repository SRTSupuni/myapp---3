<?php
include_once("../common/cartSession.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="../image/logo/logo1.png">

    <title>NALAKA STORES</title>

    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/DataTables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../resources/fontawesome/css/all.css">
    <link rel="stylesheet" href="../resources/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="../resources/animate.css/animate.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script> -->
    <script src="../resources/jquery/jquery-3.6.0.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="../resources/fancybox/jquery.fancybox.js"></script>
    <script src="../resources/sweetAlerts2/dist/sweetalert2.all.min.js"></script>
    <script src="../js/navbar.js"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                <a href="#" class="logo1 navbar-brand text-uppercase font-weight-bold">Nalaka <span>Stores.</span></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="home.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="aboutUs.php" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                        <li class="nav-item"><a href="contactus.php" class="nav-link text-uppercase font-weight-bold">Contact Us</a></li>
                        <li class="nav-item"><a href="dashboard.php" class="nav-link text-uppercase font-weight-bold">profile</a></li>
                        <li class="nav-item"><a href="home.php#newIn" class="nav-link text-uppercase font-weight-bold">New In</a></li>
                        <li class="nav-item"><a href="home.php#collection" class="nav-link text-uppercase font-weight-bold">Collection</a></li>
                        <div>
                            <span class="pl-2 " style="color:#808080;">
                                <span style="font-size: larger"><i class="fas fa-user-circle"></i></span>

                                <?php if (isset($_SESSION["customer"])) { ?>

                                    <span>Hi...! <?php echo $_SESSION["customer"]["userFname"]; ?></span> &nbsp;
                                    <a id="logoutBtn" href="../controller/login_controller.php?type=logout" class="button btn border-0 text-dark text-uppercase text-decoration-none navmenu" style="color:#808080;">
                                        <i class="fas fa-sign-out"></i> Logout </a>

                                <?php } else { ?>

                                    <span>Hi...! User</span> &nbsp;
                                    <a id="loginBtn" href="login.php" class="button btn border-0 text-dark text-uppercase text-decoration-none navmenu" style="color:#808080;">
                                        <i class="fas fa-sign-in"></i> Login </a>

                                <?php } ?>
                            </span>&nbsp;&nbsp;
                        </div>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="cart.php" style="font-size: large">
                                <i class="fas fa-shopping-cart"></i>
                                <?php $count = isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : "0"; ?>
                                <span class="badge badge-notify text-dark">
                                    <?php echo $count; ?>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>