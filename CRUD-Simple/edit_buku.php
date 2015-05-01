<?php
include "koneksi.php";
$id=$_GET["id"];
$query="select * from buku where id='$id'";
$perintah=mysql_query($query);
$data=mysql_fetch_array($perintah);
echo "<h2>Edit Buku</h2>";
echo "<form method='post' action='proses_edit_buku.php'>
Id : $id <br>
Judul : <input name='judul' type='text' size='70' value='$data[judul]'><br>
Pengarang : <input name='pengarang' type='text' size='70' value='$data[pengarang]'><br>
Penerbit : <input name='penerbit' type='text' size='50' value='$data[penerbit]'><br>
Kategori : <input name='kategori' type='text' value='$data[kategori]'><br>
Harga : <input name='harga' type='text' value='$data[harga]'><br>
<input type=hidden name=id value='$id'>
<input type='submit' name='Submit' value='Koreksi'>
<input type='reset' name='Reset' value='Batal'>
</form>";
?> 