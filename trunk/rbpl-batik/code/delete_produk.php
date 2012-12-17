<?php
include "../code/login_proxy.php";
include "../code/config.php";

$id=$_GET['id'];

$query = "DELETE from produk WHERE id_produk = '$id' " ;
 $result = mysql_query($query);

 if ($result) {
 		header('Location: ../view/produk.php');
	echo "<h4> delete data success </h4>";
}
?>


