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
     <?php include "menu.php"; ?>
   
     <h2> Alteração de  Paciente </h2>
     <form name="frmPaciente"    action="alteraPaciente1.php"  method="POST">
         <label for="paciente">Paciente</label>
		 <?php include "consultaPacienteSelect.php"; ?>
		  <br>
		  <input type="submit" name="alterar" value="Alterar" >
          <input type="reset" name="limpar" value="limpar">
       
		 
	 </form>
   </div>
  </body>
 </html>