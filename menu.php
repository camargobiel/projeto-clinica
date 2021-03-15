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
	      <div class="alert alert-primary bg-dark border border-light" role="alert">
             <?php
			   session_start();
			    echo "<div style = 'color:white;'> Olá, " . $_SESSION["nome"] . ". Você está logado como <b>" . $_SESSION["tipo"] . "</b>  </div>";
			 ?>
          </div>
		  
		  
			<nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
			  <a class="navbar-brand" href="menu.php" style = "color:white;">Clinica</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
			  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<div class="navbar-nav">
				 		  
				<?php 
				   if ($_SESSION["tipo"]=="admin"){
					   
				 echo "<a class='nav-link active' href='frmPaciente.php' style = 'color:white;'>Cadastrar paciente </a>";
				 echo " <a class='nav-link' href='consultaPaciente.php' style = 'color:white;'>Consultar Paciente</a>";
				 echo " <a class='nav-link' href='frmAlteraPaciente.php' style = 'color:white;'>Alterar Paciente</a>";
				 echo "<a class='nav-link' href='frmExcluiPaciente.php' style = 'color:white;'>Excluir Paciente</a>";
				
				   }else{
			     	   
				  echo "<a class='nav-link active' href='' style = 'color:white;'>Cadastrar paciente </a>   ";
				  echo " <a class='nav-link' href='consultaPaciente.php' style = 'color:white;'>Consultar Paciente</a>";
				  echo "<a class='nav-link' href='' style = 'color:white;'>Alterar Paciente</a>";
				  echo " <a class='nav-link' href='' style = 'color:white;'>Excluir Paciente</a>";
				 }
				 ?>
				
				 
				  
				    <a class="nav-link" href="Sair.php" style = "color:white;">Sair</a>
				  
				</div>
			  </div>
			</nav>
					  
	     </div>

	</body>
</html>