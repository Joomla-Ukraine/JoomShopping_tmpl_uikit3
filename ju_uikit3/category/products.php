<?php
/**
 * JoomShopping JU Uikit3
 *
 * @package          Joomla.Site
 * @subpackage       ju_uikit3
 *
 * @author           Denys Nosov, denys@joomla-ua.org
 * @copyright        2024 (C) Joomla! Ukraine, https://joomla-ua.org. All rights reserved.
 * @license          GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<?php if($this->display_list_products) : ?>

	<div class="uk-margin-medium-top">
		<hr class="uk-margin" />
		<?php include(__DIR__ . "/../" . $this->template_block_form_filter); ?>
		<hr class="uk-margin" />
	</div>

	<?php
	if(count($this->rows))
	{
		include(__DIR__ . "/../" . $this->template_block_list_product);
	}
	else
	{
		include(__DIR__ . "/../" . $this->template_no_list_product);
	}
	if($this->display_pagination)
	{
		include(__DIR__ . "/../" . $this->template_block_pagination);
	}
	?>
<?php endif; ?>