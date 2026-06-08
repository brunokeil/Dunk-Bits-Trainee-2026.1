  <!-- FLUMINENSE -->

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CADASTRO</title>

		<link rel="stylesheet" href="../../../public/css/cadastro.css" />
	</head>

	<body class="telaLogin">
		<main class="loginContainer">
			<a href="#" class="buttonFechar">
				<ion-icon name="close-outline"></ion-icon>
			</a>
			<h2 id="tituloCadastro">CADASTRO</h2>  
			<form action="/cadastro/create" method="POST">  
				<div class="inputBox">
					<input type="text" name="name" placeholder="NOME" />
				</div>

				<div class="inputBox">
					<input type="text" name="email" placeholder="EMAIL" />
				</div>
  
				<div class="inputBox">  
					<input type="password" name="password" placeholder="SENHA" />  
				</div>
				<button type="submit" class="buttonEntrar">CRIAR</button>
			</form>
		</main>

		<script
			type="module"
			src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
		></script>
		<script
			nomodule
			src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
		></script>
	</body>
</html>
