<?php
/*
 * Plugin Name: Remove Double-Click to Edit for Comments
 * Description: Disables the double-click to edit action for comments
 * Author: Pippin Williamson
 * Version: 1.0
 */

class Remove_Double_Click_To_Edit {
		
	public function __construct() {
		add_action( 'admin_footer', array( $this, 'javascript' ) );
	}

	public function javascript() {

		global $pagenow;

		if( 'edit-comments.php' != $pagenow ) {
			return;
		}
?>
		<script>
		(function($){
			$('tr.comment').each(function() {
				$(this).find('a.vim-q').each(function() {
					$(this).removeClass('vim-q');
				});
			});
		}(jQuery));
		</script>
<?php
	}

}
new Remove_Double_Click_To_Edit;