<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/svg" href="./images/logo.svg">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <title>Lara Aguilar</title>
    <script>
        
        // toda vez que a página é carregada executa essa função
        document.addEventListener("DOMContentLoaded", function(event){

            // Estas condições verificam a página atual para deixar em 
            // evidência (verde e bold) no menu do header
            var url_atual = window.location.pathname;
            if(url_atual === "/index.php"){
                selected = document.getElementById('home');
                selected.style.color = "#1BA008";
                selected.style.fontWeight = 700;
        }
        })

    </script>
</head>
<body>
    <!-- CONTEUDO DO HEADER -->
    <?php include 'projetos.html' ?>
    <header id="landing">
        <div class="logo">
            <a href="./index.php"><img src="./images/logo-text.svg" alt="Logo lâmpada"></a>
        </div>
        <nav>
            <ul>
                <li><a id="home" href="./index.php">Home</a></li>
                <li><a id="projetos" href="#">Projetos</a></li>
                <li><a id="sobre mim" href="#">Sobre Mim</a></li>
                <li><a id="contato" href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTEUDO PRINCIPAL -->
    <main>
        <div>
            <p>Olá, eu sou a</p>
            <h1>Lara Aguilar</h1>
            <p id="developer">Desenvolvedora Front-End & Web Designer.</p>
            
            <!-- Botoes Call to Action -->
            <button name="cta-service" type="button" class="btn" href="#">Contrate meu serviço</button>
            <button name="cta-works" class="btn outline">Veja meus trabalhos</button>

        </div>
        <div class="image-landing">
            <img src="./images/image-landing.svg" alt="">
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
    </footer>
</body>
</html>