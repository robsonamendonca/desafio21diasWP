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
$url = get_stylesheet_directory_uri();
get_header();
?>

<article class="container" style="margin-top: 150px; text-align:center;">

    <img src="<?php echo $url;?>/assets/img/404.png" alt="Erro 404"/>

    <div class="row">
        <div class="col-lg-4 ml-auto">
            <p class="lead">
			<?php _e("A página não foi encontrada!"); ?>
            </p>
        </div>
        <div class="col-lg-4 mr-auto">
            <p class="lead">
			    <?php _e("O que você deseja:"); ?>
                <div class="search-form">
                    <?php get_search_form(); ?>
                </div>
            </p>
        </div>
    </div>
	<p>ou volte para a página incial.</p>
    <div class="text-center mt-4">
        <a class="btn btn-xl btn-primary" href="<?php echo home_url();?>/#page-top">
            <i class="fa fa-arrow-left mr-2"></i>
            Voltar!
        </a>
    </div>
	<br/>
</article>

<?php
get_footer();