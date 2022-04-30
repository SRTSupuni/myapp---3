<?php
if (!isset($_SESSION["productId"])) {
?>
    <script>
        window.location = "http://localhost/nalaka_stores/view/home.php";
    </script>
<?php
}
