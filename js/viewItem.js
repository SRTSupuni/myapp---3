$(document).ready(function () {
  /////////////////////////// Fancy Add //////////////////////
  $(".full img").on("click", function (e) {
    let MainImgUrl = $(this).attr("src");
    $.fancybox.open(MainImgUrl);
  });

  $("#addToCartForm").on("submit", function (e) {
    let stockId = $("#stockId").val();

    $.ajax({
      url: "../controller/cart_controller.php?type=addItem",
      type: "POST",
      cache: false,
      data: { stockId: stockId },
      success: function (res) {
        if (res != "error") {
          if (res != "error") {
            if (res.stock_count > 0) {
              $("#setPrice").html(": " + res.stock_sell_price);
              $("#addToCart").prop("disabled", false);
              $("#productPrice").val(res.stock_sell_price);
              $("#stockId").val(res.stock_id);
            } else {
              $("#setPrice").html(": Not Enough Stock");
              $("#addToCart").prop("disabled", true);
              $("#productPrice").val("");
              $("#stockId").val("");
            }
          } else {
            $("#setPrice").html(": Price Not Found");
            $("#addToCart").prop("disabled", true);
            $("#productPrice").val("");
            $("#stockId").val("");
          }
        }
      },
      error: function () {
        console.log("error");
      },
    });
  });
});
