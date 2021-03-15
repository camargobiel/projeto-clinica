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
	  $id=$_POST["id"];
	 //  echo $id;
	 
	 /*1-definindo a conexao -local, usuario, senha e banco de dados*/
         include_once ("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $sql="select * from tb_paciente where id_paciente=$id";
	   
		/*3-executando o comando sql */ 
		 $result= mysqli_query($conn, $sql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		if($dados=mysqli_fetch_assoc($result)){
			
			$p= $dados["paciente"];
			$t= $dados["tipo_sanguineo"];
			$f= $dados["fator_rh"];
			$d= $dados["data_nasc"];
			//echo "$id - $p | $t | $f |";
	 	}
	 
	
	?>
	
	<br>
	<h2> Alteração de Paciente </h2>
     <form name="frmPaciente"    action="alteraPaciente2.php"  method="POST">
         
		  <label for="id">Id</label>
         <input type="text" readonly name="id" value="<?php echo $id  ?>"   required="required">
		 <br> <br>
		 
		 <label for="paciente">Paciente</label>
         <input type="text" name="paciente" required="required" value="<?php echo $p ?>">
		 <br> <br>
		 
		 <label for="tipoSanguineo">Tipo sanguineo</label>
         <input type="text"  name="tipoSanguineo" required="required" value="<?php echo $t ?>">
		 <br> <br>
		 
		 <label for="fatorRh">Fator RH</label>
         <input type="text" name="fatorRh" required="required" value="<?php echo $f ?>">
		 
		  <br> <br>
		  <label for="data_nasc">Data Nascimento</label>
         <input type="date" name="data_nasc" required="required" value="<?php echo $f ?>">
		 
		  <br> <br>
		
         
           <input type="submit" name="alterar" value="Alterar" >
           <input type="reset" name="limpar" value="limpar">
       
	   

	</form>
		 
		 
		
	
	
   
   
   </div>
  </body>
</html>  