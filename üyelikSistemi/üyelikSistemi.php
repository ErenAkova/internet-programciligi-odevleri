<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
$message = "";
include "hosgeldiniz.php";
if(isset($_POST["Eposta"]) && isset($_POST["Şifre"])){
	$Eposta = "erenakova16@gmail.com";
	$Şifre = "bursa123";
	if($_POST["Eposta"]==$Eposta && $_POST["Şifre"]==$Şifre){
		$message = "Giriş Yapıldı(ÜZERİNE TIKLA)";
		echo "<a href=secim.php>";
	} else {
		$message = "Tekrar Deneyin";
	}
}



?>

<html>
	<head>
		<meta charset "utf-8"/>
		<title>Üyelik Girişi</title>
	</head>
	<body>
		<p><?php echo $message; ?></p>
		<form method="post">
			<input type="text" name="Eposta" placeholder="E-posta adresinizi girin"/>
			<input type="password" name="Şifre" placeholder="Şifrenizi girin"/>
			<input type="submit" value="Giriş"/> 
		</form>
	</body>
</html>