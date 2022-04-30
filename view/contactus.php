<?php
include_once("../view/navbar.php");

$response = isset($_GET["response"]) ? $_GET["response"] : "";
$status = isset($_GET["res_status"]) ? $_GET["res_status"] : "";
?>
<!-- Top Content -->
<div class="container-fluid">
    <!-- Top Banner-->
    <div class="row">
        <div class="col-sm-12 text-center p-5" style="background-image:url('../image/background/black.png');">
            <p class="text-uppercase  text-white font-weight-lighter mt-5" style=" font-family: montserrat,serif; font-size: 40px;">Contact Us</p>
            <p class="text-uppercase pt-3 pb-0 m-auto text-white font-weight-lighter ">
                <a class="text-decoration-none" style=" font-family: montserrat,serif; color:#db9200" href="home.php">Home</a> &rarr; Contact Us
            </p>
        </div>
    </div>
    <!-- Top Banner End -->

    <!-- Response Alert -->
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <?php if ($status == "1") { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 style="color: green;"><?php echo $response; ?></h3>
                </div>
            <?php } else if ($status == "0") { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 style="color: red;"><?php echo $response; ?></h3>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Response Alert End -->
</div>
<div class="contact row">
    <div class="container">
        <!-- Send us Form Start -->
        <div class="row">
            <div class="col-md-6 contactBg mr-5">
                <h1 class="contactEmail text-uppercase text-center p-4">SEND US AN EMAIL</h1>
                <div>
                    <form enctype="multipart/form-data" method="POST" action="../controller/faq_controller.php?type=addFAQ">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control bgcolor" value="" placeholder="Name*" id="cusName" name="cusName" required>
                            </div>
                            <div class="col-lg-6 mt-2 mt-lg-0">
                                <input type="email" class="form-control bgcolor" value="" placeholder="Email*" id="cusEmail" name="cusEmail" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <textarea class="form-control bgcolor" rows="5" placeholder="Type message.." name="msg" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="buttonlogin btn btn-block border-0 text-white text-uppercase float-right navmenu">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 contactBg text-white">

                <h3 class="mt-5 ml-5"><i class="fas fa-map-marked-alt "></i> OUR ADDRESS</h3>
                <div class=" ml-5 pl-5">
                    <p>
                        100/1, Kadawala Road,<br>
                        Rathmalana.<br>
                        Sri lanka
                    </p>
                </div>

                <h3 class="mt-5 ml-5"> <i class="fas fa-phone-volume "></i> OUR PHONES</h3>
                <div class="ml-5 pl-5">
                    <p>
                        +94 762 689 105<br>
                        +94 718 341 112
                    </p>
                </div>
                <h3 class="mt-5 ml-5"> <i class="fas fa-at "></i> EMAIL ADDRESS</h3>
                <div class="ml-5 pl-5">
                    <p>
                        support@nalakastores.lk<br>
                        info@nalakastores.lk
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Content End -->

<script>
    document.title = "NALAKA STORES | Contact Us";
</script>

<?php
include_once("../view/footer.php");
?>