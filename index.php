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
 $url = get_stylesheet_directory_uri();
?>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="<?php echo $url;?>/assets/img/robson.png" alt="robsonamendonca" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Robson Mendonça</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Desenvolvedor Web, Consultor e Voluntário em São
            Paulo, Brasil</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Habilidades</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <!-- Portfolio Grid Items-->
            <?php
        $args = array(
            'posts_per_page'=> 3,
            'post_type'=> 'post'
        );
        $the_query_post = new WP_Query($args);
        if($the_query_post->have_posts()){           
            $i=1;
            // while ($the_query_post->have_posts()) {                
            //     $the_query_post->the_post();   
            foreach ($the_query_post->posts as $key => $post) {
                # code...
          
                $portfolioId= "portfolioModal".$i;                            
            ?>

            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target=<?php echo "'#{$portfolioId}'"?>>
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">

                            <!-- <?php //the_title();?> -->
                            <?php 
                                echo "Titulo: ".$post->post_title."<br>";  
                                echo "Nome: ".$post->post_name."<br>";
                                echo "Tipo: ".$post->post_type."<br>";
                                echo "Alterado: ".$post->post_modified."<br>";
                                echo "Status: ".$post->post_status."<br>";                                                      
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'style'=>'width:100%')); ?>
                    </div>
                </div>
            </div>
            <!-- fim Portfolio Item 1-->
            <!-- Portfolio Modals-->
            <!-- Portfolio Modal 1-->
            <div class="portfolio-modal modal fade" id=<?php echo "'{$portfolioId}'"?> tabindex="-1" role="dialog"
                aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                            id="portfolioModal1Label">
                                            <?php //the_title();
                                          echo $post->post_title;
                                     ?>
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded mb-5')); ?>
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-5">
                                            <?php //the_content(); 
                                           echo $post->post_content;
                                        ?>
                                        </p>
                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Fechar Janela
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fim Portfolio Modal 1-->
            <?php           
                $i++;
            }// end while
            ?>
            <a href="mais-itens" class="btn btn-primary" style="width:100%; text-align:center; display:inline;">Ver
                Mais</a>
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
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Ei, eu sou o Robson. Eu sou um desenvolvedor web que mora em São Paulo, Brasil.
                    Sou fã de tecnologia, café e programação. Eu também estou interessado em desenvolvimento web e
                    voluntariado.
                </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Hey there, I’m Robson. I’m a web developer living in São Paulo, Brasil.
                    I am a fan of technology, coffee, and programming. I’m also interested in web development and
                    volunteering.</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://robsonamendonca.github.io/jogodavelha/index.html"
                target="_blank">
                <i class="fas fa-gamepad mr-2"></i>
                Vamos Jogar!
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CONTATE-ME</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome</label>
                            <input class="form-control" id="name" type="text" placeholder="Seu Nome" required="required"
                                data-validation-required-message="Por favor, insira seu nome." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Endereço de e-mail</label>
                            <input class="form-control" id="email" type="email" placeholder="Seu E-mail"
                                required="required"
                                data-validation-required-message="Por favor, insira seu Endereço de e-mail." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Número de telefone</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Número de telefone"
                                required="required"
                                data-validation-required-message="Por favor, insira seu Número de telefone." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Sua Mensagem"
                                required="required"
                                data-validation-required-message="Por favor, insira uma mensagem."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                            type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>