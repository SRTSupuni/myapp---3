<?php
include_once("navbar.php");

$collId = isset($_GET["collId"]) ? $_GET["collId"] : "";

include_once("../model/product_model.php");
$product_obj = new Product($conn);


$categories = $product_obj->giveAll_CategoriesByCollId($collId);

?>
<!-- content -->
<div class="container-fluid">

    <input id="collId" type="hidden" value="<?php echo $collId; ?>">

    <!--  Top  Banner-->
    <div class="row">
        <div class="col-md-12 text-center p-5 pb-5" style="background-image:url('../image/background/black.png');">
            <p class="text-uppercase p-2 mt-5 text-white font-weight-lighter" style=" font-family: montserrat,serif; font-size: 40px;">Collections</p>
            <p class="text-uppercase pb-0 m-auto text-white font-weight-lighter "><a class="text-decoration-none" style=" font-family: montserrat,serif; color:#db9200" href="home.php">Home</a> &rarr;Collection</p>
        </div>
    </div>
    <!--  Top Banner End -->

    <div class="row mt-3">
        <!-- Filter Area    -->
        <div class="col-sm-12 col-md-3 text-dark">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-2 pl-3">

                        <div class="col-sm-4 col-md-12">
                            <label class="control-label text-uppercase font-weight-bold">Category</label>
                            <br>
                            <input type="radio" name="AllCat" checked value="category_categoryId">
                            <label for="AllCat">ALL</label><br>
                            <?php while ($categoriesArray = $categories->fetch_assoc()) { ?>
                                <input type="radio" name="AllCat" value="<?php echo $categoriesArray["category_id"]; ?>">
                                <label class="text-uppercase"><?php echo $categoriesArray["category_name"]; ?></label><br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Filter Area End -->

        <!-- View Content -->
        <div class="col col-md-9 text-dark" id="content">

        </div>
        <!-- View Content End     -->
    </div>

</div>
<!-- content end -->

<script>
    document.title = "NALAKA STORES | Product Filters";
</script>
<script src="../js/productFilter.js"></script>
<?php
include_once("footer.php");
?>