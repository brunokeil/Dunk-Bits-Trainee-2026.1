<!-- FLUMINENSE -->

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LOGIN</title>

		<link rel="stylesheet" href="../../../public/css/login.css"/>
	</head>

	<body class="telaLogin">
		<main class="loginContainer">
			<a href="#" class="buttonFechar">
				<ion-icon name="close-outline"></ion-icon>
			</a>

			<h2 id="tituloLogin">LOGIN</h2>

			<form action="/login" method="POST">
				<div class="mensagem-erro">
					<!-- <?php
						session_start();
						if(isset($_SESSION['mensagem-erro'])){
							echo $_SESSION['mensagem-erro'];
						unset($_SESSION['mensagem-erro']);
						}
					?> -->
				</div>
				<div class="inputBox">
                    <label>
					    <input name="email" id="email" type="text" placeholder="EMAIL" />
                    </label>
				</div>

				<div class="inputBox">
                    <label>
					    <input name="senha" id="senha" type="password" placeholder="SENHA" />
                    </label>
				</div>

				<button type="submit" class="buttonEntrar">LOGIN</button>
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
