$(document).ready(function () {
  $("#download").click(function () {
    var seconds = 10;
    $("#dvCountDown").show();
    $("#lblCount").html(seconds);
    setInterval(function () {
      seconds--;
      $("#lblCount").html(seconds);
      if (seconds == 0) {
        $("#dvCountDown").hide();
        window.location = "http://localhost/nalaka_stores/view/home.php";
      }
    }, 1000);
  });
});
