<?php
    $valor1= $_POST['n1'];
    $valor2= $_POST['n2'];
    $op=$_POST['operacion'];

    if($op==1)
	{
        echo "La suma es: ".($valor1+$valor2);
	}

    if($op==2)
	{
        echo "La resta es: ".($valor1-$valor2);
	}

    if($op==3)
	{
        echo "La multiplicacion es: ".($valor1*$valor2);
	}

    if($op==4)
	{
        echo "La division es: ".($valor1/$valor2);
	}
?>