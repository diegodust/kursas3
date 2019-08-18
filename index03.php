<?php
	$x = 10;
	$y = 7;
	$suma = $x + $y;
	$atimtis = $x - $y;
	$daugyba = $x * $y;
	$dalyba = $x / $y;
	$procentas = $x % $y;
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namu darbas php3</title>
</head>
<body>
	<p><?php echo $x . ' + ' . $y . ' = ' . $suma; ?></p>
	<p><?php echo $x . ' - ' . $y . ' = ' . $atimtis; ?></p>	
	<p><?php echo $x . ' * ' . $y . ' = ' . $daugyba; ?></p>	
	<p><?php echo $x . ' / ' . $y . ' = ' . $dalyba; ?></p>	
	<p><?php echo $x . ' % ' . $y . ' = ' . $procentas; ?></p>	
</body>
</html>
