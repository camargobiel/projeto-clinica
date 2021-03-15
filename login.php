<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Login</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <!--link href="css/estilo.css" rel="stylesheet" type="text/css"-->
   <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap.min.js"> </script>
     
</head>
<body>
 
 <?php
            
            /*pegando os dados vindos do formulario */
			  $usuario=$_POST["usuario"];
			  $senha=$_POST["senha"];
			 
            /*1- definindo a conexao - local, usuario, senha e banco de dados*/
			$conn=mysqli_connect("localhost", "root", "","bd_projeto");
        
            /*2- verificando se a conexao foi estabelecida */
             if($conn==true){
            
			/*3-definindo o comando sql a ser usado */
			$sql="select *from tb_usuario where login='$usuario' and senha='$senha'";
			
			/*4-executando o comando sql */	
           	$verifica=mysqli_query($conn,$sql);
			              
            /*5- verificando se encontrou registro */  
            if(mysqli_num_rows($verifica)<=0) {
				//echo "Usuário nao encontrado"; 
				header ("location:frmLogin.php");
				
						
			}else{
				//echo "Usuário encontrado";
				if ($dados=mysqli_fetch_assoc($verifica)){
					 $n=$dados["nome"];
					 $t=$dados["tipo"];
					 
					session_start();
					
					$_SESSION["nome"]=$n;
					$_SESSION["tipo"]=$t;
					
					header("location:menu.php");
				}
				  
					
				
				 
			}
				
	}  
 
		 	  
  
?>
 </body>
 </html>
 