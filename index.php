<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="assets/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jamerson Souza">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,
    400;1,400;1,700&family=Open+Sans:ital@0;1&family=Oswald&family=Oxygen
    :wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="Projeto 1 - Linguagem PHP">
    <title>Jamerson Souza - Project</title>
</head>

<body>
    
        <header>
            <div class="center">
            <div class="logo left">Php Code</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>


            <nav class="mobile right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div>
            <div class="clear"></div>
        </header>
        <div class="container">
        <section class="banner-main">
            <form method="post">
                <h2>Qual seu melhor email?</h2>
                <input type="email" required name="email">
                <input type="submit" name="acao" value="Cadastre-se!">
            </form>
        </section>

        <section class="descricao-autor">
            <div class="w50 left">
                <h2>Jamerson Souza</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Pariatur amet esse et voluptas
                    , velit odio quisquam mollitia dolor vero soluta e
                    os, voluptatibus id rerum deserunt consectetur
                    veritatis error assumenda aliquid.</p>

            </div>

            <div class="w50 left">
                <!--Imagem -->
                <img src="assets/myfoto.jpg" alt="" />
            </div>

            <div class="clear"></div>

        </section>

        <section class="especialidades">
            <h2 clas="title">Especialidades</h2>
            <div class="w33 left box-espec">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <h3>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</h3>
            </div>

            <div class="box-espec w33 left">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML 5 </h3>
                <h3>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</h3>
            </div>


            <div class="box-espec w33 left">
                <h3><i class="fab fa-js-square"></i></h3>
                <h3>Javascript</h3>
                <h3>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</h3>
            </div>
        </section>
        <!-- SECTION PARA DEPOIMENTOS E SERVIÇOS -->
        <section class="extras">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="dep-descricao">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aliquid autem, fugit officia
                        impedit voluptatibus doloribus provident esse
                        dolorum qui reprehenderit facere necessitatibus
                        a ipsam eveniet, ducimus doloremque cumque
                        quos? Animi.</p>
                    <p class="nome-autor">Jamerson Souza</p>
                </div>

                <div class="depoimento-single">
                    <p class="dep-descricao">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aliquid autem, fugit officia
                        impedit voluptatibus doloribus provident esse
                        dolorum qui reprehenderit facere necessitatibus
                        a ipsam eveniet, ducimus doloremque cumque
                        quos? Animi.</p>
                    <p class="nome-autor">Jamerson Souza</p>
                </div>


                <div class="depoimento-single">
                    <p class="dep-descricao">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aliquid autem, fugit officia
                        impedit voluptatibus doloribus provident esse
                        dolorum qui reprehenderit facere necessitatibus
                        a ipsam eveniet, ducimus doloremque cumque
                        quos? Animi.</p>
                    <p class="nome-autor">Jamerson Souza</p>
                </div>
            </div>


            <!-- INICIO DOS SERVIÇOS FIM DO DEPOIMENTOS -->


            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit a
                            met consectetur adipisicing
                            elit. Porro unde esse volupt
                            ate enim non delectus volup
                            tatibus nulla consequatur i
                        </li>
                        <li>Lorem ipsum dolor sit a
                            met consectetur adipisicing
                            elit. Porro unde esse volupt
                            ate enim non delectus volup
                            tatibus nulla consequatur i
                        </li>
                        <li>Lorem ipsum dolor sit a
                            met consectetur adipisicing
                            elit. Porro unde esse volupt
                            ate enim non delectus volup
                            tatibus nulla consequatur i
                        </li>
                    </ul>
                </div>

                <div class="clear"></div>
        </section>
    </div>
    <div class="clear"></div>
    <footer class="rodape">

        <p class="txt-footer">Todos os direitos Reservados.</p>

    </footer>

    <script src="https://kit.fontawesome.com/006642858d.js"></script>
</body>

</html>