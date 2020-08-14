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
    
    <?php the_title(); ?>
    <hr>
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'style'=>'width:300px;'));?>
    <hr>
    <div style="text-align: left;">
        <?php the_content(); ?>
    </div>
    
    <p class="categories">Categorias: <?php the_category(', ') ?></p>
    <?php if(has_tag()) { ?>
      <p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
    <?php } 
      //comentarios....
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
    ?>

</article>

<?php
}

get_footer();