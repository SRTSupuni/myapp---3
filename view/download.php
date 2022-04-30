<?php
session_start();

include_once("../common/download_rediect.php");

$response = isset($_GET["response"]) ? $_GET["response"] : "";

$productId = $_GET["res_status"];

include_once("../model/downloadmodel.php");
$product_obj = new Download($conn);

$prodResult = $product_obj->givelink_ByProductId($productId);
$prodArray = $prodResult->fetch_assoc();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="../image/logo/logo.svg">

    <title>NALAKA STORES</title>

    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/DataTables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../resources/fontawesome/css/all.css">
    <link rel="stylesheet" href="../resources/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="../resources/animate.css/animate.min.css">
    <link rel="stylesheet" href="../css/custom.css">


    <script src="../resources/jquery/jquery-3.6.0.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="../resources/fancybox/jquery.fancybox.js"></script>
    <script src="../resources/sweetAlerts2/dist/sweetalert2.all.min.js"></script>
    <script src="../js/download.js"></script>

</head>

<body class="bodymp4">
    ss<video id="background-video" autoplay loop muted>

        <source src="../image/background/shopping.mp4" type="video/mp4">
    </video>
    <div class="container p-5">
        <div class="card bg-light text-dark border-success mb-3 text-center">
            <div class="card-header">
                <h1 class="text-success"> Payment is Successful !!</h1>
            </div>
            <div class="card-body">
                <h5 class="card-text font-weight-bolder mb-4">You can download your file here</h5>

                <input type="hidden" name="productId" id="productId" value="<?php echo $prodArray["product_productId"] ?>">

                <a href="<?php echo $prodArray["download_link"] ?>" download class="btn btn-info download navmenu" id="download">Download</a>
            </div>
            <div class="card-footer  text-danger " id="dvCountDown">
                You will be redirected after <span id="lblCount"></span>&nbsp;seconds.
            </div>
        </div>
    </div>
    <!-- <div class="color-overlay"></div> -->
</body>

</html>