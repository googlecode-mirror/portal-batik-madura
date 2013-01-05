<?php
include "koneksi.php";
class F{
	
	function tampil(){
		$max=5;
		if(!isset($_GET['page'])){
		$pg = 1;
		} else {
		$pg = $_GET['page'];
		}
		$query=mysql_query("SELECT * FROM pengrajin");  
		$row=mysql_fetch_row($query);
		$hal=ceil(mysql_num_rows($query)/$max);

		if(!$row)echo "belum terdapat pengs";  
		else  
		{  
			$pg = ($pg-1)*$max;
			$query=mysql_query("SELECT * FROM pengrajin LIMIT $pg, $max");
			$row=mysql_fetch_row($query);
				echo "<div align=center class=style2>";
				echo "<table border=5>";  
				echo "<tr>"; 
				echo "<td>ID</td>";  
				echo "<td>Nama Usaha</td>";
				echo "<td>No Hp</td>";
				echo "<td>Alamat</td>"; 
				echo "<td>Telepon</td>"; 
				echo "<td>Profil Usaha</td>";
				echo "<td>Foto</td>"; 				
				echo "</tr>";  
			do{   
				list($id_dagang,$nama_usaha,$alamat_usaha,$telp_usaha,$profil_usaha,$gmbar_usaha)=$row;  
				echo "<tr>";		
				echo "<td>$id_dagang</td>";  
				echo "<td>$nama_usaha</td>";
				echo "<td>$alamat_usaha</td>";
				echo "<td>$telp_usaha</td>";
				echo "<td>$profil_usaha</td>";
				echo "<td>$gmbar_usaha</td>";
				echo "</tr>";  
			}while($row=mysql_fetch_row($query)); 
	}
	}
	function paging(){
		$max=5;
		if(!isset($_GET['page'])){
		$pg = 1;
		} else {
		$pg = $_GET['page'];
		}
		$query=mysql_query("SELECT * FROM pengrajin");  
		$row=mysql_fetch_row($query);
		$hal=ceil(mysql_num_rows($query)/$max);
		
		for($i=1; $i<=$hal; $i++){
			print '<li><a href="http://localhost/gemastik/tampilkan.php?page='.$i.'">'.$i.'</a></li>';
	}
	}
}