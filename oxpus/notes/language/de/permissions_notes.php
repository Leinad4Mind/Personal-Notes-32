<?php

/**
*
* @package phpBB Extension - Personal notes
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* Language pack for Extension permissions [German]
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Permissions
$lang = array_merge($lang, array(
	'ACP_NOTES'		=> 'Notizen',
	'ACL_A_NOTES'	=> 'Kann die persönlichen Notizen einstellen',
));
