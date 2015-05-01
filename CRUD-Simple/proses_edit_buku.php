<?php
include "koneksi.php";

$id=$_POST["id"];
$judul=$_POST["judul"];
$pengarang=$_POST["pengarang"];
$penerbit=$_POST["penerbit"];
$kategori=$_POST["kategori"];
$harga=$_POST["harga"];
$query="update buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kategori='$kategori', harga='$harga' where id='$id'";
$hasil=mysql_query($query);

if ($hasil){
	echo "Data berhasil dikoreksi<br>";
	echo "<a href=index.php>Lihat</a>";
}else{
	echo "Data Gagal dikoreksi";
}
?> 