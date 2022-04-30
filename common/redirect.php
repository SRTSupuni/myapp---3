<?php
if (!isset($_SESSION["customer"])) {
?>
    <script>
        window.location = "http://localhost/nalaka_stores/view/login.php";
    </script>
<?php
}
