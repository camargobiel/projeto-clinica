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
   <br>
    
     
   
     <h2> Cadastro Paciente </h2>
     <form name="frmPaciente"    action="cadastraPaciente.php"  method="POST">
         <label for="paciente">Paciente</label>
         <input type="text" name="paciente" required="required">
		 <br> <br>
		 
		 <label for="tipoSanguineo">Tipo sanguineo</label>
         <input type="text" name="tipoSanguineo" required="required">
		 <br> <br>
		 
		 <label for="fatorRh">Fator RH</label>
         <input type="text" name="fatorRh" required="required">
		 
		  <br> <br>
      <label for="data_nasc"> Data nascimento </label>
         <input type="date" name="data_nasc" required="required">
		 
		  <br> <br>
		
         
           <input type="submit" name="cadastrar" value="Cadastrar" >
           <input type="reset" name="limpar" value="limpar">
       
	   

	</form>
			
		
				
			

  </div>
  
 
 
</body>
</html>