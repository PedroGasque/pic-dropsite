<?php

    require 'include/config.php';

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];


		$parametro = $conexao->prepare("INSERT INTO feedback (nome,email,telefone,assunto,mensagem) values(?,?,?,?,?)");
		$parametro->bind_param("sssss",$nome,$email,$telefone,$assunto,$mensagem);
		$parametro->execute();

		$to  = '49381@eep.br';
		$subject = $_POST['assunto'];
		$message = $_POST['nome'] ."\n". $_POST['telefone'] . "\n". $_POST['mensagem'];
		$headers = 'From: '. $_POST['email'];

		mail($to, $subject, $message, $headers);

		header("Location: Wireframe-Principal.php");
		exit();
	}



?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

	<link rel="stylesheet"  href="styleComment.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka One:wght@400&display=swap" />  	

</head>
<body>
	
	<div class="wireframe-comment">
			<div class="frame-maintitle">
				<b class="deixe-sua-mensagem">Deixe sua mensagem</b>
				<div class="frame-maintitle-child">
				</div>
				<div class="title">
						<div class="entre-em-contato">Entre em contato conosco</div>
						</div>
				<img class="vector-icon" alt="" src="img/iconDrop.png">

			</div>
			<form method="post">
			<div class="forms">
				
				<div class="deixe-sua-menagem-ou-faa-seu-wrapper">
						<div class="deixe-sua-menagem">Deixe sua menagem ou faça seu pedido de orçamento:</div>
				</div>
				<div class="insert-base">
						<b class="deixe-sua-menagem">Nome Completo:</b>
						<div class="insert-bar">
							<div class="insert-bar-child">
								<input type="text" id="nome" name="nome" required placeholder="Nome Completo">
							</div>
						</div>
				</div>
				<div class="insert-base">
						<b class="deixe-sua-menagem">E-mail:</b>
						<div class="insert-bar">
							<div class="insert-bar-child">
								<input type="email" id="email" name="email" required placeholder="user@gmail.com">
							</div>
							
						</div>
				</div>
				<div class="insert-base">
						<b class="deixe-sua-menagem">Telefone:</b>
						<div class="insert-bar">
							<div class="insert-bar-child">
								<input type="tel" id="tele" name="telefone" required placeholder="(xx) xxxx-xxxxx">
							</div>
							
						</div>
				</div>
				<div class="insert-base">
						<b class="deixe-sua-menagem">Assunto:</b>
						<div class="insert-bar">
							<div class="insert-bar-child">
								<input type="text" id="assunto" name="assunto" required placeholder="Assunto">
							</div>
							
						</div>
				</div>
				<div class="insert-base">
						<b class="deixe-sua-menagem">Mensagem:</b>
						<div class="insert-bar4">
							<div class="insert-bar-child1">
								<textarea name="mensagem" id="message" required placeholder="Mensagem"></textarea>
								<!--<input type="text" id="massage" name="message" placeholder="Menssagem" >-->
							</div>
							
						</div>
				</div>
				<div class="buttons">
						<button type="submit" class="send-button">
							<div class="enviar">Enviar</div>
						</button>
						<button type="reset" class="clean-button">
							<div class="enviar">Limpar</div>
						</button>
				</div>
				
			</div>
			</form>
			
			<div class="section-folder">
				<div class="section-folder-child">
				</div>
				<div class="section-interprise">
						<div class="coluna">
							<img class="clip-path-group" alt="" src="img/dropLogo.png">

							<div class="coluna-child">
							</div>
							<div class="social-media">
								<img class="vector-icon1" alt="" src="img/wats.png">
							
								<img class="vector-icon1" alt="" src="img/insta.png">
							
								<img class="vector-icon3" alt="" src="img/yout.png">
							
								<img class="vector-icon1" alt="" src="img/lkdn.png">
							
								<img class="vector-icon5" alt="" src="img/face.png">
							
							</div>
						</div>
						<div class="coluna1">
							<div class="paginas">Paginas</div>
							<div class="pagina-1">pagina 1</div>
							<div class="pagina-1">pagina 2</div>
							<div class="pagina-1">pagina 3</div>
						</div>
						<div class="coluna2">
							<div class="paginas">Serviços</div>
							<div class="pagina-1">Serviço 1</div>
							<div class="pagina-1">Serviço 2</div>
							<div class="pagina-1">Serviço 3</div>
							<div class="pagina-1">Serviço 4</div>
							<div class="pagina-1">Serviço 5</div>
						</div>
				</div>
				<div class="rodape">
						<div class="rodape-child">
						</div>
						<div class="deixe-sua-menagem">© 2024 Drop Agricultura de Precisão. Todos os direitos reservados.</div>
				</div>
			</div>
			<div class="wireframe-comment-child">
			</div>
			<div class="header">
				<div class="section">
						<div class="logo" id="logoContainer">
							<a href="Wireframe-Principal.php" class="logo1">
								<img class="dropagricultura-logo-removebg-icon" alt="" src="img/dropagricultura_logo-removebg-preview.png">
								
								<div class="entre-em-contato">DROP</div>
							</a>
						</div>
						<div class="navbar">
							<div class="logo1">
								<div class="link01" id="link01Container">
										<div class="deixe-sua-menagem">Empresa</div>
								</div>
								<div class="dropdown">
										<div class="link02">
											<div class="deixe-sua-menagem">Drop Máquinas e Acessórios</div>
											<img class="seta-icon" alt="" src="img/iconSeta.png">
										
										</div>
										<div class="dma-dropdown">
											<div class="dropdown-options">
													<div class="deixe-sua-menagem">Aplicação no sulco de plantio</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Controladores</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Cortadores de Soqueira</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Drop Mix</div>
											</div>
											<div class="frame-div">
													<div class="deixe-sua-menagem">Preparadores de Calda Para Drone</div>
											</div>
										</div>
								</div>
								<div class="dropdown">
										<div class="link02">
											<div class="deixe-sua-menagem">Drop Digital</div>
											<img class="seta-icon" alt="" src="img/iconSeta.png">
										
										</div>
										<div class="dma-dropdown">
											<div class="dropdown-options">
													<div class="deixe-sua-menagem">MIP Solos Cana </div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Nematchau</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Acesse Nossa Plataforma</div>
											</div>
										</div>
								</div>
								<div class="dropdown">
										<div class="link02">
											<div class="deixe-sua-menagem">Drop Serviços</div>
											<img class="seta-icon" alt="" src="img/iconSeta.png">
										
										</div>
										<div class="dma-dropdown">
											<div class="dropdown-options">
													<div class="deixe-sua-menagem">Treinamentos</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Manuais</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Catálogos</div>
											</div>
											<div class="aplicao-no-sulco-de-plantio-wrapper">
													<div class="deixe-sua-menagem">Pós-Vendas</div>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="menu">
							<div class="menu1">
								<div class="menu-icon-idle">
										<div class="menu-icon-idle-child">
										</div>
										<div class="menu-icon-idle-item">
										</div>
										<div class="menu-icon-idle-inner">
										</div>
								</div>
								<div class="menu-options-parent">
										<div class="menu-options">
											<div class="deixe-sua-menagem">Nosso Contato</div>
										</div>
										<div class="nosso-contato-wrapper">
											<div class="deixe-sua-menagem">Nossos Produtos</div>
										</div>
										<div class="nosso-contato-wrapper">
											<div class="deixe-sua-menagem">Nossos Clientes</div>
										</div>
										<div class="nosso-contato-frame">
											<div class="deixe-sua-menagem">Catálogos</div>
										</div>
								</div>
							</div>
						</div>
			</div>
			</div>
	</div>

	<script>
			var logoContainer = document.getElementById("logoContainer");
			if(logoContainer) {
				logoContainer.addEventListener("click", function (e) {
						// Add your code here
				});
			}
			
			var link01Container = document.getElementById("link01Container");
			if(link01Container) {
				link01Container.addEventListener("click", function (e) {
						// Add your code here
				});
			}</script></body>
</html>