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

	<center>

	  <h1 style = "margin-bottom:10%;"> Login </h1>

  <div class = "quadrado-de-login">
    <form name="frmLogin" action="login.php"  method="POST">
      <label for="usuario" style = "margin-top:15px;color:white;">Usuário</label>
      <br><input type="text" name="usuario" >
      <br> <br>
      
      <label for="senha" style = "color:white;">Senha </label>
      <br><input type="password" name="senha" style = "margin-bottom:30px;" >
	</div>
		  <br>
		    <input type="submit" name="logar" class="btn btn-primary" value="Logar" >
        <input type="reset" name="limpar" class="btn btn-warning" value="Limpar">
	  </form>
  </div>

  </center>

</body>
</html>