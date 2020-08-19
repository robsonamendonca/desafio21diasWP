<?php

add_shortcode( 'mega_sena', 'shortcode_megasena_func' ); // [mega_sena number="last"]
 
function shortcode_megasena_func( $atts ) {
	// $params = shortcode_atts( array( // if you need a default value, set it here
	// 	'number' => 'last',
	// ), $atts );
    if(!isset($_GET["number"])){
        return "";
      }else{
          $params['number'] = SomenteNumeros($_GET["number"]);
          $params['lottery'] =  "mega_sena";
      }
 
	$cache_key = 'mega_sena_cache';
	$megasena_resultado = false;//get_transient( $cache_key );
 
	// if no data in the cache
	if ( $megasena_resultado === false ) {
 
		// build the URL for wp_remote_get() function
		$resultado = wp_remote_get( add_query_arg( array(
                'lottery'=> $params['lottery'],
    			'number' => $params['number'] // numero do concurso
		), 'http://pedemeia.lraminformatica.xyz/v1' ) );
 
		if ( !is_wp_error( $resultado ) && wp_remote_retrieve_response_code( $resultado ) == 200 ) {
 
            $resultado = json_decode( wp_remote_retrieve_body( $resultado ) );
            $comma_separated = implode(",", $resultado->sorteio);
			$megasena_resultado = '<h2 style="color:green;">'.$comma_separated.'</h2>';  
			// print_r( $resultado ); // use it to see all the returned values!
 
			//set_transient( $cache_key, $megasena_resultado, 7200 ); // 2 hours cache
		} else {
			return; // you can use print_r( $resultado ); here for debugging
		}
 
	}
	return $megasena_resultado;
}

add_action('register_shortcode_ui','shortcode_mega_sena_func');

function shortcode_mega_sena_func(){
    shortcode_ui_register_for_shortcode('mega_sena',array(
        'label'=>'Mega Sena Resultado',
        'listItemImage'=>'dashicons-editor-customchar'
    ));
}


//[form_megasena]
add_shortcode( 'form_megasena', 'form_megasena_func' );

function form_megasena_func($atts){
    return "<h3>Consulta Mega Sena:</h3>
            <form action=''>
              <label>
                 Concurso:
                 <input name='number' type='text' placeholder='Seu número do concurso' 
                 required='required' 
                 >
              </label>
              <button type='submit' style='font-weight: bold;padding: 4px 8px;border:1px solid #000;background: #3b5998;color:#fff;'>Buscar</buttom>
            </form>     
    ";
}

add_action('register_shortcode_ui','shortcode_form_megasena_func');

function shortcode_form_megasena_func(){
    shortcode_ui_register_for_shortcode('form_megasena',array(
        'label'=>'Mega Sena Form',
        'listItemImage'=>'dashicons-editor-customchar'
    ));
}