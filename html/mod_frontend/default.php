<?php
/**
 * @package    Bettum
 * @copyright  Copyright (C) 2020 Charlie Lodder. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;
?>
<a class="d-none d-lg-flex align-items-center nav-link" href="<?php echo Uri::root(); ?>"
	title="<?php echo Text::sprintf('MOD_FRONTEND_PREVIEW', $sitename); ?>"
	target="_blank">
	<div class="align-items-center tiny">
		<span class="fas fa-external-link-alt" aria-hidden="true"></span>
		<span class="sr-only"><?php echo HTMLHelper::_('string.truncate', $sitename, 28, false, false); ?></span>
	</div>
</a>
