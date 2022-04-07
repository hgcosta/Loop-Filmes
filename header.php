<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/fav.png">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/lightbox.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/lightbox.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!--[if lt IE 7]>
                    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
        <![endif]-->
        <title><?php bloginfo('name')?> | <?php the_title()?></title>
        <?php wp_head();?>
        <style>
            .quem-somos .cont-quem-somos .col-img .conteudo-equipe p{
                font-family: tt;
                text-align: center;
                color: #fff;
                font-size: .95rem!important;
                max-width: 300px;
                margin: 0 auto;
            }
            .servicos .cont-servicos .item-servico .conteudo{
                background: #110F0F;
                padding: 1rem .5rem;
                text-align: center;
                height: 205px;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0;
                z-index: 2;
                opacity: 0;
                transition: all ease-in-out .5s;
                width: 100%;
                flex-direction: column;
            }
            @media only screen and (max-width: 900px){
                .servicos .cont-servicos .item-servico{
                    height: 220px;
                }
                .servicos .cont-servicos .item-servico .conteudo{
                    opacity:1!important;
                }
            }
            .img-logo{
                width: 120px;
                height: 50px ;
            }
            footer .cont-footer .loop-direitos img{
                width: 85px;
                height: 60px;
            }
        </style>
    </head>
    <body <?php body_class()?> >
    <!-- Header -->
    <header class="header-site">    
       <div class="cont-header container">
            <!-- Logo -->
            <div class="logo"><h1><a href=""><img class="img-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-header.svg" alt="Loop Produtora"></a></h1></div>
            <!-- Menu Desktop -->
            <nav class="menu-desktop">
                    <ul class="list-unstyled">
                        <li><a href="#quem-somos">Quem Somos</a></li>
                        <li><a href="#o-que-fazemos">O que fazemos</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#orcamento">Orçamento</a></li>
                    </ul>
            </nav>
            <!-- Icone Mobvile -->
            <div class="menu-icon  wow slideInDown" data-wow-duration="2s" onclick="openNav()" onclick="closeNav()">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/menu.png" alt="">
            </div>
            <!-- Menu mobile -->
            <div id="myNav" class="overlay">
                <div class="logo-mobile">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-rodape-loop.svg" alt=""></a>
                </div>
                <nav class="overlay-content">
                    <ul class="list-unstyled">
                        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                        <li><div class="barra"><a href="#quem-somos" onclick="closeNav()">Quem Somos</a></div></li>
                        <li><div class="barra"><a href="#o-que-fazemos" onclick="closeNav()">O Que Fazemos</a></div></li>
                        <li><div class="barra"><a href="#portfolio-mobile" onclick="closeNav()">Portfólio</a></div></li>
                        <li><div class="barra"></div><a href="#orcamento" onclick="closeNav()">Orçamento</a></li>
                    </ul>
                    <ul class="list-unstyled social-mobile">
                        <li><a href="https://www.instagram.com/loop.fotofilmes/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/insta.svg" alt=""></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=5581981288928" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/whatsapp.svg" alt=""></a></li>
                        <li><a href="mailto:contato@loopfotofilmes.com.br"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/email.svg" alt=""></a></li>
                        <li><a href="https://www.youtube.com/channel/UCqCDdB7RZCt1hp3qvesEKxQ" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a></li>
                        <li><a href="https://www.facebook.com/loop.produtora" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a></li>
                    </ul>
                </nav>
            </div>
       </div>
    </header>
    <aside>
        <ul class="list-unstyled lista-social">
            <li><a href="https://www.instagram.com/loop.fotofilmes/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/insta.svg" alt=""></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5581981288928" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/whatsapp.svg" alt=""></a></li>
            <li><a href="mailto:contato@loopfotofilmes.com.br"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/email.svg" alt=""></a></li>
            <li><a href="https://www.youtube.com/channel/UCqCDdB7RZCt1hp3qvesEKxQ" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a></li>
            <li><a href="https://www.facebook.com/loop.produtora" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a></li>
        </ul>
    </aside>