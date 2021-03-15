<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Exclusão de Paciente</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
<body>
	

  
     
	<?php
	   include "menu.php"; 
	   //pegando o id do paciente para realizar a exclusao
	   $id=$_POST["id"];
	    
	
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
	     include_once ("conexao.php");
	   
		/*2-definindo o comando sql a ser usado */
		  $sql="delete from tb_paciente where id_paciente=$id";
	   
		/*3-executando o comando sql */ 
		$result=mysqli_query($conn,$sql);
				 
		 
		/*4-conferindo se o registro foi excluido*/  
		if($result==true){
			header("location:consultaPaciente.php");
		}else{
			echo "<h3> Não foi possível a exclusão </h3>";
		}
		
	   
    ?>
	
		
               
</body>
</html>