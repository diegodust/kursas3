<?php $cities = ['Berlynas','Roma','Londonas']; 
$cities[] = 'Tokijas';
print_r($cities);
?>
<?php $cities2 = ['Tokijas - 13.6', 'Vasingtonas - 0.6', 'Maskva - 11.5'];
$cities2[] = 'Londonas - 8.6';
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namu darbas php4</title>
</head>
<body>
	<ul>
		<li><?php echo $cities[1]; ?></li>
	</ul>
	<ul>
		<li><?php echo 'Gyventojų skaičius ' . $cities2[0]; ?></li>
		<li><?php echo 'Gyventojų skaičius ' . $cities2[1]; ?></li>
		<li><?php echo 'Gyventojų skaičius ' . $cities2[2]; ?></li>
		<li><?php echo 'Gyventojų skaičius ' . $cities2[3]; ?></li>
	</ul>

	
</body>
</html>
