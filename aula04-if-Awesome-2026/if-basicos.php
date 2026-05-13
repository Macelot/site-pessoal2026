<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		$valor="15";
		$valor2=15;
		//comparando o valor
		if($valor==$valor2){
			echo "São iguais<br>";
		}	
		//comparando o tipo
		if($valor===$valor2){
			echo "São do mesmo tipo";
		}
		//questao1 -------------------------------------
		$a = 7;
		$b = 6;
		if ($a>$b){
			$a = $a - $b; //$a=1
		}else{
			$a=$a+1;
		}
		$a=$a+2;
		echo $a."<br>";
		
		echo "Incremento ++ pode vir antes ou depois <br>";
		$a=1;			//a vale 1	
		echo ++$a;		//a vale 2, pois ++ aumenta 1. Mostra na tela 2	
		echo "<br>";
		echo $a++;		//a vale 2, mostra na tela 2, mas a passa para 3
		echo "<br>";
		echo $a;		//mostra na tela o 3
		echo "<br>";
		
		//questao2 -------------------------------------
		$a = 5;
		if (++$a == 6) {
			echo "Hello";
		} else {
			echo "World";
		}
		echo "<br>";
		
		//questao3 -------------------------------------
		$num = 9;
		if ($num++ == 10) { //depois da comparação ele vira 10
			echo "Hello";
		} else {
			echo "World";
		}
		echo $num;
		echo "<br>";
		
		//questao4 -------------------------------------
		//An if statement MUST be followed by an else statement NÃO
		
		
		//questao5 -------------------------------------
		$a = 9;
		$b = 4;
		if ($a == 9) {   //condição verdadeira, será executado o comando abaixo
			if ($b > 5) {
				echo "A";
			} else {
				echo "B";
			}
		} else {
			echo "C";
		}
		echo "<br>";
		
		//questao6 -------------------------------------
		$a = 10;
		if (true) {
			if ($a == 10) {
				echo "A";
			}
			echo "B";
		} else {
			echo "C";
		}
		echo "<br>";
		
		//questao7 -------------------------------------
		$a = 10;
		if ($a = 5) {  //vai retornar true, pois apenas coloca 5 no a
			echo "A";
		} else {
			echo "B";
		}
		echo "<br>";
		
		//questao7 -------------------------------------
		echo "Questão 7 <br>";
		$x=8;
		$y=0;
		if($x>2){
			if($y>2){
				$z = $x + $y;
				echo "z is ".$z;
			}
		}else{
			echo "x is ".$x;
		}
		
		echo "<br>";
		
		//questao8 -------------------------------------
		$a = 9;
		$b = 4;
		if ($a = 9) {		//colocando 9 no a
			if ($b = 5) {	//colocando 5 no b	
				echo "A";
			} else {
				echo "B";
			}
		} else {
			echo "C";
		}
		echo "<br>";
		
		//questao9 -------------------------------------
		
			
		
		
		