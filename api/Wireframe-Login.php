<?php

    session_start();

    require "include/config.php";

    $error = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $parametro = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
        $parametro->bind_param("s",$email);
        $parametro->execute();//faz consulta

        $resultado = $parametro->get_result();//traz os resultados da consulta
        if($resultado->num_rows === 1){
            $user = $resultado->fetch_assoc();
            if($senha == $user['senha']){
                $_SESSION['user_id'] = $user['id'];
                header("Location: Wireframe-Cursos.php");
                exit();
            }else{
                $error = "Senha Incorreta";
                echo $error;
            }
        }else{
            $error = "Usuário Não Existe";
            echo $error;
        }

    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    
    <link rel="stylesheet"  href="styleLogin.css" />
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
                <div class="logo">
                    <div class="logo-child">
                    </div>
                    <div class="logo-child02">
                    <div class="errortxt"> <?php echo $error  ?> </div>
                        <div class="bem-vindo">BEM VINDO</div>
                        <img class="clip-path-group" src="img/dropLogo.png">
                    </div>
                
                </div>
                <div class="login">
                    <div class="login-inner">
                            <div class="group-child">
                            </div>
                    </div>
                    <div class="login-child">
                    </div>
                    
                    <form method="post">
                        
                        <div class="login1">LOGIN</div>
                        
                        <input type="email" name="email" class="login-item" required placeholder="user@email.com">
                        
                        <div class="email">EMAIL:</div>
                        <input type="password" name="senha" maxlength="12" required class="rectangle-div" placeholder="senha">
                        
                        <div class="senha">SENHA:</div>
                        
                        <button type="submit" class="rectangle-parent" id="groupContainer1">
                            <div class="entrar">ENTRAR</div>
                        </button>
                    </form>
                    <button class="rectangle-group">
                                <a href="Wireframe-Register.php" class="cadastrar-se">CADASTRAR-SE</a>
                        </button>

                        <img class="icon-people" alt="" src="img/user.png">
                        
                        
                        <div class="itens">
                            <div class="rectangle-container">
                                <input type="checkbox" class="frame-child">
                                
                                <div class="lembre-me">Lembre-me</div>
                            </div>
                            <div class="lembre-me">Esqueci minha senha?</div>
                        </div>
                    
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