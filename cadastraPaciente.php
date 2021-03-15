<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro de Paciente</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
	
<body>
        <?php
	  include "menu.php";
	
	   ?>  
    	
		 
		 <div class="container">
		 
		 <?php
		
		/*pegando os dados vindos do formulario */
		 $p=$_POST["paciente"];
		 $t=$_POST["tipoSanguineo"];
		 $f=$_POST["fatorRh"];
		 $d=$_POST["data_nasc"];
		
		
		/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		// $conn=mysqli_connect("localhost", "root", "","bd_projeto");
	    include_once ("conexao.php");
		

		/*2-definindo o comando sql a ser usado */
		 $sql="insert into tb_paciente(paciente, tipo_sanguineo, fator_rh, data_nasc)
		 values('$p','$t','$f','$d')";
        
		/*3-executando o comando sql */ 
        $result= mysqli_query($conn, $sql);
		  
		/*4-conferindo se o registro foi inserido*/  
		 if($result==true){
					 
		  echo "<h3> Dados gravados com sucesso </h3> ";
			 
		 }else{
			 echo "<h3> Não foi possivel a gravacao </h3>";
			
		 }
			 
		 
         
         ?> 
		 </div>
</body>
</html>