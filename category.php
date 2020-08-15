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
if( have_posts() ){
?>
<div class="container" style="margin-top: 150px;">
    <h2>Categorias</h2>  
    <div style="text-align:right;cursor: pointer;" onclick="javascript:window.history.go(-1);"><i class="fa fa-reply-all" aria-hidden="true"></i> Voltar </div>
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
                        while ( have_posts() ) {                
                            the_post();                                       
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
<?php }//endif
get_footer();