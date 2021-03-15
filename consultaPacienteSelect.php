<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Consulta Paciente Select</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
<body>
	
        <select name="id">
     
	<?php
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
         //$conn=mysqli_connect("localhost", "root", "","bd_projeto");
		  include_once ("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $sql="select * from tb_paciente order by paciente";
	   
		/*3-executando o comando sql */ 
		 $result= mysqli_query($conn, $sql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($result)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			//$t= $dados["tipo_sanguineo"];
			//$f= $dados["fator_rh"];
			//echo "$id - $p | $t | $f |<br>";
			echo "<option value=$id> $p </option>";
			
		}
	
	   
    ?>
	</select>
         
</body>
</html>