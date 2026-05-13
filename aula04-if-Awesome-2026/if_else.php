<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
<body>
	<form id="form1" name="form1" method="post" action="if_else.php">
	  Valor: 
	  <label>
	  <input type="text" name="valor1" id="valor1" />
	  </label>
	  <input type="submit" name="button" id="button" value="Submit" />
	</form>
	<?php
	$valor1 = "";
	if(isset($_POST['valor1']))
		$valor1 = $_POST['valor1'];
	if($valor1 == 0){
		echo "Valor1 = 0";
	}else if($valor1 == 1){
		echo "Valor1 = 1";
	}else if($valor1 == 2){
		echo "Valor1 = 2";
	}else{
		echo "Número inválido";
	}
	?>
</body>
</html>
