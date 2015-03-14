<?php 
if(isset($_POST)){
	$p = $_POST["p"];
	$l = $_POST["l"];
	$t = $_POST["t"];
	$pst = $_POST["pst"];
	//print_r($pst);

	if ($pst=='Vbalok') 
	{
		$Vbalok = $p*$l*$t;
	}
	else
	{
		$LPbalok = (4*($p*$l)) + (2*($l*$t));
	}
}
?>
<html>
<head>
	<title>ITC - Web Programing</title>
</head>
<body  align="center">
<table align="center">
	<tr align="center">
		<td colspan="2"><h1>Kalkulator Matematika</h1></td>
	</tr>
	<tr>
		<td colspan="2" align="center" ><h2><i>Balok</i></h2></td>	
	</tr>
	<tr align="center">
		<td>Volume</td>
		<td>Luas Permukaan</td>
	</tr>
	<tr>
		<td>
		<form action="" method="POST">
			<table >
				<tr>
					<td>Panjang</td>
					<td>:</td>
					<td><input type="text" name="p" value="" placeholder="Input Panjang"></td>
					<td><input type="submit" name="pst" value="Vbalok"></td>	
				</tr>
				<tr>
					<td>Lebar</td>
					<td>:</td>
					<td><input type="text" name="l" value="" placeholder="Input Lebar"></td>
					<td rowspan="2"><h3><?php echo $Vbalok."  Cm<sup>3</sup>";; ?></h3></td>
				</tr>
				<tr>
					<td>Tinggi</td>
					<td>:</td>
					<td><input type="text" name="t" value="" placeholder="Input Tinggi"></td>
				</tr>
			</table>
		</form>
		</td>
		<td>
			<form action="" method="POST">
				<table >
					<tr>
						<td>Panjang</td>
						<td>:</td>
						<td><input type="text" name="p" value="" placeholder="Input Panjang"></td>
						<td><input type="submit" name="pst" value="LPbalok"></td>	
					</tr>
					<tr>
						<td>Lebar</td>
						<td>:</td>
						<td><input type="text" name="l" value="" placeholder="Input Lebar"></td>
						<td rowspan="2"><h3><?php echo $LPbalok."  Cm<sup>2</sup>";; ?></h3></td>
					</tr>
					<tr>
						<td>Tinggi</td>
						<td>:</td>
						<td><input type="text" name="t" value="" placeholder="Input Tinggi"></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
</body>
</html>
