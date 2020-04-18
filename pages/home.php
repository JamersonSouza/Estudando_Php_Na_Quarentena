<section class="banner-main">
        <div class="overlay"></div>
        <div class="center">
            <?php
                if(isset($_POST['acao'])){
                    //enviou formlario
                    if($_POST['email'] != ''){
                        $email = $_POST['email'];
                                       
                    }else{
                        echo '<script>alert("campo não pode estar vazio");</script>';
                    }
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        $mail = new Email('smtp.gmail.com', 'ineoup@gmail.com', 'zero81@10', 'Jamerson Souza');
                        $mail->addAdress('neouseroff@gmail.com', 'neo');
                        $info = array('assunto'=>'Um Novo Email', 'corpo' => $email);
                        $mail->formatarEmail($info);
                        if($mail->enviarEmail()){
                            echo '<script>alert("Enviado com sucesso!");</script>';
                        }else{
                            echo '<script>alert("Algo deu errado.");</script>';
                        }
                        //TUDO CERTO EMAIL ENVIADO
                    }else{
                        echo '<script>alert("Email Invalido");</script>';
                    }
            }
            ?>
            <form method="post"  class="form-main">
                <h2>Qual seu melhor email?</h2>
                <input type="email" name="email">
                <input type="submit" name="acao" value="Cadastre-se!">
            </form>
            </div>
        </section>

        <div class="container">
        <section class="descricao-autor">
            <div class="w50 left">
                <h2>Jamerson Souza</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Pariatur amet esse et voluptas
                    , velit odio quisquam mollitia dolor vero soluta e
                    os, voluptatibus id rerum deserunt consectetur
                    veritatis error assumenda aliquid.</p>
                    <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Pariatur amet esse et voluptas
                    , velit odio quisquam mollitia dolor vero soluta e
                    os, voluptatibus id rerum deserunt consectetur
                    veritatis error assumenda aliquid.</p>

            </div>

            <div class="w50 left">
                <!--Imagem -->
                <img class="right" src="http://localhost/PROJETO_1/assets/myfoto.jpg" alt="" />
            </div>

            <div class="clear"></div>
</div>
        </section>

        <section class="banner">
            <div class="overlay"></div>
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>assets/img_1.jpg')" class="banner-single"></div>
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>assets/img_2.jpg')" class="banner-single"></div>
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>assets/img_3.jpg')" class="banner-single"></div>
            <div class="bullets">
                <span class="active-slide"></span>
                <span></span>
                <span></span>
            </div>
        </section>

        <section class="especialidades">
            <div class="container">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-espec">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h4>CSS3</h3>
                <p>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</p>
            </div>

            <div class="box-espec w33 left">
                <h3><i class="fab fa-html5"></i></h3>
                <h4>HTML 5 </h3>
                <p>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</p>
            </div>


            <div class="box-espec w33 left">
                <h3><i class="fab fa-js-square"></i></h3>
                <h4>Javascript</h3>
                <p>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Earum
                    repudiandae nesciunt facilis cum por
                    ro quo laborum vel cupiditate ratione
                    beatae? Unde veniam recusandae place
                    at saepe similique sunt numquam aut
                    sit.</p>
            </div>
            <div class="clear"></div>
            </div>
        </section>
        <!-- SECTION PARA DEPOIMENTOS E SERVIÇOS -->
        <section class="extras">
            <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div id="depoimentos" class="depoimento-single">
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
                <div class="servicos" id="servicos">
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
                </div>
                <div class="clear"></div>
            </div>
        </section>
    