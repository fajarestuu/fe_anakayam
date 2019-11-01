<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//jumlah ayam pertama
$anakayam=3;

echo "tek-kotek-kotek-kotek anak ayam turun ";
echo $anakayam;
echo "<br>";

for ($i=$anakayam; $i>0  ; $i--) { 
	# code...
	$anakayam = $anakayam-1;
	if ($anakayam>0) {
		# code...
		if ($anakayam%2==0) {
			# code...
			?>
			<p style="color:blue">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
			
		}
		elseif ($anakayam%2>0) {
			# code...
			?>
			<p style="color:orange">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
			
		}
	}

	else{
		echo "Mati satu habis semua";
	}

}

	?>
</body>
</html>
