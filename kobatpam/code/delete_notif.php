<?php
include "../code/login_proxy.php";
include "../code/config.php";

$id=$_GET['id'];

$query = "DELETE from `notif_ud` WHERE id_notif_1 = '$id' " ;
 $result = mysql_query($query);

 if ($result) {
 		header('Location: ../view/notifikasi.php');
	echo "<h4> delete data success </h4>";
}
?>


