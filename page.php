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

$posts_per_page = isset($_POST["per_page"]) ? $_POST["per_page"] : 2;
$url = get_stylesheet_directory_uri();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page'=> $posts_per_page,
    'paged'  => $paged,
    'post_type'     => 'post'
);
$the_query_post = new WP_Query($args);
if($the_query_post->have_posts()){  ?>
<div class="container" style="margin-top: 150px;">
    <h2>Habilidades</h2>
    <p>Itens por páginas: <?php echo $posts_per_page; ?></p>
    <?php if($paged <= 1){?>
    <form name="frmper_page" action="" method="post">
        <select class="custom-select d-block w-20" name="per_page" id="per_page" placeholder="Itens por pagina..."
            required="">
            <option value="2">Escolha</option>
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="500">500</option>
        </select>
    </form>
    <?php } ?>
    <hr />
    <p>Digite algo no campo abaixo para pesquisar títulos ou conteúdos na página corrente:</p>
    <input class="form-control" id="txtbusca" type="text" placeholder="Pesquisa...">
    <br>
    <table class="table" id="tabHabilidades">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Título</th>
                <th scope="col">Conteúdo</th>
            </tr>
        </thead>
        <tbody>

            <?php         
                        while ($the_query_post->have_posts()) {                
                            $the_query_post->the_post();                                       
                        ?>
            <tr>
                <th scope="row"><?php the_id();?></th>
                <td>
                    <a href="<?php echo get_permalink();?>">
                        <div style="width:128px; height: 128px; overflow: hidden;">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'style'=>'width:100%'));?>
                        </div>
                    </a>
                </td>
                <td><a href="<?php echo get_permalink();?>">
                        <?php the_title();?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo get_permalink();?>">
                        <?php the_content();?>
                    </a>
                </td>
            </tr>
            <?php           
                            
                        }// end while
                        ?>

        </tbody>
        <caption>
            <?php
        global $wp_query; 
        $wp_query = $the_query_post;
        echo paginate_links(array(
            'prev_text' => __('<i class="fa fa-reply-all" aria-hidden="true"></i>'),
            'next_text' => __('<i class="fa fa-share" aria-hidden="true"></i>'),
            'before_page_number' => ' [ ',       
            'after_page_number'  => ' ] ',
        ));
?>
        </caption>
    </table>
</div>
<?php
}//
else{ ?>
<div class="text-center mt-4 alert alert-danger" role="alert">
    <p>Nenhum post encontrado!</p>
</div>
<?php           
}//end if
?>
</div>
</div>
</section>

<?php get_footer();?>
