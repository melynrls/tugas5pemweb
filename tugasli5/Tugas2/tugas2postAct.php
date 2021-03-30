<?php
	if (empty($_POST['nama'])||empty($_POST['email'])) {
		header("Location:tugas2kosong.php");
	}else{
		echo "<center>Nama :".$_POST['nama']."</center><br>";
		echo "<center>Email :".$_POST['email']."</center><br>";
		include 'tugas2include.php'; // memanggil file tugas1include.php
	}
?> <!--script php untuk menampilkan hasil inputan-->