<script language="javascript">
function confirm_hapus()
{
	ok=confirm('Anda yakin ingin menghapus?')
	if (ok){
	  return true;
	}else{
	  return false;
	}
}
</script>
<?php 
// sertakan file koneksi.php
include "koneksi.php";

// perintah query
$query="select * from buku";
$perintah=mysql_query($query);
echo "<a href=tambah_buku.php>Tambah</a>";
echo "<h2>Daftar Buku</h2>
	  <table border=1>
	  <tr>
  <td>ID</td>
  <td>JUDUL</td>
  <td>PENGARANG</td>
  <td>PENERBIT</td>
  <td>KATEGORI</td>
  <td>Harga</td>
  <td>Action</td>
	  </tr>";
// tampilkan data
while ($data=mysql_fetch_array($perintah))
{
	echo "<tr>		  
<td>$data[id]</td>
<td>$data[judul]</td>
<td>$data[pengarang]</td>
<td>$data[penerbit]</td>
<td>$data[kategori]</td>
<td>$data[harga]</td>
<td> <a href=edit_buku.php?id=$data[id]>edit</a> | 
	<a href=hapus_buku.php?id=$data[id] onclick='return confirm_hapus()'>hapus</a></td>
</tr>";
}
echo "</table>";
?> 