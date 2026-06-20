  <!-- FLUMINENSE -->
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CADASTRO</title>

		<link rel="stylesheet" href="../../../public/css/LoginCadastro.css"/>
	</head>
	<body class="telaLoginCadastro">
		<main class="LoginCadastroContainer">
			<a href="/" class="buttonFechar">
				<ion-icon name="close-outline"></ion-icon>
			</a>
			<h2 class="tituloLoginCadastro">CADASTRO</h2>

			<div class="mensagemErro">
				<p class="mensagemErroA">
					<?php
						if(isset($_SESSION['error_message'])){
							echo $_SESSION['error_message'];
						}
						unset($_SESSION['error_message']);
					?>
				</p>
			</div>
			
			<form action="/cadastro/create" method="POST">  
				<div class="inputBox">
					<input type="text" name="name" placeholder="NOME" aria-label="ESCREVER NOME"/>
				</div>
				<div class="inputBox">
					<input type="email" name="email" placeholder="EMAIL" aria-label="ESCREVER EMAIL"/>
				</div>
				<div class="inputBox">
					    <input name="senha" id="senha" type="password" placeholder="SENHA" aria-label="ESCREVER SENHA">
						<ion-icon name="eye-off-outline" class="olho" id="olhoSenha"></ion-icon>
				</div>
				<div class="inputBox">
					    <input name="confirmarsenha" id="confirmarsenha" type="password" placeholder="CONFIRMAR SENHA" aria-label="CONFIRMAR SENHA">
						<ion-icon name="eye-off-outline" class="olho" id="olhoConfirmarSenha"></ion-icon>
				</div>
				<div class="senhaforte" id="senhaforte">
					<!-- <p class="requisitosSenha" id="senhaQuantidade">*Senha deve conter pelo menos 8 caracteres</p> -->
					<p class="requisitosSenha" id="senhaMaiuscula">*Senha deve conter pelo menos uma letra maiscula</p>
					<p class="requisitosSenha" id="senhaMinuscula">*Senha deve conter pelo menos uma letra minuscula</p>
					<p class="requisitosSenha" id="senhaCaracterEspecial">*Senha deve conter pelo menos 1 caracter especial</p>
					<p class="requisitosSenha" id="senhaNumero">*Senha deve conter pelo menos 1 numero</p>
				</div>
				<div class="inputBox">
					<a href="/login" class="ancoraReferencia">JÁ POSSUI CONTA?</a>
				</div>		
				<button type="submit" class="buttonEntrar">CRIAR</button>
			</form>
		</main>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" ></script>
		<script src="../../../public/js/cadastro.js"></script>
	</body>
</html>
