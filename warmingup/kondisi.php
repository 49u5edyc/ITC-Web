<?php
if(isset($_POST[""])){
	$lampu = $_POST["lampu"];

echo "Warna lampu =>> ".$lampu;

echo "<br><br>";
if ($lampu=='Merah') {
	echo 'Berhenti';
}elseif($lampu=='Kuning'){
	echo 'Hati hati';
}else{
	echo 'Jalan';
}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 <h1>Latihan</h1>
 	<form action="" method="POST">
 		<button type="submit" name="lampu" value="Merah">Merah</button>
 		<button type="submit" name="lampu" value="Kuning">Kuning</button>
 		<button type="submit" name="lampu" value="Hijau">Hjau</button>
 	</form>
 </body>
 </html>