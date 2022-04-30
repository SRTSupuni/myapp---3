<?php
session_start();

if (isset($_SESSION["customer"])) {
    header("Location:view/dashboard.php");
} else {
    header("Location:http://localhost/nalaka_stores/view/home.php");
}
