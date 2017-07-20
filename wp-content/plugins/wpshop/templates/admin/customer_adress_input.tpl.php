<?php if ( !defined( 'ABSPATH' ) ) exit;
?>
<p class="wpshop_customer_adress_edition_input_container wpshop_customer_adress_edition_input_container_<?php echo $input_identifier; ?>">
	<label class="wpshop_customer_adress_edition_input_label" for="wpshop_customer_adress_edition_input_<?php echo strtolower($address_type); ?>_<?php echo $input_identifier; ?>"><?php echo __( $input_label, 'wpshop'); ?></label>
	<input id="wpshop_customer_adress_edition_input_<?php echo strtolower($address_type); ?>_<?php echo $input_identifier; ?>" class="wpshop_customer_adress_edition_input wpshop_customer_adress_edition_input_<?php echo $input_identifier; ?>" type="text" <?php echo $input_options; ?> value="<?php echo $input_value; ?>" name="user[<?php echo strtolower($address_type); ?>_info][<?php echo $input_identifier; ?>]">
</p>