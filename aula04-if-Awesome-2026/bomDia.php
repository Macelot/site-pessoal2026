<!DOCTYPE>
<html>
	<head>
		<meta charset=utf-8 />
		<title></title>
	</head>
	<body>
		<?php
		date_default_timezone_set("America/Sao_Paulo");
		$hora=date("H");

		if($hora < 13){
			echo "Bom dia";
		}
		?>
	</body>
</html>