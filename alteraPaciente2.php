<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Alteração de Paciente</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
	
<body>
   
   <div class="container">
     <?php
	    include "menu.php"; 
	 
	   /*pegando os dados vindos do formulario */
	     $id=$_POST["id"];
		 $p=$_POST["paciente"];
		 $t=$_POST["tipoSanguineo"];
		 $f=$_POST["fatorRh"];
		 $d=$_POST["data_nasc"]; 
		
		
		/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		  include_once ("conexao.php");
		

		/*2-definindo o comando sql a ser usado */
		 $sql="update tb_paciente set paciente='$p', tipo_sanguineo='$t',
		       fator_rh='$f', data_nasc='$d' where id_paciente=$id";
        
		/*3-executando o comando sql */ 
        $result= mysqli_query($conn, $sql);
		  
		/*4-conferindo se o registro foi inserido*/  
		 if($result==true){
					 
		  echo "<h3> Dados alterados com sucesso </h3> ";
		  //echo "<br> <a href=consultaPaciente.php> Listar Paciente </a>";
			 
		 }else{
			 echo "<h3> Não foi possivel a alteração </h3>";
		//	 echo "<br> <a href=frmAlteraPaciente.php> Alterar Paciente </a>";
			
		 }
			 
		 
    
	 
	 ?>
   
   
   
   </div>
   </body>
 </html>