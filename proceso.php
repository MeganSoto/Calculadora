<?php
    $valor1= $_POST['n1'];
    $valor2= $_POST['n2'];
    $op=$_POST['operacion'];
	$resultado;
	

    if($op==1)
	{
    $resultado=($valor1 + $valor2);
	}

    if($op==2)
	{
      $resultado=($valor1 - $valor2);
	}

    if($op==3)
	{
       $resultado= ($valor1 * $valor2);
	}

    if($op==4)
	{
        $resultado=($valor1 / $valor2);
	}
?> 

  <html>
    <head>
	  <link rel="stylesheet" type="text/css" href="MAQUETACION.css" />
    </head>
	
	<body>
	<header>
	<div align="center" id="RESULTADO">
	<h1> El resultado es:<h1>
	</div>
	</header>
 <section>
 <div align="center" id="IGUAL">
  <p><?php echo $resultado; ?> </p>
  </section>
	</body>
	</html>