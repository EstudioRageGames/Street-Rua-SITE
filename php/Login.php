<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="Estudio Rage Games">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Login</title>
	
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="RageGames.css" rel="stylesheet">
  </head>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="Street-Rua-SITE.html">Street Rua</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../site/Street-Rua-SITE.html">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Towncity</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="../site/Towncity-História.html">História</a>
            <a class="dropdown-item" href="../site/Towncity-Personagens.html">Personagens</a>
            <a class="dropdown-item" href="../site/Towncity-Futuro.html">Futuro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario-street-rua.php" >Beta</a>
        </li>
		<?php
			session_start();
				if(isset($_SESSION["codigo"])== true){
					echo "<li class='nav-item'>
					<a class='nav-link' href='Logon.php' >Logon</a>
					</li>";
				} else if (isset($_SESSION["codigo"])== false){
					echo "<li class='nav-item'>
					<a class='nav-link' href='Login.php' >Login</a>
					</li>";
				}
		?>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">
	<br/><br/><br/>
	<div class="col-md-5 order-md-12">
	<form method="post" action="Login.php">
	<div class="mb-3">
          <label for="username">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" required>
            <div class="invalid-feedback" style="width: 100%;">
              Seu nome de usuário é necessário.
            </div>
          </div>
        </div>
		<div class="mb-3">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="senha"	id="senha">
          <div class="invalid-feedback">
            Por favor, insira uma senha válida!
          </div>
        </div>
		<input type="submit" name="b1" value="Entrar" />
	</div>
	</form>
	
	<?php if(isset($_POST["b1"])) validarAcesso();?>
		
	<br/><br/><br/>
  

</main>

    <footer class="container">
	<p class="float-right"><a href="#">Topo</a></p>
    <p class="mb-1">&copy; 2019-2020 Estudio Rage Games</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>

<?php
function validarAcesso(){
	$con = new mysqli("localhost","root","", "street_rua");	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$sql = "select * from usuario where usuario='$usuario' and senha=md5('$senha')";
	//echo $sql;
	$resultado = mysqli_query($con, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		session_start();
		$_SESSION["codigo"] = $reg["codigo"];
		$_SESSION["nome"] = $reg["nome"];
		header("location: Logon.php");
		echo "<div class='col-md-5 order-md-3'><br/><div class='alert alert-success' role='alert'>
				Login efetuado</div></div>";
	} else {
		echo "<div class='col-md-5 order-md-3'><br/><div class='alert alert-danger' role='alert'>
				Usuário ou Senha inválidos!</div></div>";	
	}
	$con->close();
}
?>