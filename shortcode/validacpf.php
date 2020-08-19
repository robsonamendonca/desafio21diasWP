<?php
//funcao tratamento
function limpaCPF($valor){
    $valor = preg_replace('/[^0-9]/', '', $valor);
    return $valor;
}

//https://validar-cpf-spring-boot.herokuapp.com/validacpf?cpf=1234

//[resultado_validacao_cpf]
add_shortcode( 'resultado_validacao_cpf', 'resultado_validacao_cpf_func' );

function resultado_validacao_cpf_func( $atts ){    
    if(!isset($_GET["cpf"])){
      return "";
    }else{
        $cpf =  limpaCPF($_GET["cpf"]);
    }
    $response = file_get_contents("https://validar-cpf-spring-boot.herokuapp.com/validacpf?cpf=$cpf");
    $response = json_decode($response);
    if($response->status == "valido"){
       return "<h2 style='color:green;'>CPF válido</h2>";
    }else{
        return "<h2 style='color:red;'>CPF inválido</h2>";
    }
	
}

add_action('register_shortcode_ui','shortcode_resultado_validacao_cpf');

function shortcode_resultado_validacao_cpf(){
    shortcode_ui_register_for_shortcode('resultado_validacao_cpf',array(
        'label'=>'Validador CPF Resultado',
        'listItemImage'=>'dashicons-list-view'
    ));
}


//[form_validacao_cpf]
add_shortcode( 'form_validacao_cpf', 'form_validacao_cpf_func' );

function form_validacao_cpf_func($atts){
    return "<h3>Validação de CPF:</h3>
            <form action=''>
              <label>
                 CPF:
                 <input name='cpf' type='text' placeholder='Digite seu CPF' 
                 required='required' 
                 >
              </label>
              <button type='submit' style='font-weight: bold;padding: 4px 8px;border:1px solid #000;background: #3b5998;color:#fff;'>Validar</buttom>
            </form>     
    ";
}

add_action('register_shortcode_ui','shortcode_form_validacao_cpf_func');

function shortcode_form_validacao_cpf_func(){
    shortcode_ui_register_for_shortcode('form_validacao_cpf',array(
        'label'=>'Validador CPF Form',
        'listItemImage'=>'dashicons-list-view'
    ));
}