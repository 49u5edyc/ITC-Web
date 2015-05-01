<?php 
$host="localhost";
$username="root";
$password="agusedyc";
$db="perpustakaan";

// koneksi ke server
mysql_connect($host,$username,$password) or die ("Koneksi GAGAL");

// pilih database
mysql_select_db($db) or die ("database tidak bisa dipilih");
?> 