<?php


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../tela_cadastro/cadastro.css" />
        <script src="scripts.js" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
        />
        <title>CADASTRO</title>
    </head>
<body>
        <header>
            <div class="div-logo">
                <a href="" class="logo">
                    <img src="../img/logo-admin.jfif" alt="Logo" width="92vh" />
                </a>
            </div>

            <nav class="links">
                <ul>
                    <li><a href="" class="rosa-claro">Home</a></li>
                    <li><a href="" class="atendimento">Atendimento</a></li>
                </ul>
            </nav>
        </header>
    <main>

        <section class="cadastro-container">
            <form class="form-produto" method="POST" action="../acoes/acoes.php" enctype="multipart/form-data">
            
                <div class="aba-cadastro-pessoa">
                
                <div class="img-usuario-perfil"> 
                <h1>Foto:</h1>
                    <label id="texto-foto" for="categoria"></label>
                        <img src="" alt="" srcset="">
                    <input type="file" name="foto" id="foto" accept="image/*" />

                </div>

                <div class="informacoes-usuario">
                    <form action="../acoes/acoes.php" method="post">

                        <p>Nome:</p>
                            <input type="text" name="acao" id="nome" value="inserir">
                        <p>CPF:</p>
                            <input type="text" name="acao" id="cpf" value="inserir">
                        <p>Email:</p>
                            <input type="text" name="acao" id="email" value="inserir">
                        <p>Senha:</p>
                            <input type="text" name="acao" id="senha" value="inserir">

                       
                            <button>Salvar</button>
                            <button onclick="javascript:window.location.href = '../'">Cancelar</button>
                        
                    </form>
                </div>
            </div>

            

    </main>
    <footer>
            <div class= "footer_class">
               <h3 class="informacoes">Sobre nós</h3>
               <div class="img_copyright">
                   <img class="redessociais" src="../img/wpp.PNG" alt="">
                   <img class="redessociais" src="../img/yt.PNG" alt="">
                   <img class="redessociais" src="../img/pinterest.PNG" alt="">
                   <img class="redessociais" src="../img/insta.PNG" alt="">
                   <img class="redessociais" src="../img/facebook.PNG" alt="">
               </div>
               <h3 class="copyright">© Copyright 2021 Clarissa Estelia Makeup </h3>
               <h3 class="informacoes">Politica de privacidade</h3>
          
       </footer>

</body>