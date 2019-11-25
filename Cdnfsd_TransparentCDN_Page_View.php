<?php
namespace W3TC;

if ( !defined( 'W3TC' ) )
	die();

$key = $config->get_string( 'cdnfsd.transparentcdn.client_id' );
$authorized = !empty( $key );

?>
<form id="cdn_form" action="admin.php?page=w3tc_cdn" method="post">
	<div class="metabox-holder">
		<?php Util_Ui::postbox_header( __( 'Configuration: Full-Site Delivery', 'w3-total-cache' ),
	'', 'configuration' ); ?>


<tr>
    <th style="width: 300px;"><label for="cdnfsd_transparentcdn_company_id"><?php _e( 'Company id:', 'w3-total-cache' ); ?></label></th>
    <td>
        <input id="cdnfsd_transparentcdn_company_id" class="w3tc-ignore-change" type="text"
           <?php Util_Ui::sealing_disabled( 'cdnfsd.transparentcdn.company_id' ) ?> name="cdnfsd__transparentcdn__company_id" value="<?php echo esc_attr( $config->get_string( 'cdnfsd.transparentcdn.company_id' ) ); ?>" size="60" />
    </td>
</tr>
<tr>
    <th><label for="cdnfsd_transparentcdn_clientid"><?php _e( 'Client id:', 'w3-total-cache' ); ?></label></th>
    <td>
        <input id="cdnfsd_transparentcdn_clientid" class="w3tc-ignore-change"
           <?php Util_Ui::sealing_disabled( 'cdnfsd.transparentcdn.client_id' ) ?> type="text" name="cdnfsd__transparentcdn__client_id" value="<?php echo esc_attr( $config->get_string( 'cdnfsd.transparentcdn.client_id' ) ); ?>" size="60" />
    </td>
</tr>
<tr>
    <th><label for="cdnfsd_transparentcdn_clientsecret"><?php _e( 'Client secret:', 'w3-total-cache' ); ?></label></th>
    <td>
        <input id="cdnfsd_transparentcdn_clientsecret" class="w3tc-ignore-change"
           <?php Util_Ui::sealing_disabled( 'cdnfsd.transparentcdn.client_secret' ) ?> type="text" name="cdnfsd__transparentcdn__client_secret" value="<?php echo esc_attr( $config->get_string( 'cdnfsd.transparentcdn.client_secret' ) ); ?>" size="60" />
    </td>
</tr>
<tr>
	<th colspan="2">
        <input id="cdn_test" class="button {type: 'transparentcdn', nonce: '<?php echo wp_create_nonce( 'w3tc' ); ?>'}" type="button" value="<?php _e( 'Test TransparentCDN', 'w3-total-cache' ); ?>" /> <span id="cdn_test_status" class="w3tc-status w3tc-process"></span>
    </th>
</tr>

		<?php Util_Ui::button_config_save( 'cdn_configuration' ); ?>
		<?php Util_Ui::postbox_footer(); ?>
	</div>
</form>
