<?php if ( !defined( 'ABSPATH' ) ) exit;
echo $element_main_infos; 
?> ( <a target="_wps_address_parent_edition_page" href="<?php echo admin_url( 'post.php?post=' . $address_associated_element->parent_id . '&action=edit' ); ?>" ><?php _e( 'Edit element', 'wpshop' ); ?></a> )