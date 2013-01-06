<?php
include "auth_logic.php";
$l = new auth_logic();
$l->logout();

echo"<script>alert('anda sudah log out');</script>";
echo "<meta http-equiv='refresh' content='0;URL=../view/login.php'>";
?>