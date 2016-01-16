<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Frete</title>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Cálculo de frete</title>

</head>
<body>
	<table border="0" cellpadding="3">
	<tr>
		<td bgcolor="#CCCCCC" align="center">Distância</td>
		<td bgcolor="#CCCCCC" align="center">Custo</td>		
	</tr>
	<?php		
	$distancia = 50;
	while ($distancia<=250) {
		echo "<tr>\n<td align='rigth'>$distancia</td>\n";
		echo "<td align='rigth'>".$distancia/10 ."</td>\n</tr>\n";
		$distancia+=50;
	}
	?>	
	</table>
	
</body>
</html>