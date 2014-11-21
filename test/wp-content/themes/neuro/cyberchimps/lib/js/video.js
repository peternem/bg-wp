/**
 * Title: Video JS
 *
 * Description: Adds class to video iframe to make it responsive.
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

// Add class to video iframe
jQuery(document).ready(function ($) {
	jQuery("iframe[src^='http://www.youtube.com']").wrap("<div class='flex-video' />");
	jQuery("iframe[src^='//www.youtube.com']").wrap("<div class='flex-video' />");
	jQuery("iframe[src^='http://player.vimeo.com']").wrap("<div class='flex-video' />");
	jQuery("embed[type^='application/x-shockwave-flash']").wrap("<div class='flex-video' />");
});