<?php

    session_start();//prepara para iniciar sessao
    if(!isset($_SESSION['user_id'])){ //verifica existencia de sessao user id nao existe
        header("Location: Wireframe-Login.php");//usuario para pag login
        exit();
    }

    require 'include/config.php';
    
    $parametro = $conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
    $parametro->bind_param("s", $_SESSION['user_id']);
    $parametro->execute();//faz consulta

    

    $resultado = $parametro->get_result();//traz os resultados da consulta
    if($resultado->num_rows === 1){
        $user = $resultado->fetch_assoc();
        $nome = $user['nome'];

    }
    

?>  


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="styleCursos.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka One:wght@400&display=swap" />



    </head>
    <body style="background-image: url(img/Wireframebg.png);">
        <div class="primary">
        <div class="wireframe-principal">

            <div class="widget-text1">
                <div class="text-title">Cursos Drop</div>
                <div class="text-sub">Confira nossos Cursos Disponiveis</div>
                <div class="rec02"></div>
                
                <div class="text-sub">Bem Vindo: <?php echo $nome ?> </div>
                <div class="text-sub2" style="margin-top: 120px;" >Nossos Principais Cursos:</div>
            </div> 

            <div class="overlap-3-2">
                <img src="img/Mask group2.png" >
                <div class="section-2">
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto1.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Aplicação de Sulco no Plantio</div>
                            <div class="rec03"></div>
                            <div class="title-text">Bomba Hidraulica na Linha Top</div>
                            
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto2.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Aplicação de Sulco no Plantio</div>
                            <div class="rec03"></div>
                            <div class="title-text">Bomba Hidraulica 650L</div>
                            <div style="height: 16px;"></div>
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto3.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Dropper 5.0</div>
                            <div class="rec03"></div>
                            <div class="title-text" style="margin-bottom: 10px;">Guia Dropper 5.0</div>
                            <div style="height: 10px;"></div>
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overlap-3">
                <img src="img/Mask group2.png">
                <div class="section-2">
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto1.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Aplicação de Sulco no Plantio</div>
                            <div class="rec03"></div>
                            <div class="title-text">Bomba Hidraulica na Linha Top</div>
                            
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto2.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Aplicação de Sulco no Plantio</div>
                            <div class="rec03"></div>
                            <div class="title-text">Bomba Hidraulica 650L</div>
                            <div style="height: 16px;"></div>
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                    <div class="coluna-2">
                        <div class="user">
                            <img class="vector-7" src="img/proto3.png" />
                        </div>
                        <div class="acess">
                            <div class="class-txt">Dropper 5.0</div>
                            <div class="rec03"></div>
                            <div class="title-text" style="margin-bottom: 10px;">Guia Dropper 5.0</div>
                            <div style="height: 10px;"></div>
                            <button class="button-assistir">
                                <a class="assis" href="#">Assistir</a>
                                <img src="img/ssetaleft.png">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <div class="text-wrapper-6">Assista</div>
                    <div class="rectangle-13"></div>
                </div>
            </div>


            <div class="overlap-4">
                <div class="section-folder">
                    <div class="section-interprise">
                        <div class="coluna-3">
                            <img class="clip-path-group" src="img/dropLogo.png" />
                            <div class="rectangle-14"></div>
                            <img class="img-2" src="img/social media.png" />
                        </div>
                        <div class="coluna-4">
                            <div class="text-wrapper-7">Paginas</div>
                            <div class="text-wrapper-8">pagina 1</div>
                            <div class="text-wrapper-8">pagina 2</div>
                            <div class="text-wrapper-8">pagina 3</div>
                        </div>
                        <div class="coluna-5">
                            <div class="text-wrapper-7">Serviços</div>
                            <div class="text-wrapper-8">Serviço 1</div>
                            <div class="text-wrapper-8">Serviço 2</div>
                            <div class="text-wrapper-8">Serviço 3</div>
                            <div class="text-wrapper-8">Serviço 4</div>
                            <div class="text-wrapper-8">Serviço 5</div>
                        </div>
                    </div>
                    <div class="rec01"></div>
                    <div class="rodape">
                        <div class="rectangle-15"></div>
                        <p class="text-wrapper-9">© 2024 Drop Agricultura de Precisão. Todos os direitos reservados.</p>
                    </div>
                </div>
                <img class="artwork-bg" src="img/artwork-bg.png" />
                <div class="coluna-text-2">
                    <div class="rectangle-16"></div>
                    <p class="text-wrapper-10">Sinta-se a vontade para entrar em contato conosco</p>
                    <p class="text-wrapper-11">
                        Não perca tempo e de um UP na sua produção utilzando nossos produtos e serviços. Entre contato agora mesmo
                        conosco e descubra com podemos te ajudar a potencializar o rendimento de seu negocio
                    </p>
                    <button class="button">
                        <div class="widget-text-2"><div class="text-wrapper-12">Contate-nos</div></div>
                    </button>
                </div>
            </div>
                
            <header class="header">
                <div class="section-4">
                    <div class="logo">
                        <a href="Wireframe-Principal.php" class="div-3">
                            <img class="dropagricultura-logo" src="img/dropagricultura_logo-removebg-preview.png" />
                            <div class="DROP-logo">DROP</div>
                        </a>
                    </div>
                    <div class="nav-bar">
                        <div class="div-3">
                            <div class="link"><div class="text-wrapper-34">Empresa</div></div>
                            <div class="dropdown">
                                <button class="link-2">
                                    <div class="text-wrapper-34">Drop Máquinas e Acessórios</div>
                                    <img class="seta" src="img/iconSeta.png" />
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">Aplicação de sulco no plantio</a>
                                    <a href="#">Controladores</a>
                                    <a href="#">Cortadores de Soqueira</a>
                                    <a href="#">Drop Mix</a>
                                    <a href="#">Preparadores de calda para drone</a>
                                </div>
                                
                            </div>
                            <div class="dropdown">
                                <div class="link-2">
                                    <div class="text-wrapper-34">Drop Digital</div>
                                    <img class="seta" src="img/iconSeta.png" />
                                </div>
                                <div class="dropdown-content">
                                    <a href="#">MIP Solos Cana</a>
                                    <a href="#">Nematchau</a>
                                    <a href="#">Acesse nossa plataforma</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <div class="link-2">
                                    <div class="text-wrapper-34">Drop Serviços</div>
                                    <img class="seta" src="img/iconSeta.png" />
                                </div>
                                <div class="dropdown-content">
                                    <a href="#">Treinamentos</a>
                                    <a href="#">Manuais</a>
                                    <a href="#">Catálogos</a>
                                    <a href="#">Pós-Vendas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="menu-2">
                            <div class="menu-icon-idle">
                                <div class="rectangle-27"></div>
                                <div class="rectangle-28"></div>
                                <div class="rectangle-29"></div>
                            </div>
                            <div class="frame-3">
                                <a href="#" class="menu-options">Nosso Contato</a>
                                <a href="#" class="nosso-contato-wrapper">Nossos Produtos</a>
                                <a href="#" class="nosso-contato-wrapper">Nossos Clientes</a>
                                <a href="#" class="frame-4">Catálogos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        </div>
    <script src="Base.js"></script>
    </body>
</html>
