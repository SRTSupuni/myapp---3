$(document).ready(function () {
  $(".remove").on("click", function (e) {
    e.preventDefault();

    let stockId = $(this).parents("tr").find(".itemId").val();

    $.ajax({
      url: "../common/cartSession.php?type=removeItem",
      type: "POST",
      data: { itemId: stockId },
      success: function (res) {
        $.ajax({
          url: "../controller/cart_controller.php?type=removeItem",
          type: "POST",
          data: { itemId: stockId },
          success: function (res) {
            location.reload();
          },
          error: function () {
            console.log("Error");
          },
        });
      },
      error: function () {
        console.log("Error");
      },
    });
  });
});
