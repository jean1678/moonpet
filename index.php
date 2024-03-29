<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css-js/style.css">
    <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>MoonPet</title>
</head>

<body class="body">
    <!--Inicio Botâo de subir pro inicio-->
    <a href="#inicio"><button class="subir"><img src="https://cdn.pixabay.com/photo/2016/09/05/10/50/app-1646212_1280.png"></button></a>
    <!--Fim Botâo de subir pro inicio-->

    <!--Header Inicio-->
    <header id="inicio">

        <!--Inicio Nav-Bar-->
        <nav class="menu">
            <!--Inicio Menu hamburguer-->
            <input type="checkbox" class="menu-faketrigger" id="menu">

            <div class="menu-lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!--Fim Menu hamburguer-->

            <!--Inicio Links Menu-->
            <ul>
                <li><a href="adocao.php">Adote</a></li>
                <li><a href="doacao.php">Doe</a></li>
                <li><a href="facaParte.php">Cadastre-se</a></li>
                <li><a href="login.php" target="_self">Login</a></li>
            </ul>
            <!--Fim Links Menu-->
        </nav>
        <!--Fim Nav-Bar-->

        <!--Titulo da Pagina-->
        <h1 id="titulo" class="titulo">MoonPet</h1>
        <!--Fim Titulo da Pagina-->
    </header>
    <!--Header Fim-->

    <!--Main Inicio-->
    <main>
        <!--Carrossel-->
            <!--Inicio slider-->
            <div class="slider">
                <div class="slides">

                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
            

                    <div class="slide first">
                        <img src="img/garro.png" alt="Slide1">
                    </div>
                    <div class="slide">
                        <img src="img/gatinho.png"
                            alt="Slide2">
                    </div>
                    <div class="slide">
                        <img src="img/gato.jpeg" alt="Slide3">
                    </div>
                    <div class="slide">
                        <img src="img/gatoto.png" alt="Slide4">
                    </div>
                    <div class="slide">
                        <img src="img/vista-lateral-sorridente-mulher-abracando-cachorro (1).jpg" alt="Slide4">
                    </div>

                </div>
            </div>
            <!--Fim do Slider-->

        </div>
        <!--Fim Carrossel-->
        <section class="Galeria">
            <div class="item">
                <img src="img/gatoto.png  ">
                <div class="legenda">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
    
            <div class="item">
                <img src="img/gato.jpeg"> <div class="legenda">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/garro.png">
                <div class="legenda">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                </div>
            </div> 

            <div class="item">
                <img src="img/vista-lateral-sorridente-mulher-abracando-cachorro (1).jpg">
                <div class="legenda">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
    
            <div class="item">
                <img src="img/gatinho.png"> <div class="legenda">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            </div>
    
            
        </section>

        <!--Inicio Sobre-->
        <section class="Sobre">

            <!--Incio Titulo Sobre-->
                <div class="sobreT">
                    <h2>Sobre Nós</h2>
                </div>
                <!--Incio Titulo Sobre-->

                <!--Paragrafos Sobre-->
                <p>Somos um grupo focado em adoções e doações de pets, por aqui tem o intuito de encontrar lares cheios
                    de amor e carinho para esses peludinhos a procura de uma família!
                </p>
                <br>
                <p>Em nosso espaço, temos cães, gatos e outras raças para todos os perfis e lares navegue abaixo para
                    acessar as fotos e tudo que você precisa saber sobre os nossos peludinhos: nome, grupo etário,
                    porte, sexo, castrado ou não, se há alguma necessidade especial ou doença, além do perfil social.
                </p>
                <!--Paragrafos Sobre-->
        </section>
        <!--Fim Sobre-->

        <!--Inicio Adoção-->
        <section ID="ADOTAR" class="Adocao">

            <!--Inicio Titulo Adoção-->
                <div class="adocaoT">
                    <h2>Está a fim de Adotar um Pet?</h2>
                </div>
                <!--Inicio Titulo Adoção-->

                <!--Paragrafos Adoção-->
                <p>
                    Antes de tudo é muito importante refletir antes da adoção, pense em qual espécie de animal voce vai
                    adotar, o ambiente onde ele irá viver, pois cada pet exige um cuidado especial e diferente. Também é
                    essencial pensar a longo prazo, afinal, cada animal possue, em geral, um tempo de vida acima dos dez
                    anos.
                </p>
                <br>
                <p>
                    <b>Acima de tudo:</b> lembre-se que voce estará adotando uma vida, pense e repense com cuidado antes
                    de acabar adotando sem resposabilidade nenhuma, pois esse pet irá virar um membro de sua familia.
                </p>
                <!--Paragrafos Adoção-->

                <!--Botão Adotar-->
                <div class="btnAdocao">
                    <a href="adocao.php" id="btn-AD">Adote</a>
                </div>
                <!--Botão Adotar-->
        </section>
        <!--FIM ADOCAO-->

        <!--INICIO DOAÇÃO-->
        <section ID="DOAR" class="Doacao">
            <!--Incio titulo Doação-->
            <div class="doacaoT">
                    <h2>Pensando em Doar seu Pet?</h2>
            </div>
            <!--Incio titulo Doação-->
            

            <!--Paragrafos Doação-->
            <p>
                    Existe aquela famosa frase “amigo não se compra e nem se abandona”. Mas sabemos que muitas vezes a
                    permanencia do bichinho com a família é inviável, ainda que não falte amor por ele. Por exemplo, se
                    a pessoa já não tem mais condições financeiras de cuidar daquele animal ou apenas não tem mais tempo
                    dar a atenção que o animal precisa.
            </p>
            <br>
            <p>
                    Mas <b>lembre-se</b>, muitas vezes, assumir que não tem condições de oferecer o que o animal merece é
                    um verdadeiro ato de amor!
            </p>
            <!--Paragrafos Doação-->

            <!--Botão Doação-->
            <div class="btnDoacao">
                <a href="doacao.php">Doe</a>
            </div>
            <!--Botão Doação-->

        </section>
        <!--FIM DOAÇÃO-->
    </main>
    <!--Main Fim-->

    <!--Inicio Footer-->
    <footer>
        <div class="container">
            <p>&copy; 2023 Moon Pet. Todos os direitos reservados.</p>
            <ul class="footer-links">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Serviços</a></li>
                <p class="contato">MoonPet@Gmail.com</p>
            </ul>
        </div>
    </footer>
    <!--Fim Footer-->

    <!--Contato-->
    <section class="Contato popup opened" id="popup">
        <button type="submit" class="close-popup-btn" onclick="handlePopup(true)">Fechar</button>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit" class="btn-form" >Enviar</button>

            <input type="hidden" name="accessKey" value="042be0d3-84fa-4ae8-aaed-2434cda72cac">
            <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.html">
        </form>
    </section>
    <!--Contato-->
    <!--Script slider-->
    <script src="js/slide.js"></script>
    <script>
        const popup = document.getElementById('popup');

        function handlePopup(open){
            popup.classList[open ? 'add' : 'remove'] ('opened');
        }
        
        function toggleCheckboxOnMobile() {
        var checkbox = document.getElementById('menu');
        var menu = document.querySelector('#main');

        document.addEventListener('touchstart', function(event) {

            if (typeof event.touches !== menu) { 
                checkbox.checked = false;
            }
            else{
                checkbox.checked = true;
            }
    });
    }

    document.addEventListener('DOMContentLoaded', function() {
        toggleCheckboxOnMobile();
    });

    //destop
        const items = document.querySelectorAll(".item");
        items.forEach((item) => {
        item.addEventListener("click",() =>{
            if(item.classList.contains("show")){
                item.classList.remove("show");
            }
            else{
                item.classList.add("show");
            }
            //items.forEach((item) => item.classList.remove("show"));
            
        });
    });
    </script>
    <!--Script slider-->
</body>

</html>