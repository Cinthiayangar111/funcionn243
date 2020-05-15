<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	function retornarpromedio($val,$val2) 
	{
		$pro=$val/$val2;
		return $pro;
	}
	$v1=500;
	$v2=64;
	$p=retornarpromedio($v1,$v2);
	echo $p;
	?>
</body>
</html>