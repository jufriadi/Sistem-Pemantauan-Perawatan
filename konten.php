<?php
error_reporting(0);

$konten =  $_GET['to'];

 if($konten == ''){
	 include "beranda.php";
 }else if($konten == 'op'){
	 include "operator.php";
 }else if($konten == 'pr'){
	 include "proyek.php";
 }else if($konten == 'mhs'){
	 include "mahasiswa.php";
 }else{
	 echo "<script>
			  alert('Maaf halaman yang Anda minta tidak tersedia');
		   </script>
		   <meta http-equiv='refresh' content='0; url=index.php'>";
 }
 
?>
