<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<div id="ns-placeholder-group">
		<table>
			<tr>
				<td><p>Choose an image from your gallery </p></td>
				<td><button id="ns-gallery-btn" type="button">Open Gallery</button></td>
				<td><button id="ns-set-to-default" class="ns-remove-img-btn ns-tab1-remove-img" type="button" >Set to default</button></td>
			</tr>		
		</table>	
		<input id="ns-placeholder-image-from-list" name="ns-placeholder-image-from-list" placeholder="..." readonly />
		<input type="hidden" id="ns-replace-default-place-val" name="ns-replace-default-place-val" value="<?php echo plugin_dir_url( __FILE__ ).'img/placeholder.png';?>">
	</div>
	

<?php settings_fields('ns_cusplaceholder_options_group'); ?>
