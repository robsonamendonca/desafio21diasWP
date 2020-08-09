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
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <?php
                    if( have_posts()){
                        while ( have_posts()){
                            the_post();
                     ?>
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <?php echo the_title();?>
                    <img class="img-fluid" src="<?php echo $url;?>/assets/img/portfolio/game.png" alt="" />
                </div>
            </div>
            <!-- fim Portfolio Item 1-->
        </div>

        <?php        
                        }// end while
                    }//end if
                    ?>
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
                 Sou fã de tecnologia, café e programação. Eu também estou interessado em desenvolvimento web e voluntariado.
                 </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Hey there, I’m Robson. I’m a web developer living in São Paulo, Brasil. 
                I am a fan of technology, coffee, and programming. I’m also interested in web development and volunteering.</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://robsonamendonca.github.io/jogodavelha/index.html" target="_blank">
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