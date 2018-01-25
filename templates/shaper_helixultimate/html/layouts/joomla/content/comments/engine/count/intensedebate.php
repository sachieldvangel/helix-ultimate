<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('JPATH_BASE') or die();

if( $displayData['params']->get('intensedebate_acc') != '' ) {
	?>
	<span class="comments-anchor">
		<script type="text/javascript">
			var idcomments_acct = '<?php echo $displayData["params"]->get("intensedebate_acc"); ?>';
			var idcomments_post_id = '<?php echo md5( $displayData["url"] )?>';
			var idcomments_post_url = encodeURIComponent("<?php echo $displayData['url'];?>");
		</script>
		<script type="text/javascript" src="//www.intensedebate.com/js/genericLinkWrapperV2.js"></script>
	</span>
	<?php
}
