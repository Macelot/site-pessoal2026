<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		//vamos testar se a variável esta definida
		if(isset($_POST['valor']))
			$preco=$_POST['valor'];
		else
			$preco=0;

		echo "Preço ".$preco;
		echo "<br>";
		if($preco>15){
			echo "produto custa mais de 15";
		}elseif($preco<15){
			echo "produto custa menos de 15";
		}elseif($preco==15){
			echo "produto custa 15";
		}
		?>
		<form action="" method="post">
			<input type="text" name="valor" value="<?php echo $preco?>">
			<input type="submit">
		</form>
	</body>
</html>