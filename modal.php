
<!-- Modal Aniversários-->
<div class="modal fade" id="modal-aniversarios" tabindex="-1" role="dialog" aria-labelledby="modal-aniversariosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="owl-carousel wol-theme carrosel-aniversario">
          <div class="item">                    
            <img class="d-block w-100" src="<?php the_field('img-destaque-mobile')?>">
          </div>
          <?php if(have_rows('adicionar-portfolio-aniversario')): while(have_rows('adicionar-portfolio-aniversario')) : the_row(); ?> 
            <div class="item">
              <img class="d-block w-100" src="<?php the_sub_field('img-portfolio-aniversario')?>">
            </div>
          <?php endwhile; else : endif; ?>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Casamento-->
<div class="modal fade" id="modal-casamentos" tabindex="-1" role="dialog" aria-labelledby="modal-casamentosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="owl-carousel wol-theme carrosel-casamento">
          <div class="item">
              <img class="d-block w-100" src="<?php the_field('img-destaque-mobile-casamentos')?>">
          </div>
          <?php if(have_rows('adicionar-portfolio-casamentos')): while(have_rows('adicionar-portfolio-casamentos')) : the_row(); ?> 
            <div class="item">
              <img class="d-block w-100" src="<?php the_sub_field('img-portfolio-casamentos')?>">
            </div>
          <?php endwhile; else : endif; ?>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Kids-->
<div class="modal fade" id="modal-kids" tabindex="-1" role="dialog" aria-labelledby="modal-kidsTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="carrosel-kids" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php the_field('img-destaque-mobile-kids')?>">
                </div>
                <?php if(have_rows('adicionar-portfolio-aniversario-kids')): while(have_rows('adicionar-portfolio-aniversario-kids')) : the_row(); ?> 
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php the_sub_field('img-portfolio-aniversario-kids')?>">
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carrosel-kids" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrosel-kids" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Videos-->
<div class="modal fade" id="modal-videos" tabindex="-1" role="dialog" aria-labelledby="modal-videosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="carrosel-videos" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php the_field('img-destaque-mobile-videos')?>">
                </div>
                <?php if(have_rows('adicionar-portfolio-video')): while(have_rows('adicionar-portfolio-video')) : the_row(); ?> 
                    <div class="carousel-item">
                        <?php the_sub_field('video')?>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carrosel-videos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrosel-videos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Entrevistas-->
<div class="modal fade" id="modal-entrevistas" tabindex="-1" role="dialog" aria-labelledby="modal-entrevistasTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="carrosel-entrevistas" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php the_field('img-destaque-mobile-entrevistas')?>">
                </div>
                <?php if(have_rows('adicionar-portfolio-entrevistas')): while(have_rows('adicionar-portfolio-entrevistas')) : the_row(); ?> 
                    <div class="carousel-item">
                        <?php the_sub_field('entrevistas')?>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carrosel-entrevistas" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrosel-entrevistas" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
      </div>
    </div>
  </div>
</div>