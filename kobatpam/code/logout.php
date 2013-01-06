<?php
session_start();
session_destroy();
header('location:../view/home_utama.php');
?>