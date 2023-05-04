/*
Plugin Name: SORTCODE Download Manual
Description: server para auxiliar o controle de botões do componente para download de Manuais
Version: 1.0
Author: Vinicius Fernandes
*/

function pdf_download_shortcode($atts) {
    // Extrai os atributos do shortcode
    $atts = shortcode_atts( array(
        'url' => '',
    ), $atts );

    // Verifica se a URL do PDF foi fornecida
    if ( empty( $atts['url'] ) ) {
        return '';
    }

    // Cria o botão de download
    $body = '<div class="shortcode-download"> <a href="' . esc_url( $atts['url'] ) . '" download><button>Download Manual</button></a> <button class="triggerclass-form-products">Faça um orçamento</button></div>';

    return $body;
}
add_shortcode( 'shortecode_botoes', 'pdf_download_shortcode' );