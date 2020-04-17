<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="<?php echo INCLUDE_PATH;?>assets/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jamerson Souza">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,
    400;1,400;1,700&family=Open+Sans:ital@0;1&family=Oswald&family=Oxygen
    :wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="Projeto 1 - Linguagem PHP">
    <title>Jamerson Souza - Project</title>
</head>

<body>

    <?php
         //Essa parte só funciona com base no arquivo .htaccess
         $url = isset($_GET['url']) ? $_GET['url'] : 'home';
       switch ($url) {
           case 'depoimentos':
              echo '<target target="depoimentos" />';
               break;

               case 'servicos':
                echo '<target target="servicos"/>';
                 break;
           
       }
    ?>

    <header>
        <div class="center">
            <div class="logo left"><i class="fas fa-code"></i> Php Code <i class="fas fa-stream"></i></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos"><i class="fas fa-info-circle"></i> depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos"><i class="fas fa-users-cog"></i> Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato"><i class="fas fa-comment-dots"></i> Contato</a>
                    </li>
                </ul>
            </nav>


            <nav class="mobile right">
                <div class="menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos"><i class="fas fa-info-circle"></i> depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos"><i class="fas fa-users-cog"></i> Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato"><i class="fas fa-comment-dots"></i> Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </header>

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
        
          include('pages/'.$url.'.php');

       }else if($url != 'depoimentos' && $url != 'servicos'){
            //pode fazer o que quiser pois a pagina não existe
            include('pages/404.php');
           }else{
          
           include('pages/home.php');
       }

        ?>

    <div class="clear"></div>

    <footer class="rodape">

        <p class="txt-footer">Todos os direitos Reservados.</p>

    </footer>
    <script src="<?php echo INCLUDE_PATH;?>assets/js/jquery-3.5.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>assets/js/main.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>assets/js/slide.js"></script>
    <script src="https://kit.fontawesome.com/006642858d.js"></script>
    <?php
        if($url == 'contato'){
        // o script abaixo só carrega se a url for a page de contato
        
     ?>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

            
    <script src="<?php echo INCLUDE_PATH;?>assets/js/initMap.js"></script>
    <?php
    } 
    //fechamento do php 
   ?>
   -->
</body>

</html>