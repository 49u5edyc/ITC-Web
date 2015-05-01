<?php 
include "koneksi.php";
$id=$_POST["id"];
$judul=$_POST["judul"];
$pengarang=$_POST["pengarang"];
$penerbit=$_POST["penerbit"];
$kategori=$_POST["kategori"];
$harga=$_POST["harga"];

$query="insert into buku(id,judul,pengarang,penerbit,kategori,harga) values('$id','$judul','$pengarang','$penerbit','$kategori','$harga')";
$hasil=mysql_query($query);
if ($hasil){
	echo "Data berhasil disimpan<br>";
	echo "<a href=index.php>Lihat</a>";
	// redirect('/tgs_praktik');
	// header('location: index.php');
	// return('index.php');
}else{
	echo "Data Gagal disimpan";
}
?> 