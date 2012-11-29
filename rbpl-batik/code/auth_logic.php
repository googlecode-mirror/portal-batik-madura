<?php
Class auth_logic {

	function  __construct()  {
        session_start();       
                      }
	
	function login ($usern,$passw){

	$query = "SELECT * FROM pengrajin WHERE username='$usern'";
	$hasil = mysql_query($query) or die ("Error");
	$data = mysql_fetch_array($hasil);

	//$pengacak ="NDJS3289JSKS190JISJI";

	if($data && $passw == $data['password'])
	{
	$_SESSION['username']=$usern;
	//header ('location = tamu.php');
	return true;
	//echo "Berhasil Login, Selamat datang admin $username";
	}else {
			return false;
			}
	}
	
	function logout (){
	session_destroy();
	}
}
?>