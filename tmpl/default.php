<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_footer
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$data_user_id = (int) $params->get('data_user_id', 0);
$data_assistant_id = (int) $params->get('data_assistant_id', 0);
$data_color1 = (string) $params->get('data_color1', '#72755f');
$data_color2 = (string) $params->get('data_color2', '#888c6f');
$data_lang = trim((string) $params->get('data_lang', ''));
$data_btn_align = strtolower(trim((string) $params->get('data_btn_align', 'right')));
$data_btn_offset_bottom = (int) $params->get('data_btn_offset_bottom', 24);
$data_btn_offset_horizontal = (int) $params->get('data_btn_offset_horizontal', 24);
$data_btn_zindex = (int) $params->get('data_btn_zindex', 1110);

if ($data_btn_align !== 'left' && $data_btn_align !== 'right') {
	$data_btn_align = 'right';
}
if ($data_btn_offset_bottom < 0) {
	$data_btn_offset_bottom = 24;
}
if ($data_btn_offset_horizontal < 0) {
	$data_btn_offset_horizontal = 24;
}
if ($data_btn_zindex < 1) {
	$data_btn_zindex = 1110;
}

?>
<div id="headqr-chat-widget-container"
	 data-user-id="<?php echo (int) $data_user_id; ?>"
	 data-assistant-id="<?php echo (int) $data_assistant_id; ?>"
	 data-btn-bg-color1="<?php echo $data_color1; ?>"
	 data-btn-bg-color2="<?php echo $data_color2; ?>"
	 data-btn-align="<?php echo $data_btn_align; ?>"
	 data-btn-offset-bottom="<?php echo $data_btn_offset_bottom; ?>"
	 data-btn-offset-horizontal="<?php echo $data_btn_offset_horizontal; ?>"
	 data-btn-z-index="<?php echo $data_btn_zindex; ?>"

	 <?php echo $data_lang != ''? 'data-lang="'.$data_lang.'"': ''; ?>
></div>
<script src="https://www.headqr.com/media/com_headqr/js/chat-widget.min.js" type="text/javascript"></script>
