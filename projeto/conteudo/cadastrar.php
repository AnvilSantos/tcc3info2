<?php
	include 'cabecalho.php';
?>

	<div class="main_top">
      	<h1>Registro</h1>
    </div>
    <div class="divisor"></div>
    <div class="fundo">
    	<form action="index.php?p=cadastrar" method="POST">
  			<div class="container">

  			<label for="nome"><b>Nome</b></label>
		    <input type="text" placeholder="Nome" name="nome" required>  

		    <label for="email"><b>Email</b></label>
		    <input type="text" placeholder="Email" name="email" required>

		    <label for="psw"><b>Senha</b></label>
		    <input type="password" placeholder="Senha" name="psw" required>

		    <label for="psw-repeat"><b>Confirmar Senha</b></label>
		    <input type="password" placeholder="Confirmar Senha" name="psw-repeat" required>

		    <label>
		      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Lembre-se de mim
		    </label>

		    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

		    <div class="clearfix">
		      <button type="button" class="cancelbtn">cancelar</button>
		      <input type="submit" value="Salvar" name="confirmar" class="signupbtn">Confirmar</button>
		    </div>
		    <a href="login.php" style="color:dodgerblue">Já possui cadastro?</a>
		  </div>
		</form>
    </div>

<?php
	include 'rodape.php';
?>