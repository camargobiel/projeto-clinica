<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Consulta Aluno</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
<body>
	
  

  <div class="container">  
      
      <table class="table">
  <thead>
    <tr>
      <th scope="col">rm</th>
      <th scope="col">Nome</th>
      <th scope="col">Turno</th>
      <th scope="col">Estado Civil</th>
	  <th scope="col">Mora em Rio Preto?</th>
	 
	  
    </tr>
  </thead>
    <br> 
   <h2> Lista de Alunos que são do turno da manha ou tarde</h2>
   
	<?php
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
        
		  include_once("conexaoInterdisciplinar.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $sql="select * from tbaluno where turnoAluno='manha' or turnoAluno='tarde'";
	   
		/*3-executando o comando sql */ 
		 $result= mysqli_query($conn, $sql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($result)){
			$rm=$dados["rmAluno"];
			$n= $dados["nomeAluno"];
			$t= $dados["turnoAluno"];
			$ec= $dados["civilAluno"];
			$rp=$dados["riopretoAluno"];
			
			?>
			<tbody>
              <tr>
                 <th scope="row"><?php echo $rm?></th>
                 <td><?php echo $n?></td>
                 <td><?php echo $t ?></td>
                 <td><?php echo $ec ?></td>
				 <td><?php echo $rp ?></td>
              </tr>
			
			
		 <?php	
		}
	
	   
    ?>
	  </tbody>
	 </table>
	
	</div> 
	
	
	
	
               
</body>
</html>