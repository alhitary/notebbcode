<?php
/**
*
* @package phpBB Extension - notebbcode
* @copyright (c) 2016, 2017 3Di (Marco T.)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary <http://alhitary.net>
*/


if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ERROR_MSG_3111_321_MISTMATCH'	=>	'الحد الأدنى لنسخة المنتدى 3.1.11 ولكن أقل من 3.2.0@dev أو أكبر من 3.2.1 ولكن أقل من 3.3.0@dev',
));
