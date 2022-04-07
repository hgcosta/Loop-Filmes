<?php // Template Name: Home ?> 
<?php  get_header(); ?>
<main class="home">
    <!-- Banner -->
    <section class="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="item-carrosel">
                        <img src="<?php the_field('banner')?>" alt="<?php the_field('titulo')?>">
                        <div class="legenda">
                            <h2><?php the_field('titulo')?></h2>
                        </div>
                    </div>
                </div>
                <?php if(have_rows('adicionar-novo-banner')): while(have_rows('adicionar-novo-banner')) : the_row(); ?> 
                 <div class="carousel-item">
                    <div class="item-carrosel">
                        <img src="<?php the_sub_field('banner')?>" alt="<?php the_sub_field('titulo')?>">
                        <div class="legenda">
                            <h2><?php the_sub_field('titulo')?></h2>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    <section class="quem-somos" id="quem-somos">
        <div class="cont-quem-somos container">
            <div class="col-info">
                <h2>Quem somos</h2>
                <p><strong>Amamos contar histórias.</strong> E para isso, usamos a linguagem da fotografia e do cinema, para nos conectar com as pessoas e seus propósitos.</p>
                <p> A LOOP é uma produtora de conteúdo audiovisual criada por duas mulheres empreendedoras e apaixonadas pelo o que fazem. Atuamos no mercado desde 2013.</p>
                <!-- Só parece no mobile -->
                <p class="chamada-quem-somos-mobile">Essa é é um pouco da nossa história, <strong> agora queremos contar um pouco da sua.</strong></p>
                <!-- Só aparece no mobile -->
                <img class="destaque-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/quem-somos-mobile.jpg" alt="">
                <ul class="list-unstyled btn-quem-somos js-tabmenu">
                    <li>teste</li>
                    <li>ANA Luiza</li>
                    <li>Priscila Duarte</li>
                </ul>
                <p class="chamada-quem-somos">Essa é é um pouco da nossa história, <strong> agora queremos contar um pouco da sua.</strong></p>
            </div>
            <div class="col-img js-tabcontent">
                <section>
                    <img class="img-destaque" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/quem-somos-loop.jpg">
                </section>
                <section class="equipe">
                    <div class="conteudo-equipe">
                        <img src="<?php the_field('img-analu')?>" alt="Ana Luiza">
                        <h3>Ana Luiza</h3>
                        <p><?php the_field('conteudo-analu')?></p>
                    </div>
                </section>
                <section class="equipe">
                    <div class="conteudo-equipe">
                        <img src="<?php the_field('img-priscila')?>" alt="Priscila Duarte">
                        <h3>Priscila Duarte</h3>
                        <p><?php the_field('conteudo-priscila')?></p>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="servicos" id="o-que-fazemos">
        <div class="container">
            <div class="chamada">
                <h2>O que fazemos?</h2>
                <p>Da pré-produção à pós-produção, estamos prontas para captar o melhor do seu evento, ensaio fotográfico, produto, negócio, conteúdo para internet, etc. E ainda dar uma super força para gerenciar as suas redes sociais.</p>
            </div>
            <div class="cont-servicos">
                <?php if(have_rows('adicionar-novo-servico')): while(have_rows('adicionar-novo-servico')) : the_row(); ?> 
                    <article class="item-servico">
                        <div class="titulo">
                            <img src="<?php the_sub_field('icone-servico')?>" alt="<?php the_sub_field('titulo-servico')?>">
                            <h3><?php the_sub_field('titulo-servico')?></h3>
                        </div>
                        <div class="conteudo">
                            <img class="mb-3" src="<?php the_sub_field('icone-servico')?>" alt="<?php the_sub_field('titulo-servico')?>">
                            <h3><?php the_sub_field('titulo-servico')?></h3>
                            <p><?php the_sub_field('conteudo-servico')?></p>
                        </div>
                    </article>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    <section class="portfolio-desktop" id="portfolio">
        <div class="container">
            <div class="info-portfolio">
                <h2>Portfólio</h2>
                <!-- Itens Portfolio -->
                <ul class="list-unstyled lista-nav js-tabMenuServicos">
                    <li>Filmes</li>
                    <li>Casamentos</li>
                    <li>Ensaio Fotográficos</li>
                    <li>Aniversário</li>
                    <li>Álbuns</li>        
                </ul>
            </div>
            <div class="js-tabContentServicos itens-portfolio">
                <section class="conteudo-servico">
                    <?php if(have_rows('adicionar-portfolio-filmes')): while(have_rows('adicionar-portfolio-filmes')) : the_row(); ?> 
                        <article class="item-portfolio"> 
                            <?php the_sub_field('video')?>
                        </article>  
                    <?php endwhile; else : endif; ?>
                </section>
                <section class="conteudo-servico">
                    <?php if(have_rows('adicionar-portfolio-casamentos')): while(have_rows('adicionar-portfolio-casamentos')) : the_row(); ?> 
                        <article class="item-portfolio"> 
                            <a class="example-image-link" href="<?php the_sub_field('img-portfolio-casamentos')?>" data-lightbox="example-set" data-title=""><img class="example-image img-destacada" src="<?php the_sub_field('img-portfolio-casamentos')?>" alt=""/></a>
                        </article>  
                    <?php endwhile; else : endif; ?>
                </section>
                <section class="conteudo-servico">
                    <?php if(have_rows('adicionar-portfolio-ensaio')): while(have_rows('adicionar-portfolio-ensaio')) : the_row(); ?> 
                        <article class="item-portfolio"> 
                            <a class="example-image-link" href="<?php the_sub_field('img-portfolio-ensaio')?>" data-lightbox="example-set" data-title=""><img class="example-image img-destacada" src="<?php the_sub_field('img-portfolio-ensaio')?>" alt=""/></a>
                        </article>  
                    <?php endwhile; else : endif; ?>
                </section>
                <section class="conteudo-servico">
                    <?php if(have_rows('adicionar-portfolio-aniversario')): while(have_rows('adicionar-portfolio-aniversario')) : the_row(); ?> 
                    <article class="item-portfolio"> 
                            <a class="example-image-link" href="<?php the_sub_field('img-portfolio-aniversario')?>" data-lightbox="example-set" data-title=""><img class="example-image img-destacada" src="<?php the_sub_field('img-portfolio-aniversario')?>" alt=""/></a>
                        </article>   
                    <?php endwhile; else : endif; ?>
                </section>
                <section class="conteudo-servico">
                    <?php if(have_rows('adicionar-portfolio-albuns')): while(have_rows('adicionar-portfolio-albuns')) : the_row(); ?> 
                        <article class="item-portfolio"> 
                            <a class="example-image-link" href="<?php the_sub_field('imagem-album')?>" data-lightbox="example-set" data-title=""><img class="example-image img-destacada" src="<?php the_sub_field('imagem-album')?>" alt=""/></a>
                        </article>   
                    <?php endwhile; else : endif; ?>
                </section>
            </div>
        </div>
    </section>
    <section class="portfolio-mobile" id="portfolio-mobile">
        <h2>Portfólio</h2>
        <div class="cont-portfolio-mobile container">
            <article  data-toggle="modal" data-target="#modal-aniversarios">
                <div class="img-mobile-destaque">
                    <img src="<?php the_field('img-destaque-mobile')?>" alt="">
                </div>
                <div class="legenda-mobile-destaque">
                    <h3>Aniversários</h3>
                </div>
            </article>
            <article  data-toggle="modal" data-target="#modal-casamentos">
                <div class="img-mobile-destaque">
                    <img src="<?php the_field('img-destaque-mobile-casamentos')?>" alt="">
                </div>
                <div class="legenda-mobile-destaque">
                    <h3>Casamentos</h3>
                </div>
            </article>
            <article  data-toggle="modal" data-target="#modal-kids">
                <div class="img-mobile-destaque">
                    <img src="<?php the_field('img-destaque-mobile-kids')?>" alt="">
                </div>
                <div class="legenda-mobile-destaque">
                    <h3>Aniversários Kids</h3>
                </div>
            </article>
            <article  data-toggle="modal" data-target="#modal-videos">
                <div class="img-mobile-destaque">
                    <img src="<?php the_field('img-destaque-mobile-videos')?>" alt="">
                </div>
                <div class="legenda-mobile-destaque">
                    <h3>Vídeos</h3>
                </div>
            </article>
            <article  data-toggle="modal" data-target="#modal-entrevistas">
                <div class="img-mobile-destaque">
                    <img src="<?php the_field('img-destaque-mobile-entrevistas')?>" alt="">
                </div>
                <div class="legenda-mobile-destaque">
                    <h3>Entrevistas</h3>
                </div>
            </article>
        </div>
    </section>
    <section class="instagram">
        <h2>Estamos no instagram!</h2>
        <p>Segue e gente! <a href="https://www.instagram.com/loop.fotofilmes/" target="_blank">@loop.fotofilmes</a></p>
        <div class="container">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </div>
    </section>
    <section class="contato" id="orcamento">
        <div class="cont-contato">
            <div class="col-contato">
                <div class="conteudo-contato">
                    <h2>Vamos contar sua história?</h2>
                    <p>Vamos trabalhar em um projeto único, pensado especialmente para você. Preencha o formulário e entraremos em contato o mais rápido possível.</p>
                    <ul class="list-unstyled info">
                        <li>Made in Recife</li>
                        <li><a href="mailto:contato@loopfotofilmes.com.br">contato@loopfotofilmes.com.br</a></li>
                        <li><a href="telme:81981288928">(81) 98128-8928</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-form">
                <?php echo do_shortcode('[contact-form-7 id="30" title="Solicite um orçamento"]'); ?>
            </div>
        </div>
    </section>
</main>
<?php require 'modal.php'?>

<?php get_footer()?>