<?php
error_reporting(0);

$konten =  $_GET['to'];

 if($konten == ''){
	 include "beranda.php";
 }else if($konten == 'pd'){
	 include "operator.php";
 }else if($konten == 'pb'){
	 include "proyek.php";
 }else if($konten == 'kb'){
	 include "mahasiswa.php";
 }else if($konten == 'lg'){
	 include "/spp/index.php";
 }else{
	 echo "<script>
			  alert('Maaf halaman yang Anda minta tidak tersedia');
		   </script>
		   <meta http-equiv='refresh' content='0; url=/spp/operator/index.php'>";
 }
 
?>
