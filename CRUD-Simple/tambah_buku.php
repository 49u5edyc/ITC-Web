<html>
<head>
<title>Tambah Buku</title>
</head>
<body>
<h2>Tambah Buku</h2>
<form method="post" action="proses_tambah_buku.php">
<table border="0" cellpadding="0">
	<tr>
		<td>ID</td>
		<td>:</td>
		<td><input name="id" type="text" size="20"></td>
	</tr>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input name="judul" type="text" size="70"></td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td>:</td>
		<td><input name="pengarang" type="text" size="70"></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td>:</td>
		<td><input name="penerbit" type="text" size="50"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>:</td>
		<td><input name="harga" type="text"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Submit" value="Tambah"></td>
		<td><input type="reset" name="Reset" value="Batal"></td>
	</tr>
</table>
</form>
</body>
</html>