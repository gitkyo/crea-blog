<?php if ( !defined( 'ABSPATH' ) ) exit;
?>
<button data-nonce="<?php echo wp_create_nonce( 'ajax_load_element_from_letter' ); ?>" class="wps-bton-<?php echo ( ( __( 'ALL', 'wps-pos-i18n' ) == $alpha ) || ( empty( $available_letters ) || ( in_array( $alpha, explode( ',', $available_letters ) ) ) ) ? ( !empty( $chosen_letter ) && ( $alpha == $chosen_letter ) ? 'third' : 'first' ) : 'second' ); ?>-rounded wps-pos-letter-choice wps-pos-letter-choice-<?php echo $alpha; ?> wps-pos-<?php echo $type; ?>-letter-choice wps-pos-<?php echo $type; ?>-letter-choice-<?php echo $alpha; ?> <?php echo $type; ?>" data-type="<?php echo $type; ?>" data-id="<?php echo $alpha; ?>" type="button" ><?php echo $alpha; ?></button>
