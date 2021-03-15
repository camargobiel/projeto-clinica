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
  <center>
    <h2 style = "margin-bottom:5%;"> Cadastro Paciente </h2>
    <div class = "quadrado-de-login">
    <form name="frmPaciente" action="cadastraPaciente.php"  method="POST">
      <label for="paciente" style = "color:white;margin-top:10px;">Paciente</label>
      <br> <input type="text" name="paciente" required="required">
		<br> <br>
		 
		<label for="tipoSanguineo" style = "color:white;">Tipo sanguineo</label>
    <br> <input type="text" name="tipoSanguineo" required="required">
		<br> <br>
		 
		<label for="fatorRh" style = "color:white;">Fator RH</label>
    <br> <input type="text" name="fatorRh" required="required">
		 
		<br> <br>
    <label for="data_nasc" style = "color:white;"> Data nascimento </label>
    <br> <input type="date" name="data_nasc" required="required" style = "margin-bottom:20px;">
	
    </div>
		  <br> 
  
      <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar" >
      <input type="reset" name="limpar" class="btn btn-warning" value="Limpar">

	  </form>
  </center>
  </div>
</body>
</html>