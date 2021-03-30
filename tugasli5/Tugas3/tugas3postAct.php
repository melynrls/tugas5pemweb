<?php
	echo "<center><h2> Selamat datang di website kami ".$_POST['nama'].", berikut biodata Anda : "."</h2></center><br>";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Jenis Kelamin :".$_POST['gender']."</center><br>";
	echo "<center>Tempat, tanggal lahir :".$_POST['ttl']."</center><br>";
	echo "<center>Alamat Rumah :".$_POST['alamat']."</center><br>";
	echo "<center>Alamat Email:".$_POST['email']."</center><br>";
	echo "<center>Hobi : ".$_POST['hobi']."</center><br>";
?><!--script php untuk menampilkan hasil inputan-->