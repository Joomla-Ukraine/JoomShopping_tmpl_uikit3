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

defined('_JEXEC') or die();

echo $this->_tmp_category_html_start;

?>
	<h1 class="uk-article-title uk-margin-remove">
		<?php echo $this->category->name; ?>
	</h1>

<?php if(count($this->categories)) : ?>

	<ul class="uk-grid-medium uk-grid-match uk-grid" data-uk-height-match="target: li > .uk-card" data-uk-grid>
		<?php foreach($this->categories as $k => $category) : ?>
			<li class="uk-width-1-1 uk-width-1-2@s uk-width-1-<?php echo $this->count_category_to_row; ?>@m">
				<a href="<?php echo $category->category_link; ?>" class="uk-link-reset uk-card uk-card-default uk-card-hover uk-card-small">
					<div class="uk-card-media-top uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle">
							<img
									class="el-image uk-transition-scale-up uk-transition-opaque"
									src="<?php echo $this->image_category_path . '/' . ($category->category_image ? : $this->noimage); ?>"
									alt="<?php echo htmlspecialchars($category->name); ?>"
									title="<?php echo htmlspecialchars($category->name); ?>"
							>
						</div>
					</div>
					<div class="uk-card-body">
						<div class="uk-h4">
							<?php echo $category->name; ?>
						</div>
						<div class="uk-text">
							<?php echo $category->short_description; ?>
						</div>
					</div>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

<?php endif; ?>

<?php if($this->category->description): ?>
	<div class="uk-margin uk-text-meta">
		<?php echo $this->category->description; ?>
	</div>
<?php endif; ?>

<?php
echo $this->_tmp_category_html_before_products;

include(__DIR__ . "/products.php");

echo $this->_tmp_category_html_end;