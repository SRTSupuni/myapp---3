<?php
include_once("navbar.php");
?>
<!-- image carousel-->
<div class="container-fluid ">

    <?php
    $response = isset($_GET["response"]) ? $_GET["response"] : "";

    if ($response != "") {
    ?>
        <script>
            Swal.fire("Thank You !!!", "<?php echo $response; ?>", "success");
        </script>
    <?php
    }
    ?>

    <div class="row">
        <div class="col-sm-12 p-0">
            <!-- carousel code -->
            <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 100vh" role="listbox">
                    <!-- first slide -->
                    <div class="carousel-item  active">
                        <img src="../image/slider/Neon_text_effect.png" alt="Los Angeles" class="w-100">
                        <div class="carousel-caption d-md-block text-dark text-left p-0">
                            <div class="home-content mb-md-5">
                                <div id="sentence" class="sentence font-weight-bold">online shopping from a great selection store of</span>
                                    <span id="feature-text"></span>
                                    <span class="input-cursor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second slide -->
                    <div class="carousel-item">
                        <img src="../image/slider/bookstore.png" alt="Los Angeles" class="w-100">
                    </div>
                    <!-- third slide -->
                    <div class="carousel-item">
                        <img src="../image/slider/movie1.png" alt="Los Angeles" class="w-100">
                    </div>
                </div>
                <!-- controls -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- image carousel end -->

<!-- content -->
<div class="container-fluid">
    <!--    banner-->
    <div class="row">
        <div class="col-sm-12 text-center p-5" style="background-image:url('../image/background/black.png');">

        </div>
    </div>
    <!--    banner end -->
    <!--    collection-->
    <div class="row" id="collection">
        <div class="col-md-6  p-5">
            <div class="card">
                <div class="card-body navmenu" style="background-image: url('../image/background/movie.jpg'); height:325px;background-repeat: no-repeat; background-size: contain">
                    <h6 class="card-title text-uppercase pt-5 font-weight-lighter text-white text-right" style="font-size: 40px;"><strong>Movie</strong> <br>Collection</h6>
                    <a href="productFilter.php?collId=1" class="button btn btn-lg border-0 ml-2 text-dark text-uppercase float-right">Discover</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <div class="card ">
                <div class="card-body navmenu" style="background-image: url('../image/background/books.jpg'); height: 325px;   background-repeat: no-repeat; background-size: contain">
                    <h5 class="card-title text-uppercase pt-5 pr-5 mr-5 font-weight-lighter text-white text-left " style="font-size: 40px;">
                        <strong>Book</strong><br> Collection
                    </h5>
                    <div class="pr-5">
                        <a href="productFilter.php?collId=2" class=" button btn btn-lg border-0 mr-5 text-dark text-uppercase float-left">Discover</a>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
<!--    collection end-->


<!-- new arrivals -->
<div class="container-fluid" id="newIn">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-uppercase  font-weight-bold text-dark text-center" style="font-size: 50px; font-family: montserrat,serif"> NEW ARRIVALS</h1>
            <br>
        </div>
    </div>
    <div class="row p-5 ml-5 mr-5">
        <?php
        include_once("../model/product_model.php");
        $product_obj = new Product($conn);

        $getMaleProducts = $product_obj->giveNewMovieProducts();
        while ($ProductArray = $getMaleProducts->fetch_assoc()) {

            $productId = $ProductArray["product_id"];
            $getImages = $product_obj->giveImages_ByProductId($productId);
            $imageArray = $getImages->fetch_assoc();

            include_once("../model/stock_model.php");
            $stock_obj = new Stock($conn);
            $getStock = $stock_obj->giveStockInfo_ByProductId($productId);
            $stockArray = $getStock->fetch_assoc();

        ?>

            <div class="col-sm-6 col-lg-3">
                <a href="viewItem.php?productId=<?php echo $productId; ?>" type="button" class="text-decoration-none text-dark w-100">
                    <div class="card text-center border-0 card_home ">
                        <img style="height: 280px;" class="card-img-top zoom img-fluid" src="../image/pro_img/<?php echo $imageArray["img_name"] ?>" alt="">
                        <div class="card-body ">
                            <span class="productName">
                                <?php echo $ProductArray["product_name"]; ?>
                            </span>
                            <span class="productName">
                                <?php echo $stockArray["stock_sell_price"]; ?>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

        <?php
        }
        ?>
    </div>

    <div class="row p-5 ml-5 mr-5">

        <?php
        include_once("../model/product_model.php");
        $product_obj = new Product($conn);

        $getFemaleProducts = $product_obj->giveNewBookProducts();
        while ($ProductArray = $getFemaleProducts->fetch_assoc()) {

            $productId = $ProductArray["product_id"];
            $getImages = $product_obj->giveImages_ByProductId($productId);
            $imageArray = $getImages->fetch_assoc();

            include_once("../model/stock_model.php");
            $stock_obj = new Stock($conn);
            $getStock = $stock_obj->giveStockInfo_ByProductId($productId);
            $stockArray = $getStock->fetch_assoc();
        ?>

            <div class="col-sm-6 col-lg-3">
                <a href="viewItem.php?productId=<?php echo $productId; ?>" type="button" class="text-decoration-none text-dark w-100">
                    <div class="card  text-center  border-0 card_home">
                        <img style="height: 280px;" class="card-img-top zoom img-fluid" src="../image/pro_img/<?php echo $imageArray["img_name"] ?>" alt="">
                        <div class="card-body">
                            <span class="productName">
                                <?php echo $ProductArray["product_name"]; ?>
                            </span>
                            <span class="productName">
                                <?php echo $stockArray["stock_sell_price"]; ?>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

        <?php
        }
        ?>

    </div>

</div>
<!-- new arrivals end -->
<!--content end -->


<script>
    document.title = "NALAKA STORES | Home";
</script>
<?php
include_once("footer.php");
?>