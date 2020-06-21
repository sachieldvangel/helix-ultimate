<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

use Joomla\CMS\Layout\LayoutHelper;

extract($displayData);

$fields 	= $form->getFieldset($key);
$groups = array();

if (!empty($fields))
{
	foreach ($fields as $i => $field)
	{
		$group = $field->getAttribute('helixgroup') ? $field->getAttribute('helixgroup') : 'no-group';
		$groups[$group]['fields'][] = $field;
	}
}

$headerTitle = implode(' ', explode('_', $fieldset->name));

?>

<div class="hu-edit-panel <?php echo strtolower($fieldset->name); ?>-panel">
	<div class="hu-panel-header">
		<span><?php echo ucwords($headerTitle); ?></span>
		<button type="button" role="button" class="hu-btn hu-btn-round hu-btn-round-sm hu-panel-close" data-sidebarclass="<?php echo 'hu-fieldset-' . $fieldset->name; ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"><path d="M9.708.292a.999.999 0 00-1.413 0l-3.289 3.29L1.717.291A.999.999 0 00.305 1.705l3.289 3.289-3.29 3.289a.999.999 0 101.413 1.412l3.29-3.289 3.288 3.29a.999.999 0 001.413-1.413l-3.29-3.29 3.29-3.288a.999.999 0 000-1.413z"/></svg>
		</button>
	</div>
	<div class="hu-groups-container">
		<?php echo LayoutHelper::render('cpanel.control-board.fieldset.groups', ['groups' => $groups, 'fieldset_name' => $fieldset->name], HELIX_LAYOUTS_PATH); ?>
	</div>
</div>