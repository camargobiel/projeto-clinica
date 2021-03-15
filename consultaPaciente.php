<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Consulta Paciente</title>
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
  
    
      <table class="table">
  <thead>
    <tr class = "bg-primary">
      <th scope="col">id</th>
      <th scope="col">Paciente</th>
      <th scope="col">Tipo sanguineo</th>
      <th scope="col">Fator rh</th>
      <th scope="col">Data Nascimento</th>
    </tr>
  </thead>
    <br> 
   <h2> Lista de Pacientes </h2>
   <br>
	<?php
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
         //$conn=mysqli_connect("localhost", "root", "","bd_projeto");
		  include_once ("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $sql="select * from tb_paciente";
	   
		/*3-executando o comando sql */ 
		 $result= mysqli_query($conn, $sql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($result)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			$t= $dados["tipo_sanguineo"];
			$f= $dados["fator_rh"];
      $d= $dados["data_nasc"];
			//echo "$id - $p | $t | $f |<br>";
			?>
			<tbody>
              <tr>
                 <th scope="row"><?php echo $id ?></th>
                 <td><?php echo $p ?></td>
                 <td><?php echo $t ?></td>
                 <td><?php echo $f ?></td>
                 <td><?php echo $d ?></td>
              </tr>
			
			
		 <?php	
		}
	
	   
    ?>
	  </tbody>
	 </table>
	
	</div> 
	
	
	
	
               
</body>
</html>