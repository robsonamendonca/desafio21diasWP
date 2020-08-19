<?php
//https://api.linketrack.com/track/json?user=rob.ams@gmail.com&token=23fa1beb243cbfca240a53080bdb6d3066da50da9b60842ccfffd5ae94e7a514&codigo=OD121760716BR


add_shortcode( 'rastreador', 'shortcode_rastreador_func' ); // [rastreador objetos="last"]
 
function shortcode_rastreador_func( $atts ) {
	// $params = shortcode_atts( array( // if you need a default value, set it here
	// 	'objetos' => 'last',
	// ), $atts );
    if(!isset($_GET["objetos"])){
        return "";
      }else{
          $params['objetos'] = ($_GET["objetos"]);
      }
 
	$cache_key = 'rastreador_cache';
	$rastreador_resultado = false;//get_transient( $cache_key );
 
	// if no data in the cache
	if ( $rastreador_resultado === false ) {
 
        // build the URL for wp_remote_get() function
        $resultado = wp_remote_get( add_query_arg( array(
                'user' => 'rob.ams@gmail.com',
                'token' => '23fa1beb243cbfca240a53080bdb6d3066da50da9b60842ccfffd5ae94e7a514',
                'codigo' => $params['objetos'] // numero do objeto
        ), 'https://api.linketrack.com/track/json' ) );

        if ( !is_wp_error( $resultado ) && wp_remote_retrieve_response_code( $resultado ) == 200 ) {

            $resultado = json_decode( wp_remote_retrieve_body( $resultado ) );
            if( isset($resultado->quantidade) && $resultado->quantidade >0){
                $template = 'Serviço: '.$resultado->servico.'</br>';
                foreach ($resultado->eventos as $key => $evento) {
                    # code...
                    $template .= '<br>'.$evento->data.' '.$evento->hora.' - '.$evento->local.'<br/> => '.$evento->status;
                }
                $rastreador_resultado = '<p style="color:gray;font-size:small;">'.$template.'</p>';  
                //print_r( $resultado ); // use it to see all the returned values!
                //set_transient( $cache_key, $rastreador_resultado, 7200 ); // 2 hours cache
            }else{
                return;
            }
        } else {
            return; // you can use print_r( $resultado ); here for debugging
        }		
 
	}
	return $rastreador_resultado;
}

add_action('register_shortcode_ui','shortcode_ui_rastreador_func');

function shortcode_ui_rastreador_func(){
    shortcode_ui_register_for_shortcode('rastreador',array(
        'label'=>'Rastreamento por objeto',
        'listItemImage'=>'dashicons-cart'
    ));
}


//[form_rastreador]
add_shortcode( 'form_rastreador', 'form_rastreador_func' );

function form_rastreador_func($atts){
    return "<h3>Rastreamento por objeto:</h3>
            <form action=''>
              <label>
                 Código do Objeto:
                 <input name='objetos' type='text' placeholder='Seu código do Objeto' 
                 required='required' 
                 >
              </label>
              <button type='submit' style='font-weight: bold;padding: 4px 8px;border:1px solid #000;background: #3b5998;color:#fff;'>Rastrear</buttom>
            </form>     
    ";
}

add_action('register_shortcode_ui','shortcode_form_rastreador_func');

function shortcode_form_rastreador_func(){
    shortcode_ui_register_for_shortcode('form_rastreador',array(
        'label'=>'Rastreamento por objeto Form',
        'listItemImage'=>'dashicons-cart'
    ));
}