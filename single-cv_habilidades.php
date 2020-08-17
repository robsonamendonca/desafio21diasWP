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
$nome="";
$profissao="";
$email="";
$site ="";
$celular="";
$resumo ="";
$experiencias="";
$habilidades="";
$escolaridade="";
$template_experiencias ='<article>
<h2>#cargo_empresa</h2>
<p class="subDetails">#de_ate</p>
<p>#descricao</p>
</article>';
$template_habilidades="<li>#habilidade</li>";
$template_escolaridade='<article>
<h2>#instituicao</h2>
<p class="subDetails">#curso</p>
<p>#descricao</p>
</article>';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page'=> 10,
    'paged'  => $paged,
    'post_type'     => 'cv_habilidades'
);
$the_query_post = new WP_Query($args);
 if ($the_query_post->have_posts() ) : 
    while ( $the_query_post->have_posts() ) : 
        $the_query_post->the_post();  
        if (get_field('secao')){
            $secao = get_field('secao'); 
        }   
        if ( $secao == "Dados Pessoais"){
            $nome = get_field('nome_completo') ? get_field('nome_completo') : "";
            $profissao=get_field('profissao') ? get_field('profissao') : "";
            $email=get_field('email') ? get_field('email') : "";
            $site =get_field('site') ? get_field('site') : "";
            $celular=get_field('celular') ? get_field('celular') : "";
        }
        if ( $secao == "Resumo Profissional"){
            $resumo = get_field('descricao') ? get_field('descricao') : "";
        }
        if ( $secao == "Experiências"){
            $cargo_empresa=get_field('descricao_title') ? get_field('descricao_title') : "";
            $de=get_field('mesano_inicial') ? get_field('mesano_inicial') : "";
            $ate=get_field('mesano_final') ? get_field('mesano_final') : "";
            $descricao=get_field('descricao') ? get_field('descricao') : "";
            $template_experiencias = str_replace("#cargo_empresa",$cargo_empresa,$template_experiencias);
            $template_experiencias = str_replace("#de_ate",$de .' - '.$ate,$template_experiencias);
            $template_experiencias = str_replace("#descricao",$descricao,$template_experiencias);
            $experiencias.= $template_experiencias;
        }        
        if ( $secao == "Habilidades"){
            $descricao=get_field('descricao') ? get_field('descricao') : "";
            $template_habilidades = str_replace("#habilidade",$descricao,$template_habilidades);
            $habilidades.= $template_habilidades;
        }
        if ( $secao == "Escolaridade"){
            $instituicao=get_field('descricao_title') ? get_field('descricao_title') : "";
            $curso=get_field('descricao') ? get_field('descricao') : "";
            $descricao=get_the_content();
            $template_escolaridade = str_replace("#instituicao",$instituicao,$template_escolaridade);
            $template_escolaridade = str_replace("#curso",$curso,$template_escolaridade);
            $template_escolaridade = str_replace("#descricao",$descricao,$template_escolaridade);
            $escolaridade.= $template_escolaridade;
        }        

    endwhile;
else:?>
    <p> Nenhum post encontrado!</p>
<?php
endif;   
?>
<!DOCTYPE html>
<html>
<head>
<title>Robson Mendonça - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="Curriculum Vitae de Robson Mendonça."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="<?php echo $url;?>/assets/css/cv/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $url;?>/assets/img/robson.png" alt="Robson Mendonça" />
		</div>
		<div id="name">   
			<h1 class="quickFade delayTwo"><?php echo $nome;?></h1>
			<h2 class="quickFade delayThree"><?php echo $profissao;?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="mailto:<?php echo $email;?>" target="_blank"><?php echo $email;?></a></li>
				<li>w: <a href="<?php echo $site;?>"><?php echo $site;?></a></li>
				<li>m: <?php echo $celular;?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>O que tenho para oferecer</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $resumo;?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>EXPERIÊNCIA RELEVANTE</h1>
			</div>
			
			<div class="sectionContent">
                <?php echo $experiencias;?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>HABILIDADE TÉCNICAS</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
                  <?php echo $habilidades;?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>FORMAÇÃO ACADÊMICA</h1>
			</div>
			
			<div class="sectionContent">
              <?php echo $escolaridade;?>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>