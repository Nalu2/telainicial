<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>SBQ-Tela-Inicial</title>
</head>

<body>

    <!----------- NavBar começo ----------->

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="assets/img/logo.jpeg" alt="" width="200px">
            </div>
            <div class="nav-options">
                <div class="rede">
                    <h1>REDE SBQ</h1>
                    <div class="usual">
                        <img class="icon" src="assets/img/user.png" alt="">
                        <h3 class="usuario">Usuario:<br> Chitãozin</h3>
                    </div>
                    
                </div>

                <!-- Itens do NavBar -->
                <ul>
                    <li class="nav-item"><a href="sobreSBQ.html" class="nav-link">Sobre a Plataforma</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Instituiçôes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Suporte</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Como Participar</a></li>
                </ul>
            </div>

            <!-- Botão Deslogar -->
            <div class="deslogar-button">
                <button><a href="index.php">Deslogar</a></button>
            </div>

            <!-- Parte desnecessaria mas possivelmente util não sei bem ainda -->

           <!--  <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg" alt=""></button>
            </div> -->
            
        <!-- </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Deslogar</a></button>
            </div>
        </div> -->
    </header>

    <!----------- Parte de Pesquisa dos Equipamentos e Laboratórios ----------->

    <div class="pesquisa" >
        <img class="imagemq" src="/assets/img/decoraçao.jpg" alt="" width="100%" height="500px">
        <div class="digitacao">
            <input class="caixa" type="text" placeholder="pesquise por laboratórios, equipamentos...">
            <li><a href="#"> Pesquisar</a></li>
        </div>
        <h1 class="convite">Venha conhecer a Rede SBQ <br>temos coisas legais</h1>
        <ul class="num">
            <li >Instituições</li>
            <li >Laboratórios</li>
            <li >Equipamentos</li>
        </ul>

    </div>
    <div class="inform">
        
        <div class="titulo">
            <h2><img class="casa" src="assets/img/house.png" alt="">Bem vindo à SBQ</h2>
            <h4>A SBQ, fundada em Julho de 1977, é a principal sociedade de química do país e 
                tem como objetivos o desenvolvimento e consolidação da comunidade química brasileira, 
            a divulgação da Química e de suas importantes relações, aplicações e consequências para o desenvolvimento do país 
        e para a melhoria da qualidade de vida dos codadãos.</h4>
        <iframe src="https://www.youtube.com/embed/VLGAnl525qY" frameborder="0" width="400" height="300"></iframe>
        </div>
        <div class="titulo1">
            <h2>Eleições SBQ 2024 - processo de indicação</h2>
            <h4>Para participar do processo de indicação das Eleições SBQ 2024, acesse o sistema (https://sistema.sbq.org.br/pt/socio/pf/indicacao/), 
            utilize seu login e senha ao qual você utiliza como associado. A busca do indicado poderá ser feita através da digitação do nome. No caso das divisões, o sistema permitirá apenas a indicação de nomes de candidatos filiados às respectivas divisões. Reiteramos que o período de sugestões terá início no dia 27/11/2023 e término às 23h59min do dia 05/01/2024. </h4>
        </div>
        <div class="titulo2">
            <h2>Últimas Notícias e Eventos</h2>
            <h4>Professor Érico Flores da UFSM é o primeiro pesquisador latino-americano a receber a medalha Ioannes Marcus Marci
            SBQast 89 - Química do interior paulista atrai investimentos privados
            Coluna "Onde elas estão?" - Fátima Fontes
            SBQ adere à Conversa Global sobre Sustentabilidade
            Webinários SBQ - "Educação e Divulgação Científica para os ODS da Agenda 2030"
            "O Governo Federal precisa perceber o dano que está causando à Ciência e Tecnologia", alerta presidente da SBPC</h4>
        </div>
        
    </div>
    <?php include "footer.php"?>
    <script src="assets/js/script.js"></script>
</body>


</html>