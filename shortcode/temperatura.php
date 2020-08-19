<?php

//[resultado_temperatura]
add_shortcode( 'resultado_temperatura', 'resultado_temperatura_func' );

function resultado_temperatura_func( $atts ){    
    if(!isset($_GET["cidade"])){
      return "";
    }else{
        $cidade =  $_GET["cidade"];
    }
    $url = "http://api.hgbrasil.com/weather/?city_name=".$cidade."&format=json&key=04f77fd3";
    $response = file_get_contents($url);
    $response = json_decode($response,true);

    if(isset($response['results']['city'])){
       return "<p style='color:blue;font-size:small;'>".$response['results']['city']." - ".$response['results']['temp']." ºC<br>
       ".$response['results']['description']." <br>
       Nascer do Sol: ".$response['results']['sunrise']." - Pôr do Sol: ".$response['results']['sunset']."<br>
       Velocidade do vento: ".$response['results']['wind_speedy']."<br>       
       </p>
       <img src='".get_stylesheet_directory_uri(). "/shortcode/imagens/".$response['results']['img_id'].".png' class='imagem-do-tempo'><br>
       <br>" ;
    }else{
        return ;
    }
	
}

add_action('register_shortcode_ui','shortcode_resultado_temperatura');

function shortcode_resultado_temperatura(){
    shortcode_ui_register_for_shortcode('resultado_temperatura',array(
        'label'=>'Temperatura Resultado',
        'listItemImage'=>'dashicons-pressthis'
    ));
}


//[form_temperatura]
add_shortcode( 'form_temperatura', 'form_temperatura_func' );

function form_temperatura_func($atts){
    return "<h3>Temperatua da Cidade:</h3>
            <form action=''>
              <label>
                 Cidade:
                 <input name='cidade' type='text' placeholder='Digite sua cidade' 
                 required='required' 
                 >
              </label>
              <button type='submit' style='font-weight: bold;padding: 4px 8px;border:1px solid #000;background: #3b5998;color:#fff;'>Mostrar</buttom>
            </form>     
    ";
}

add_action('register_shortcode_ui','shortcode_form_temperatura_func');

function shortcode_form_temperatura_func(){
    shortcode_ui_register_for_shortcode('form_temperatura',array(
        'label'=>'Temperatura Form',
        'listItemImage'=>'dashicons-pressthis'
    ));
}