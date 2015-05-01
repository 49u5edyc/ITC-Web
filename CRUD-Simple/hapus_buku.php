<?php
include "koneksi.php";

$id=$_GET["id"];

$query="delete from buku where id='$id'";
$hasil=mysql_query($query);

if ($hasil){
	echo "Data berhasil dihapus<br>";
	echo "<a href=index.php>Lihat</a>";
}else{
	echo "Data Gagal dihapus";
}
?>