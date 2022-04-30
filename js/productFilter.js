$(document).ready(function () {
  let CategoryId = $("input[name=AllCat]:checked").val();
  let CollId = $("#collId").val();

  $.ajax({
    url: "../controller/product_controller.php?type=filterProducts",
    type: "POST",
    cache: false,
    data: {
      CategoryId: CategoryId,
      CollId: CollId,
    },
    success: function (res) {
      $("#content").html(res);
    },
    error: function () {
      console.log("error");
    },
  });

  $("input[name=AllTypCol], input[name=AllCat]").on("change", function (e) {
    let CategoryId = $("input[name=AllCat]:checked").val();
    let CollId = $("#collId").val();

    $.ajax({
      url: "../controller/product_controller.php?type=filterProducts",
      type: "POST",
      cache: false,
      data: {
        CategoryId: CategoryId,
        CollId: CollId,
      },
      success: function (res) {
        $("#content").html(res);
      },
      error: function () {
        console.log("error");
      },
    });
  });
});
