<?php

/**
*
* @package phpBB Extension - Personal notes
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace oxpus\notes\migrations;

class release_3_0_1 extends \phpbb\db\migration\migration
{
	var $ext_version = '3.0.1';

	public function effectively_installed()
	{
		return isset($this->config['notes_version']) && version_compare($this->config['notes_version'], $this->ext_version, '>=');
	}

	static public function depends_on()
	{
		return array('\oxpus\notes\migrations\release_3_0_0');
	}

	public function update_data()
	{
		return array(
			// Set the current version
			array('config.update', array('notes_version', $this->ext_version)),
		);
	}
}
