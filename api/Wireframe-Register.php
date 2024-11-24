<?php

    require 'include/config.php';

    //gerar token para recuperacao de senha
    function generateToken(){
        return bin2hex(random_bytes(16));
    }

    //dados dos usuarios
    if($_SERVER["REQUEST_METHOD"]=="POST"){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$senha = $_POST['senha'];
        $token = generateToken();


		$parametro = $conexao->prepare("INSERT INTO usuarios (nome,email,telefone,senha,token) values(?,?,?,?,?)");
		$parametro->bind_param("sssss",$nome,$email,$telefone,$senha,$token);
		$parametro->execute();

		header("Location: Wireframe-Login.php");
        echo "Usuario Cadastrado Com Sucesso";
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    
    <link rel="stylesheet"  href="styleRegister.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" />
    
    
    
</head>
<body>
    
    <div class="wireframe-login">
        
        <div class="section-folder">
            <div class="section-folder-child">
            </div>
            <div class="rectangleNew-div"></div>
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

        <div class="login-frame">
                <div class="login">
                    <div class="boxes">
                        <div class="login-inner">
                                <div class="group-child">
                                </div>
                        </div>
                        <div class="login-child">
                        </div>
                    </div>
                    <form method="post">
                        <div class="cadastro">
                            <div class="login1">REGISTRAR-SE</div>
                            
                            
                            <div class="email">NOME:</div>
                            <input type="text" name="nome" required class="login-item" placeholder="Nome Completo">

                            <div class="email">EMAIL:</div>
                            <input type="email" name="email"  required class="login-item" placeholder="email">

                            <div class="email">TELEFONE:</div>
                            <input type="tel" name="telefone" required class="login-item" placeholder="(DDD)Telefone">
                            
                            <div class="senha">SENHA:</div>
                            <input type="password" name="senha" maxlength="12" required class="login-item" placeholder="senha">

                            <button type="submit" class="send-button">
                                    <div class="cadastrar-se">CADASTRAR-SE</div>
                            </button>
                            
                        </div>
                    </form>
                    
                </div>
        </div>
        
        <div class="header">
                <div class="section">
                    <div class="logo1" id="logoContainer">
                            <div class="logo2">
                                <img class="dropagricultura-logo-removebg-icon" alt="" src="img/dropagricultura_logo-removebg-preview.png">
                            
                                <div class="drop-logo">DROP</div>
                            </div>
                    </div>
                    <div class="navbar">
                            <div class="logo2">
                                <div class="link01" id="link01Container">
                                        <div class="lembre-me">Empresa</div>
                                </div>
                                <div class="dropdown">
                                        <div class="link02">
                                            <div class="lembre-me">Drop Máquinas e Acessórios</div>
                                            <img class="seta-icon" alt="" src="img/iconSeta.png">
                                        
                                        </div>
                                        <div class="dma-dropdown">
                                            <div class="dropdown-options">
                                                    <div class="lembre-me">Aplicação no sulco de plantio</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Controladores</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Cortadores de Soqueira</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Drop Mix</div>
                                            </div>
                                            <div class="frame-div">
                                                    <div class="lembre-me">Preparadores de Calda Para Drone</div>
                                            </div>
                                        </div>
                                </div>
                                <div class="dropdown">
                                        <div class="link02">
                                            <div class="lembre-me">Drop Digital</div>
                                            <img class="seta-icon" alt="" src="img/iconSeta.png">
                                        
                                        </div>
                                        <div class="dma-dropdown">
                                            <div class="dropdown-options">
                                                    <div class="lembre-me">MIP Solos Cana </div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Nematchau</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Acesse Nossa Plataforma</div>
                                            </div>
                                        </div>
                                </div>
                                <div class="dropdown">
                                        <div class="link02">
                                            <div class="lembre-me">Drop Serviços</div>
                                            <img class="seta-icon" alt="" src="img/iconSeta.png">
                                        
                                        </div>
                                        <div class="dma-dropdown">
                                            <div class="dropdown-options">
                                                    <div class="lembre-me">Treinamentos</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Manuais</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Catálogos</div>
                                            </div>
                                            <div class="aplicao-no-sulco-de-plantio-wrapper">
                                                    <div class="lembre-me">Pós-Vendas</div>
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
                                            <div class="lembre-me">Nosso Contato</div>
                                        </div>
                                        <div class="nosso-contato-wrapper">
                                            <div class="lembre-me">Nossos Produtos</div>
                                        </div>
                                        <div class="nosso-contato-wrapper">
                                            <div class="lembre-me">Nossos Clientes</div>
                                        </div>
                                        <div class="nosso-contato-frame">
                                            <div class="lembre-me">Catálogos</div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
        
    </div>
    
    
    
    
    <script>
        var groupContainer1 = document.getElementById("groupContainer1");
        if(groupContainer1) {
                groupContainer1.addEventListener("click", function (e) {
                    // Add your code here
                });
        }
    
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