<?php

require_once("../model/product_model.php");

class ProductController extends Product
{
    public function givefilterProducts($categoryId, $collId)
    {
        $result = $this->filterProducts($categoryId, $collId);
        return $result;
    }

    public function giveAllgiveImages_ByProductId($productId)
    {
        $result = $this->getImages_ByProductId($productId);
        return $result;
    }
}

$prodCont_obj = new ProductController($conn);

////////////////////////////////////// Switch Status //////////////////////////////////////
$request = isset($_REQUEST["type"]) ? $_REQUEST["type"] : "";

switch ($request) {

    case 'filterProducts':

        $collId = $_POST["CollId"];
        $categoryId = $_POST["CategoryId"];

        $filterResult = $prodCont_obj->givefilterProducts($categoryId, $collId);

        if ($filterResult->num_rows > 0) {
?>

            <div class="row">
                <?php
                while ($row = $filterResult->fetch_assoc()) {

                    $productId = $row["product_id"];
                    $getImages = $prodCont_obj->giveImages_ByProductId($productId);
                    $imageArray = $getImages->fetch_assoc();

                    include_once("../model/stock_model.php");
                    $stock_obj = new Stock($conn);
                    $getStock = $stock_obj->giveStockInfo_ByProductId($productId);
                    $stockArray = $getStock->fetch_assoc();
                ?>
                    <div class="col-sm-6 col-md-4  col-lg-3 p-4">
                        <a href="viewItem.php?productId=<?php echo $productId; ?>" type="button" class="text-decoration-none text-dark">
                            <div class="card text-center card border-0 card_home">
                                <img style="height: 280px;" class="card-img-top zoom img-fluid" src="../image/pro_img/<?php echo $imageArray["img_name"] ?>" alt="">
                                <div class="card-body">
                                    <span class="productName">
                                        <?php echo $row["product_name"]; ?>
                                    </span>
                                    <span class="productName">
                                        <?php echo $stockArray["stock_sell_price"]; ?>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>

        <?php } else {
        ?>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-danger text-center">Product Not Found</h2>
                </div>
            </div>
<?php
        }
        break;
}
