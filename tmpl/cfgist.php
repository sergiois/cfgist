<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
?>
<script src="https://gist.github.com/sergiois/<?php echo $value; ?>.js"></script>