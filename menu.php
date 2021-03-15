<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Login</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
	<body>
       <div class="container">
	      <div class="alert alert-primary bg-primary border border-light rounded-pill" role="alert">
             <?php
			   session_start();
			    echo "Ola, " . $_SESSION["nome"] . " você está logado como " . $_SESSION["tipo"];
			 
			 ?>
          </div>
		  
		  
			<nav class="navbar navbar-expand-lg navbar-light bg-light text-light">
			  <a class="navbar-brand" href="#">Clinica Camargo</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
			  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<div class="navbar-nav">
				 		  
				<?php 
				   if ($_SESSION["tipo"]=="admin"){
					   
				 echo "<a class='nav-link active' href='frmPaciente.php'>Cadastrar paciente </a>";
				 echo " <a class='nav-link' href='consultaPaciente.php'>Consultar Paciente</a>";
				 echo " <a class='nav-link' href='frmAlteraPaciente.php'>Alterar Paciente</a>";
				 echo "<a class='nav-link' href='frmExcluiPaciente.php'>Excluir Paciente</a>";
				
				   }else{
			     	   
				  echo "<a class='nav-link active' href=''>Cadastrar paciente </a>   ";
				  echo " <a class='nav-link' href='consultaPaciente.php'>Consultar Paciente</a>";
				  echo "<a class='nav-link' href=''>Alterar Paciente</a>";
				  echo " <a class='nav-link' href=''>Excluir Paciente</a>";
				 }
				 ?>
				
				 
				  
				    <a class="nav-link" href="Sair.php">Sair</a>
				  
				</div>
			  </div>
			</nav>
					  
	     </div>

	</body>
</html>