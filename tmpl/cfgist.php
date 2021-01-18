<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Gist
 *
 * @copyright   Copyright (C) 2019 SergioIglesiasNET
 * @license     GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
?>
<script src="<?php echo $value; ?>.js"></script>