<?php
/**
 * Tema construido no Desafio21Dias
 *
 * @link http://torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage Desafio21Dias
 * @since Desafio21Dias
 */

get_header();

while ( have_posts() ) {
    the_post(); ?>

<article class="container" style="margin-top: 150px; text-align:center;">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php the_title(); ?></h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>    
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'style'=>'width:300px;'));?>
    
    <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead"><?php the_content(); ?>
                </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">
                    <p class="categories">Categorias: <?php the_category(', ') ?></p>
                    <?php if(has_tag()) { ?>
                      <p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
                    <?php } ?>
                </p>
            </div>
    </div>
    <div class="text-center mt-4">
            <a class="btn btn-xl btn-primary" href="javascript:window.history.go(-1);" >                
                <i class="fa fa-arrow-left mr-2"></i>
                Voltar!
            </a>
        </div>
    <hr>
    <?php 
      //comentarios....
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
    ?>

</article>

<?php
}

get_footer();