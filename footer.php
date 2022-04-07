<footer>
   <div class="cont-footer container">
        <div class="loop-direitos">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-footer.svg" alt="Loop Produtora">
            <span>Todos os direitos reservados</span>
        </div>
        <div class="assina-oiao">
            <span>Site desenvolvido por</span><a href="https://oiao.com.br/" target="_blank">Oião Digital</a>
        </div>
   </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer();?>
    <script>
        $('.carrosel-aniversario').owlCarousel({
            loop:true,
            autoplay:true,
            margin:0,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        $('.carrosel-casamento').owlCarousel({
            loop:true,
            autoplay:true,
            margin:0,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    </body>
</html>